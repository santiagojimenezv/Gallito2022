<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class WelcomeController extends Controller
{
    public function index(User $user)
    {
        $users = User::all();
        return view('welcome', compact('users'));
    }
}
