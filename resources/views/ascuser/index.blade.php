@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

        <h1>下のリンクからポジションで検索することができます</h1>
        <div class="position">
        [<a href="/positions/1">FW</a>]
        [<a href="/positions/2">MF</a>]
        [<a href="/positions/3">DF</a>]
        [<a href="/positions/4">GK</a>]
        [<a href="/">全ポジション</a>]
        </div>
        <div class='ascusers'>
            @foreach ($users as $user)
                <div class='ascusers'>
                    <h2 class='name'>
                        選手名:<a href="/ascusers/{{ $user->id }}">{{ $user->name }}</a>
                    </h2>
                    <p class='age'></p>
                    <p class='position_id'>希望ポジション：{{ $user->position->name }}</p>
                    
                </div>
            @endforeach
        </div>
    
@endsection