<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
    return view ('hello world');
});

Route::get('/user/{id}', function ($id){
    return "user ID" .$id;
});

Route::get('/user/{name?}', function ($name = 'Guest'){
    return "haii," .$name;
});

Route::get('/redirec-to-profile', function () {
    return redirect()->route('profile');
});

Route::prefix('admin')->group(function() {
    route::get('/dasboard', function() {
        return 'Admin Dasboard';
});

Route::get('/profile', function(){
    return 'Admin Profile';
    });
});

Route::get('/dasboard', function(){
    return 'Welcome To Your Dasboard';
})->middleware('auth');

route::resource('post', 'PostController');
