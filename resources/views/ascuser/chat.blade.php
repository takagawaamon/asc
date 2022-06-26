@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('head')
    <link rel="stylesheet" href="/css/chat.css">
@endsection

@section('content')
    <body>
        
        <p class='title'>
            チャット
        </p>
        <!--chet zone-->
             @foreach($chats as $chat)
                @if($chat->sendname===Auth::user()->id && $chat->recievename===$users->id)
                   <div style="text-align:right">
                        <div class="interact">
                          <a>{{Auth::user()->name}}</a>
                          <div class="message">
                          <p>{{ $chat->message}}</p>
                          </div>
                        　<a> {{ $chat->updated_at}}</a>  
                       </div>　
                   </div>
                   
                @elseif($chat->sendname===$users->id && $chat->recievename===Auth::User()->id)
                   <a>{{$users->name}}</a>
                    <div style="text-align:left">
                       <div class="message">
                          <p>{{ $chat->message}}:</p>
                             {{ $chat->updated_at}}
                       </div>
                    </div>　
                   @endif
              @endforeach
              
               <div style='text-align:center'>
                  {{ $chats->links() }}
               </div>
         <!--end chat zone-->
        
        
        <!-- message send -->
            <form action="/users/chat" method="POST">    
                @csrf
                    <div class="body">
                        <textarea name="chat[message]" placeholder="メッセージ"></textarea>
                    </div>
                    <div class='submit'>
                       <input type="submit" value="送信"/>
                    </div>
            </form>
        <!--end send message-->
        
        
            <div class='back'>
                [<a href="/">検索一覧に戻る</a>]
            </div>
            
        <!-- select users to send message -->
            <!--choose account of myself-->
                <div style="content__my user">
                    <div class="myuser">
                        <p>自分のアカウントを選択してください</p> 
                        <select id="user" class="form-control @error('user') is-invalid @enderror" name="chat[sendname]" required autocomplete="current-user">
                                <option value="{{ Auth::user()->id }}">{{Auth::user()->name}}</option>
                        </select>
                    </div>
                </div>
            <!--end choose account of myself end-->

            
            <!--choose account of friend-->
                <div style="content__my user">
                    <div class="myuser">
                      <p>送信先のアカウントを選択してください</p> 
                    <select id="user" class="form-control @error('user') is-invalid @enderror" name="chat[recievename]" required autocomplete="current-user">
                         <option value="{{ $users->id }}">{{$users->name}}</option>
                    </select>
                　　</div>
                </div>
            <!--end choose account of friend end -->
        <!-- end select users to send message end -->

@endsection