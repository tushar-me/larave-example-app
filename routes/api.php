<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/product', [ProductController::class, 'getAllProducts']);

//single product
Route::get('/product/{slug}', [ProductController::class, 'getProduct']);

//create product
Route::post('/create-product', [ProductController::class, 'createProduct']);
