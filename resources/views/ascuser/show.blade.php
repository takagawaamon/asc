@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('head')
    <link rel="stylesheet" href="/css/show.css">
@endsection
@section('content')

        <h1 class="name">
            選手名：{{ $user->name }}
        </h1>
        <img src=" {{ $user->icon_path }}">
        <div class="content">
            <div class="content__ascuser">
            <p class='body'>自己紹介文：{{ $user->body }}</p>
            <p class='age'>年齢：{{ $user->age}}</p>
            <p class='position_id'>希望ポジション：{{ $user->position->name }}</p>
            <p class='ken_id'>今住んでいる場所：{{ $user->ken->name }}</p>
            </div>
        </div>
        <div class="footer">
            [<a href="/">検索一覧に戻る</a>]
        </div>
        <div class='chats'>
            <p class="chat">[<a href="/users/{{ $user->id }}/chat">相手の方と連絡を取ることができます</a>]</p>
        </div>
        <div class="footer">
            @if(auth::id()===$user->id )
            <div class="user_id">
            <p class="edit">[<a href="/users/{{ $user->id }}/edit">こちらで編集ができます</a>]</p>
            </div>
            @endif
        </div>
    
@endsection