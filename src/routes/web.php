<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.main');
})->name('main');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
