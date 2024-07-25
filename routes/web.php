<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GooleAuthController;

Route::view('/', 'welcome');

Route::get('auth/google', [GooleAuthController::class, 'redirect'])->name('googleRedirect');
Route::get('auth/google/callback', [GooleAuthController::class, 'handleGoogleCallback']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
