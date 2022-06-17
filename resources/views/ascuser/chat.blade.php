@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
    <body>
        <h1>個人チャット</h1>
        
          <form action="/users/chat" method="POST">
            @csrf
            
            <div class="body">
                <textarea name="chat[message]" placeholder="メッセージ"></textarea>
            </div>
        <div style="content__my user">
            <div class="my user">
                <p>自分のアカウントを選択してください</p> 
                 
                <select id="user" class="form-control @error('user') is-invalid @enderror" name="chat[sendname]" required autocomplete="current-user">
                    
                        <option value="{{ Auth::user()->id }}">{{Auth::user()->name}}</option>
                    
                </select>
                
            </div>
        </div>
            <div style="content__my user">
                <div class="my user">
                  <p>送信先のアカウントを選択してください</p> 
                   
                <select id="user" class="form-control @error('user') is-invalid @enderror" name="chat[recievename]" required autocomplete="current-user">
                     <option value="{{ $users->id }}">{{$users->name}}</option>
                </select>
               
            　　</div>
            </div>
            <input type="submit" value="送信"/>
        </form>
    </body>

@endsection