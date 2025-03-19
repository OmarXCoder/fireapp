<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Kreait\Firebase\Factory;

class PostController extends Controller
{
    public function index(Request $request)
    {

        $db = $this->fireDatabase();

        $res = $db->collection('posts')->documents([
            'page_size' => 10,
        ]);

        $rows = $res->rows();
        $posts = [];

        foreach ($rows as $row) {
            $posts[] = [
                'id' => $row->id(),
                'title' => $row->get('title'),
                'body' => $row->get('body'),
            ];
        }

        return Inertia::render('posts/Index', ['posts' => $posts]);
    }

    public function create(Request $request)
    {
        return Inertia::render('posts/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'body' => 'required|min:10'
        ]);

        $db = $this->fireDatabase();

        $db->collection('posts')->add([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'createAt' => now(),
        ]);

        return to_route('posts.index');
    }

    private function fireDatabase()
    {
        $factory = (new Factory)->withServiceAccount(config('services.firebase.credentials'));

        $firestore = $factory->createFirestore();

        return $firestore->database();
    }
}
