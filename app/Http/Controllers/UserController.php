<?php

namespace App\Http\Controllers;

use App\User;
use App\Position;
use App\Ken;
use App\Chat;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    public function index(User $user)
    {
    
    return view('ascuser/index')->with([
        'users' => $user->get()
        ]);
    }
    
    public function show(User $user)
    {
    return view('ascuser/show')->with([
        'user' => $user
        ]);
    }
    public function edit(User $user)
    {
    return view('ascuser/edit')->with([
        'user' => $user,
        ]);
    }
    public function update(Request $request, User $user)
    {
    $input_user = $request['user'];
    $user->fill($input_user)->save();

    return redirect('/ascusers/' . $user->id);
    }
    public function chat(User $user,Chat $chat)
    {
        //dd($chat->get());
        $chats=$chat->getPaginateByLimit();
    
    return view('ascuser/chat')->with([
        'users' => $user,
        'chats' => $chats
        
        ]);
    }
    
    public function store(Chat $chat, Request $request, User $user)  
    {
        $input = $request['chat'];
        $chat->fill($input)->save();
        
        return redirect('/users/' . $chat->recievename.'/chat');
    }
    
}

