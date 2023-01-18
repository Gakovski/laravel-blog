<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/all', [HomeController::class, 'all'])->name('all');

Route::resource('posts', PostController::class)->except(['index',])->middleware('auth');

Route::match(['get','post'],'/register', [AuthController::class, 'register'])->name('register')->middleware('guest');

Route::match(['get','post'],'/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
