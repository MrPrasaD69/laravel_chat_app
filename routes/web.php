<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('/dashboard',[HomeController::class,'index']);
Route::get('/chat',[ChatController::class,'index']);