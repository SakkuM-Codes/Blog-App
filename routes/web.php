<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


Route::post('register', [RegisterController::class, 'store']);
Route::get('register',[RegisterController::class, 'create']);
Route::get('login', [LoginController::class, 'login']);

