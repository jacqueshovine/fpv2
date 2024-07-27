<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', 'App\Http\Controllers\AuthController@page')->name('login.page');
Route::post('/login', 'App\Http\Controllers\AuthController@submit')->name('login.submit');
