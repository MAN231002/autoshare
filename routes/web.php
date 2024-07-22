<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');

Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::get('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');

Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('create', [PostController::class, 'create'])->middleware('auth');

Route::post('create', [PostController::class, 'store'])->middleware('auth');

Route::get('manage/{author:username}', [PostController::class, 'manage'])->middleware('auth');

Route::get('posts/{post}/edit', [PostController::class, 'edit'])->middleware('auth');

Route::patch('posts/{post}', [PostController::class, 'update'])->middleware('auth');

Route::delete('posts/{post}', [PostController::class, 'destroy'])->middleware('auth');

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts',[ 'posts' => $category -> posts ]);
});

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts
    ]);
});