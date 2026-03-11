<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;

// Route::get('/chirps/{chirp}', [ChirpController::class, 'show']);
// Route::resource('chirps', ChirpController::class)->only(['store', 'edit', 'update', 'destroy']);

/**
 *  Index Route
 */

Route::get('/', [ChirpController::class, 'index']);

/**
 * Protected Routes
 */

Route::middleware('auth')->group(function () {
    Route::get('/chirps/{chirp}/edit', [ChirpController::class, 'edit']);
    Route::post('/chirps', [ChirpController::class, 'store']);
    Route::put('/chirps/{chirp}', [ChirpController::class, 'update']);
    Route::delete('/chirps/{chirp}', [ChirpController::class, 'destroy']);
});

/**
 *  Authentication Routes
 */

// Register
Route::view('/register', 'auth.register')->middleware('guest')->name('register');
Route::post('/register', Register::class)->middleware('guest');

// Login
Route::view('/login', 'auth.login')->middleware('guest')->name('login');
Route::post('/login', Login::class)->middleware('guest');

// Logout
Route::post('/logout', Logout::class)->middleware('auth')->name('logout');
