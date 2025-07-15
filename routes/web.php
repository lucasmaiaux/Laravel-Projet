<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

// Utilisation générale
Route::get('/', [HomeController::class, 'show']);
Route::get('/contact', [HomeController::class, 'showContact']);

// Produits
Route::get('/index', [ProductController::class, 'index']);
Route::get('/backoffice/index', [ProductController::class, 'indexAdmin']);
Route::get('/index/sortname', [ProductController::class, 'indexByName']);
Route::get('/index/sortprice', [ProductController::class, 'indexByPrice']);

Route::get('/{product}', [ProductController::class, 'show'])->where(['product' => '[0-9]+']);
Route::get('/backoffice/{product}', [ProductController::class, 'showAdmin'])->where(['product' => '[0-9]+']);
Route::get('/backoffice/{product}/edit', [ProductController::class, 'edit'])->where(['product' => '[0-9]+']);
Route::post('/backoffice/{product}/save', [ProductController::class, 'store'])->where(['product' => '[0-9]+']);
Route::delete('/backoffice/{product}/delete', [ProductController::class, 'delete'])->where(['product' => '[0-9]+']);
Route::get('/backoffice/create', [ProductController::class, 'create'])->where(['product' => '[0-9]+']);
Route::post('/backoffice/create', [ProductController::class, 'store'])->where(['product' => '[0-9]+']);

Route::post('/{product_id}/add-to-cart', [CartController::class, 'add'])->where(['product' => '[0-9]+']);
Route::delete('/cart', [CartController::class, 'detachProduct']);


Route::get('/customize', [ProductController::class, 'customize']);

// Panier
Route::get('/cart', [CartController::class, 'show']);

// Utilisateur
Route::get('/profile', [UserController::class, 'showProfile']);
