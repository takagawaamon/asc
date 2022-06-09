@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="name">
            選手名：{{ $user->name }}
        </h1>
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
    </body>
</html>
@endsection