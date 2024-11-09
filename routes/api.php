<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// Route::get('products', [App\Http\Controllers\Api\ProductController::class, 'index']);
// Route::get('products/{id}', [App\Http\Controllers\Api\ProductController::class, 'show']);
// Route::post('products', [App\Http\Controllers\Api\ProductController::class, 'store']);
// Route::put('products/{id}', [App\Http\Controllers\Api\ProductController::class, 'update']);
// Route::delete('products/{id}', [App\Http\Controllers\Api\ProductController::class, 'destroy']);
Route::apiResource('/products', App\Http\Controllers\Api\ProductController::class);

