<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;


Route::view('login','login');
Route::view('register','register');
Route::post('register', [RegisterController::class, 'store']);
Route::get('register',[RegisterController::class, 'create']);
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('home', [BlogController::class, 'home'])->name('home');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');

