<?php

namespace App\Http\Controllers;

use App\Ascuser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Ascuser $ascuser)
    {
    return view('ascuser/index')->with(['ascusers' => $ascuser->get()]);
    }
    
    public function show(Ascuser $ascuser)
    {
    return view('ascusers/show')->with(['ascusers' => $ascuser->get()]);
    }
}
