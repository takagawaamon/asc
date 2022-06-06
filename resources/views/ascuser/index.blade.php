@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>asc</title></title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>こちらで探しているポジションの方を検索することができます</h1>
        <div class="position">
        [<a href="/positions/1">FW</a>]
        [<a href="/positions/2">MF</a>]
        [<a href="/positions/3">DF</a>]
        [<a href="/positions/4">GK</a>]
        </div>
        <h2>全一覧</h2>
        <div class='ascusers'>
            @foreach ($users as $user)
                <div class='ascusers'>
                    <h2 class='name'>
                        <a href="/ascusers/{{ $user->id }}">{{ $user->name }}</a>
                    </h2>
                    <p class='age'></p>
                    <p class='position_id'>{{ $user->position->name }}</p>
                    
                </div>
            @endforeach
        </div>
            <div class="footer">
            [<a href="/">戻る</a>]
        </div>
    </body>
</html>
@endsection