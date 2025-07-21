<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// Utilisation générale
Route::get('/', [HomeController::class, 'show']);
Route::get('/contact', [HomeController::class, 'showContact']);

// Authentification
Route::middleware('guest')->controller(AuthController::class)->group(function()
{
    Route::get('/register', 'showRegister');
    Route::get('/login', 'showLogin')->name('login');
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});

Route::post('/logout', [AuthController::class, 'logout']);

// Produits
Route::get('/index', [ProductController::class, 'index']);
Route::get('/index/sortname', [ProductController::class, 'indexByName']);
Route::get('/index/sortprice', [ProductController::class, 'indexByPrice']);
Route::get('/{product_id}', [ProductController::class, 'show'])->where(['product_id' => '[0-9]+']);

// BackOffice
Route::middleware('auth')->controller(ProductController::class)->group(function()
{
    Route::get('/backoffice/index', 'indexAdmin');
    Route::get('/backoffice/{product}', 'showAdmin')->where(['product' => '[0-9]+']);
    Route::get('/backoffice/{product}/edit','edit')->where(['product' => '[0-9]+']);
    Route::post('/backoffice/save', 'store')->where(['product' => '[0-9]+']);
    Route::delete('/backoffice/{product}/delete', 'delete')->where(['product' => '[0-9]+']);
    Route::get('/backoffice/create', 'create');
    Route::post('/backoffice/create', 'store');
});


Route::post('/{product_id}/add-to-cart', [CartController::class, 'add'])->where(['product' => '[0-9]+']);
Route::delete('/cart', [CartController::class, 'detachProduct']);


Route::get('/customize', [ProductController::class, 'customize']);

// Panier
Route::get('/cart', [CartController::class, 'show']);

// Utilisateur
Route::get('/profile', [UserController::class, 'showProfile']);
