<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;

// Utilisation générale
Route::get('/', [HomeController::class, 'show']);
Route::get('/contact', [HomeController::class, 'showContact']);

// Produits
Route::get('/explorer', [ProductController::class, 'exploreProducts']);
Route::get('/product/{id}', [ProductController::class, 'showProduct']);
Route::get('/customize', [ProductController::class, 'customizeProduct']);

// Panier
Route::get('/cart', [CartController::class, 'show']);

// Utilisateur
Route::get('/profile', [UserController::class, 'showProfile']);
