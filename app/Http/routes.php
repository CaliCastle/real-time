<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Auth::login(\App\User::first());
//
Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('send/{message?}', function ($message) {
    event(new \App\Events\NewMessage($message ?: 'Hello you son of a bitch!'));
});

Route::get('check', function () {
    $pusher = new Pusher( config('broadcasting.connections.pusher.key'), config('broadcasting.connections.pusher.secret'), config('broadcasting.connections.pusher.app_id') , ['encrypted' => true]);

    dd($pusher->get( '/channels/presence-user-1' ));
});

Route::post('auth.pusher', function (\Illuminate\Http\Request $request) {
    $pusher = new Pusher( config('broadcasting.connections.pusher.key'), config('broadcasting.connections.pusher.secret'), config('broadcasting.connections.pusher.app_id') , ['encrypted' => true]);

    echo $pusher->presence_auth($request->input('channel_name'), $request->input('socket_id'), $request->user()->id);
});