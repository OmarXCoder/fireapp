<?php
namespace App\Services;

use Kreait\Firebase\Contract\Firestore;

class FirestoreService
{
    public function __construct(protected Firestore $firestore)
    {
    }
}
