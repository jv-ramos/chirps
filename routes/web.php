<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\Auth\Register;

Route::get('/', [ChirpController::class, 'index']);
// Route::get('/chirps/{chirp}', [ChirpController::class, 'show']);
// Route::post('/chirps', [ChirpController::class, 'store']);
// Route::get('/chirps/{chirp}/edit', [ChirpController::class, 'edit']);
// Route::put('/chirps/{chirp}', [ChirpController::class, 'update']);
// Route::delete('/chirps/{chirp}', [ChirpController::class, 'destroy']);
Route::resource('auth', Register::class)->only(['__invoke']);
Route::resource('chirps', ChirpController::class)->only(['store', 'edit', 'update', 'destroy']);
