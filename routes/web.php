<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\PostDislikeController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherLikeController;
use App\Http\Controllers\TeacherDislikeController;


/* Home Page */
Route::get('/', [TeacherController::class, 'home'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');



/******* Users Route *******/
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

/******* Posts *******/

Route::get('/users/{user:username}/posts', [UserPostController::class, 'index'])->name('users.posts');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::put('/posts/{post}', [PostController::class, 'edit'])->name('posts.edit');

/* Posts Like & Unlike */
Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');

/* Posts Dislike & Undislike */
Route::post('/posts/{post}/dislikes', [PostDislikeController::class, 'store'])->name('posts.dislikes');
Route::delete('/posts/{post}/dislikes', [PostDislikeController::class, 'destroy'])->name('posts.dislikes');

/******* Teachers Route *******/
Route::get('teachers', [TeacherController::class, 'index'])->name('teachers');
Route::get('teachers/leaderboard', [TeacherController::class, 'leaderboard'])->name('teachers.leaderboard');

/* Posts Like & Unlike */
Route::post('/teachers/{teacher}/likes', [TeacherLikeController::class, 'store'])->name('teachers.likes');
Route::delete('/teachers/{teacher}/likes', [TeacherLikeController::class, 'destroy'])->name('teachers.likes');

/* Posts Dislike & Undislike */
Route::post('/teachers/{teacher}/dislikes', [TeacherDislikeController::class, 'store'])->name('teachers.dislikes');
Route::delete('/teachers/{teacher}/dislikes', [TeacherDislikeController::class, 'destroy'])->name('teachers.dislikes');