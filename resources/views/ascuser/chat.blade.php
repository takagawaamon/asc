@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('head')
    <link rel="stylesheet" href="{{ secure_asset('/css/chat.css') }}">
@endsection

@section('content')
    <body>
        
        	
<div class="bg_pattern Lines"></div><!--背景デザイン-->
        
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
                            <div class=icon>    
                                <img src=" {{ Auth::user()->icon_path }}" height="50px">
                                
                            </div>
                          <p>{{ $chat->message}}</p>
                          </div>
                        　<a> {{ $chat->updated_at}}</a>  
                       </div>　
                   </div>
                   
                @elseif($chat->sendname===$users->id && $chat->recievename===Auth::User()->id)
                   <a>{{$users->name}}</a>
                    <div style="text-align:left">
                       <div class="message">
                           <div class=icon>    
                                <img src=" {{ $users->icon_path }}" height="50px">
                            </div>
                          <p>{{ $chat->message}}:</p>
                        </div>  
                             {{ $chat->updated_at}}
                       
                    </div>　
                   @endif
              @endforeach
              
               <div style='text-align:center'>
                  {{ $chats->links('vendor.pagination.bootstrap-4') }}
               </div>
         <!--end chat zone-->
        
        
        <!-- message send -->
            <form action="/users/chat" method="POST">    
                @csrf
                    <div class="body">
                        <textarea name="chat[message]" placeholder="メッセージ"></textarea>
                       <div class=select>
                        <select id="user" class="form-control @error('user') is-invalid @enderror" name="chat[sendname]" required autocomplete="current-user">
                                <option value="{{ Auth::user()->id }}">{{Auth::user()->name}}</option>
                        </select>        
                        <select id="user" class="form-control @error('user') is-invalid @enderror" name="chat[recievename]" required autocomplete="current-user">
                                <option value="{{ $users->id }}">{{$users->name}}</option>  
                        </select> 
                        </div>
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