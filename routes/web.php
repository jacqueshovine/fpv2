<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/login', 'App\Http\Controllers\AuthController@login')->name('login.page');
Route::post('/login', 'App\Http\Controllers\AuthController@submit')->name('login.submit');

/*
|--------------------------------------------------------------------------
| User
|--------------------------------------------------------------------------
*/

Route::get('/users/{user}', [UserController::class, 'profile']);

/*
|--------------------------------------------------------------------------
| // ! TESTING ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/profile', function () {
    return 'Test profile';
})->middleware('auth.basic');
