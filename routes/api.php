<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ApiLoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
 
// Anonymous routes
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [ApiLoginController::class, 'login']);
Route::get('/posts', [PostController::class,'get']);

// User authenticated routes (Bearer token)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/posts', [PostController::class,'store']);
    Route::delete('/posts', [PostController::class,'destroy']);
});

// Admin authenticated routes
Route::middleware(['auth:sanctum', 'can:isAdmin'])->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::delete('/users/{user}', [UserController::class, 'destroy']);
});
