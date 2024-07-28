<?php

use App\Http\Controllers\AuthController;
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

Route::get('/login', [AuthController::class, 'show'])->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| User
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/users/{user}', [UserController::class, 'profile']);
});

/*
|--------------------------------------------------------------------------
| // ! TESTING ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/profile', function () {
    return 'Test profile';
})->middleware('auth.basic');
