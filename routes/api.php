<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Resources\UserResource;
use App\Http\Controllers\Api\ProductController;

Route::get('/products',[ProductController::class, 'index']);

Route::get('/products/show',[ProductController::class, 'show']);
Route::post('/products/create',[ProductController::class, 'store'])->middleware('auth:sanctum');
Route::put('/products/edit',[ProductController::class, 'edit'])->middleware('auth:sanctum');
Route::delete('/products/delete',[ProductController::class, 'delete'])->middleware('auth:sanctum');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('auth')
    ->as('auth.')
    ->group(function() {
        Route::post('/login', [AuthController::class, 'login']);
    });  

Route::post('/register', [AuthController::class, 'APIregister']);
Route::post('/login', [AuthController::class, 'APIlogin']);
Route::post('/logout', [AuthController::class, 'APIlogout'])->middleware('auth:sanctum');