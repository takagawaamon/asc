<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'UserController@index');
    Route::get('/ascusers', 'UserController@index');
    Route::get('/ascusers/{user}', 'UserController@show');
    Route::post('/users/chat', 'UserController@store');
    Route::put('/users/{user}', 'UserController@update');
    Route::get('/users/{user}/edit', 'UserController@edit');
    Route::get('/users/{user}/chat', 'UserController@chat');
    Route::get('/positions/{position}', 'PositionController@index');
});

//things you should serch later
// url paremeter priority
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

