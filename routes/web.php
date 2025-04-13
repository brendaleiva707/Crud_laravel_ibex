<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Redirige '/' al HomeController, protegido por autenticación
Route::get('/', [HomeController::class, 'index'])->name('home');

// Autenticación (login, register, logout, etc.)
Auth::routes();

// CRUD de productos, requiere autenticación
Route::resource('products', ProductController::class)->middleware('auth');
