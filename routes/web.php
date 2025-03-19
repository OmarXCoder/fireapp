<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('posts', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->middleware(['auth', 'verified'])->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->middleware(['auth', 'verified'])->name('posts.store');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
