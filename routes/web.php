<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\GooleAuthController;
use App\Http\Controllers\UserController;

Route::get('/', HomeController::class)->name('index');

Route::get('/channels', [ChannelController::class, 'index'])->name('channels.index');
Route::get('/channels/{channel:slug}', [ChannelController::class, 'show'])->name('channels.show');

Route::get('/threads', [ThreadController::class, 'index'])->name('threads.index');
Route::get('/threads/create', [ThreadController::class, 'create'])->middleware('auth')->name('threads.create');
Route::get('/channels/{channel:slug}/{thread:slug}', [ThreadController::class, 'show'])->name('threads.show');

Route::get('user/{user:username}', [UserController::class, 'threads'])->name('users.threads');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('verified')->name('dashboard');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
});

Route::get('auth/google', [GooleAuthController::class, 'redirect'])->name('googleRedirect');
Route::get('auth/google/callback', [GooleAuthController::class, 'handleGoogleCallback']);


require __DIR__ . '/auth.php';
