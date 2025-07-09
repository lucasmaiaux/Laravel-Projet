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
Route::get('/explorer/{product}', [ProductController::class, 'showProduct'])->where(['product' => '[0-9]+']);
// Route::get('/{product}', [ProductController::class, 'showProduct'])->where(['product' => '[0-9]+']);
// Route::get('/{id}', [ProductController::class, 'showProduct']);
Route::get('/customize', [ProductController::class, 'customizeProduct']);

// Produits (sort)
Route::get('/explorer/sortname', [ProductController::class, 'exploreProductsByName']);
Route::get('/explorer/sortprice', [ProductController::class, 'exploreProductsByPrice']);


// Panier
Route::get('/cart', [CartController::class, 'show']);

// Utilisateur
Route::get('/profile', [UserController::class, 'showProfile']);
