<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
 
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/posts', [PostController::class,'get']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/posts', [PostController::class,'store']);
    Route::delete('/posts', [PostController::class,'destroy']);
});
