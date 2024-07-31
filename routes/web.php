<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\GooleAuthController;
use App\Http\Controllers\DiscussionController;

Route::get('/', HomeController::class)->name('index');

Route::get('/threads', [ThreadController::class, 'index'])->name('threads.index');
Route::get('/threads/{thread:slug}', [ThreadController::class, 'show'])->name('threads.show');

Route::get('/discussions', [DiscussionController::class, 'index'])->name('discussions.index');
Route::get('/thread/{thread:slug}/{discussion:slug}', [DiscussionController::class, 'show'])->name('discussions.show');

Route::get('auth/google', [GooleAuthController::class, 'redirect'])->name('googleRedirect');
Route::get('auth/google/callback', [GooleAuthController::class, 'handleGoogleCallback']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
