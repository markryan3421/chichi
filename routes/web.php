<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);

Route::get('/homepage', function () {
    return view('homepage');
});
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

// Profile Related Routes
Route::get('/profile/{user:username}', [UserController::class, 'showProfile']);

Route::get('/create-post', function () {
    return view('create-post');
});

Route::get('/post', function () {
    return view('post');
});


