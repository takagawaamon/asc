<?php

namespace App\Http\Controllers;

use App\User;
use App\Position;
use App\Ken;
use App\Chat;
use Storage;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{

    
    public function index(User $user)
    {
    
    return view('ascuser/index')->with([
        'users' => $user->getPaginateByLimit()
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
        $positions = Position::all();
        $kens = Ken::all();
        
    return view('ascuser/edit')->with([
        'user' => $user,
        'positions'=>$positions,
        'kens'=>$kens
        ]);
    }
    public function update(Request $request, User $user)
    {
        $user_input = $request['user'];
        $image = $user_input['icon_path'];
        //$image = $request->file('image');
        //dd($image);
        
        $path = Storage::disk('s3')->putFile('myprefix', $image, 'public');
        $image_path = Storage::disk('s3')->url($path);
        
        $input_user = $request['user'];
        //dd($input_user);
        $input_user['icon_path'] = $image_path;
        //dd($input_user);
        
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

