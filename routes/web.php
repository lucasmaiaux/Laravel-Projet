<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', [HomeController::class, 'show']);

Route::get('/product', [ProductController::class, 'show']);

Route::get('/product/{id}', [ProductController::class, 'showProduct']);

Route::get('/cart', [CartController::class, 'show']);