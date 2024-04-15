<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('login');
});

Route::get('/developer', function () {
    return view('developer');
})->name('dev');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginpost'])->name('login.post');

Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/signup', [AuthController::class, 'signuppost'])->name('signup.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');