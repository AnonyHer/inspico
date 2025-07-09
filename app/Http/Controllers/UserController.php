<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Fetch all users from the database
        $users = User::with(['photos' => function ($query) {
            $query->latest()->take(4); // ambil 4 foto terbaru tiap user
        }])->get();


        // Return a view with the photos
        return view('user', compact('users')); 
    }
    public function show(User $user)
    {
        $photoCount    = $user->photos()->count();
        $likeCount     = $user->likesReceived()->count();
        $followerCount = $user->followers()->count();

        return view('profile.show', [
            'user' => $user,
            'likeCount' => $likeCount,
            'followerCount' => $followerCount,
        ]);
    }
}
