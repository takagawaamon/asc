@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="/css/index.css">
@endsection

@section('content')
        <div class='comment'>
        <h1>下のリンクからポジションで検索することができます</h1>
        </div>
        <div class="position">
        [<a href="/positions/1">FW</a>]
        [<a href="/positions/2">MF</a>]
        [<a href="/positions/3">DF</a>]
        [<a href="/positions/4">GK</a>]
        [<a href="/">全ポジション</a>]
        </div>
        <div class='ascusers'>
            <h2>選手一覧</h2>
            @foreach ($users as $user)
                <div class='ascusers'>
                    <h3 class='name'>
                        選手名:<a href="/ascusers/{{ $user->id }}">{{ $user->name }}</a>
                    </h3>
                <div class=icon>    
                    <img src=" {{ $user->icon_path }}">
                </div>    
                    <p class='age'></p>
                    <p class='position_id'>希望ポジション：{{ $user->position->name }}</p>
                    
                </div>
            @endforeach
        </div>
        
        <div style='text-align:center'>
             {{ $users->links('vendor.pagination.bootstrap-4') }}
        </div>
    
@endsection