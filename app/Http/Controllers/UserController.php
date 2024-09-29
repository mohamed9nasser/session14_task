<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Function to generate 100 users using factory
    public function generateUsers()
    {
        User::factory()->count(100)->create();
        return redirect()->route('users.index')->with('success', '100 users have been added!');
    }

    // Function to return the view with users data
    public function showUsers()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
}
