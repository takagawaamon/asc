<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {
    return view('ascuser/index')->with(['users' => $user->get()]);
    }
    
    public function show(User $user)
    {
    return view('ascuser/show')->with(['user' => $user]);
    }
}
