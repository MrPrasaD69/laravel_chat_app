<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('/dashboard',[HomeController::class,'index']);

Route::prefix('chat')->controller(ChatController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/getChatWindow', 'getChatWindow');
    Route::get('/getMessages/{user}', 'getMessages');
    Route::post('/sendMessage', 'sendMessage');
});