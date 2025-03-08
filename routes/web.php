<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\PasswordResetController;


Route::view('login','login');
Route::view('register','register');
Route::post('register', [RegisterController::class, 'store']);
Route::get('register',[RegisterController::class, 'create']);
Route::post('login', [LoginController::class, 'login'])->name('login');
 Route::get('logout',[LoginController::class,'logout']);
Route::get('home', [BlogController::class, 'home'])->name('home');


Route::get('/forget-password', [PasswordResetController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forget-password', [PasswordResetController::class, 'sendResetLink'])->name('password.email');


Route::get('/reset-password/{token}', [PasswordResetController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [PasswordResetController::class, 'resetPassword'])->name('password.update');



	Route::controller(Blogcontroller::class)->group(function(){
    Route::middleware('auth')->group(function(){

    	//Blogs Routes
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
	Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
	Route::get('/blogs/list', [BlogController::class, 'list'])->name('blogs.list');
	Route::get('/blogs/detail/{slug}',[BlogController::class, 'detail'])->name('blogs.detail');
	Route::get('home', [BlogController::class, 'home'])->name('home');
	

	//Category Routes
	Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
	Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
	Route::get('home', [CategoryController::class, 'home'])->name('home');
	Route::get('/category/list', [CategoryController::class, 'list'])->name('category.list');


    });

});


		

