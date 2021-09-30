<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [PostController::class, 'create'])->name('post.create');
Route::post('/post', [PostController::class, 'store']);
Route::get('/dashboard', [PostController::class, 'index'])->middleware(['auth'])->name('dashboard'); 
Route::get('/show/{post}', [PostController::class, 'show'])->name('show');
Route::post('/show/{post}', [PostController::class, 'PostComment'])->name('postComment');

require __DIR__.'/auth.php';
