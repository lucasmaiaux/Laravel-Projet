<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Resources\UserResource;
use App\Http\Controllers\Api\ProductController;

Route::get('/products',[ProductController::class, 'index']);

// Route::get('/products', function() {
//     return Product::find(1)->toResource();
// });

Route::get('/products/show',[ProductController::class, 'show']);
Route::post('/products/create',[ProductController::class, 'store']);
Route::put('/products/edit',[ProductController::class, 'edit']);
Route::delete('/products/delete',[ProductController::class, 'delete']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

