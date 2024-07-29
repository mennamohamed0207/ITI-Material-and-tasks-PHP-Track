<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::get('/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');  

Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');    
Route::post('/posts/update', [PostController::class, 'update'])->name('posts.update');

Route::delete('/posts/delete/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
