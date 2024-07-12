<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/show', [PostController::class, 'show'])->name('posts.show');

Route::resource('/photos', PhotoController::class);