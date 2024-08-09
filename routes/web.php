<?php

use App\Http\Controllers\UserPostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('user_posts', UserPostsController::class);
// Route::get('user_posts/{id}/edit', [UserPostsController::class, 'update']);
// Route::PUT('user_posts/{id}/edit', [UserPostsController::class, 'update']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
