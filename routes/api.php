<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
 
Route::post('/tokens', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);
 
    return ['token' => $token->plainTextToken];
});

Route::get('/posts', [PostController::class,'get']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/posts', [PostController::class,'store']);
    Route::delete('/posts', [PostController::class,'destroy']);
});