@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
        <head>
            <link href="{{ asset('css/edit.css') }}" rel="stylesheet">
        </head>
<div class="w-100">
    <div class="content w-75 mx-auto bg-white shadow-lg p-3 m-5 rounded justify-center">
         <h1 class="title">編集画面</h1>
        <form action="/users/{{ $user->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__body'>
                <div class="col-md-6 d-flex align-items-center my-4">
                  <p class="w-50 m-0">自己紹介文：</p> 
                <input type='text' name='user[body]' value="{{ $user->body }}">
                </div>
            </div>
            <div class='content__age'>
                <div class="col-md-6 d-flex align-items-center my-4">
                  <p class="w-50 m-0">年齢：</p> 
                <input type='text' name='user[age]' value="{{ $user->age }}">
                </div>
            </div>
            <div style="content__position">
                <div class="col-md-6 d-flex align-items-center my-4">
                  <p class="w-50 m-0">希望ポジション：</p> 
                <select id="position" class="form-control @error('position') is-invalid @enderror" name="user[position_id]" required autocomplete="current-position">
                    @foreach($positions as $position)
                        <option value="{{ $position->id }}">{{$position->name }}</option>
                    @endforeach
                </select>
                </div>
            </div>
            
            <div style="content__ken">
                <div class="col-md-6 d-flex align-items-center my-4">
                  <p class="w-50 m-0">今住んでいる場所：</p> 
                <select id="ken" class="form-control @error('ken') is-invalid @enderror" name="user[ken_id]" required autocomplete="current-ken">
                    @foreach($kens as $ken)
                        <option value="{{ $ken->id }}">{{$ken ->name}}</option>
                    @endforeach
                </select>
            　　</div>
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</div>
@endsection