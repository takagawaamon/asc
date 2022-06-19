@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
    <body>
        <head>
            <link href="{{ asset('css/chat.css') }}" rel="stylesheet">
        </head>
        <p class='title'>
            チャット
        </p>
          <form action="/users/chat" method="POST">
                  @foreach($chats as $chat)
                  @if($chat->sendname===Auth::user()->id && $chat->recievename===$users->id)
                   <div style="text-align:right">
                       <a>
                          {{Auth::user()->name}}
                          {{$users->name}}
                       </a>
                      <p>{{ $chat->message}}</p>
                    　<a>{{ $chat->updated_at}}</a>  
                   </div>　
                   @elseif($chat->sendname===$users->id && $chat->recievename===Auth::User()->id)
                   <a>{{$users->name}}->
                   　　{{Auth::User()->name}}
                   　　</a>
                  <div style="text-align:left">
                      <p>{{ $chat->message}}:</p>
                    <{{ $chat->updated_at}}
                   </div>　
                   @endif
                  @endforeach
                  <div style='text-align:center'>
                  {{ $chats->links() }}
                  </div>
            @csrf
            <div class="body">
                <textarea name="chat[message]" placeholder="メッセージ"></textarea>
            </div>
            <div class='submit'>
            <input type="submit" value="送信"/>
            </div>
            <div class='back'>
                [<a href="/">検索一覧に戻る</a>] 
            </div>
        <div style="content__my user">
            <div class="myuser">
                <p>自分のアカウントを選択してください</p> 
                <select id="user" class="form-control @error('user') is-invalid @enderror" name="chat[sendname]" required autocomplete="current-user">
                        <option value="{{ Auth::user()->id }}">{{Auth::user()->name}}</option>
                </select>
            </div>
        </div>
            <div style="content__my user">
                <div class="myuser">
                  <p>送信先のアカウントを選択してください</p> 
                <select id="user" class="form-control @error('user') is-invalid @enderror" name="chat[recievename]" required autocomplete="current-user">
                     <option value="{{ $users->id }}">{{$users->name}}</option>
                </select>
            　　</div>
            </div>

@endsection