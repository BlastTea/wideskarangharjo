<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages/guest/welcome');

Route::view('dashboard', 'pages/dashboard/dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'pages/profile/profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
