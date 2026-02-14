<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest.filter')->group(function () {
    Route::get('/', [AuthController::class, 'login']);
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/attemptLogin', [AuthController::class, 'attemptLogin']);
});

Route::middleware('auth.filter')->group(function(){

    Route::post('/logout',[AuthController::class, 'logout']);

    Route::get('/', [HomeController::class, 'index']);
    Route::get('/dashboard',[HomeController::class,'index']);

    Route::prefix('chat')->controller(ChatController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/getChatWindow', 'getChatWindow');
        Route::get('/getMessages/{user}', 'getMessages');
        Route::post('/sendMessage', 'sendMessage');
    });
    
});