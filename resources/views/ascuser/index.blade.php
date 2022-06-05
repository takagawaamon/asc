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
        <h1>全一覧</h1>
        <div class='ascusers'>
            @foreach ($users as $user)
                <div class='ascusers'>
                    <h2 class='name'>
                        <a href="/ascusers/{{ $user->id }}">{{ $user->name }}</a>
                    </h2>
                    <p class='age'></p>
                    <p class='position'>{{ $user->position }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>
@endsection