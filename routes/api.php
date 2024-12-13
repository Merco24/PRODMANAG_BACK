<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//get all products
Route::get('products', [\App\Http\Controllers\ProductController::class, 'getProducts']);
//get product By_Id
Route::get('product/{id}', [\App\Http\Controllers\ProductController::class, 'getProductById']);
//add product
Route::post('addProduct', [\App\Http\Controllers\ProductController::class, 'addProduct']);
//update product
Route::put('updateProduct/{id}', [\App\Http\Controllers\ProductController::class, 'updateProduct']);
//delete product
Route::delete('deleteProduct/{id}', [\App\Http\Controllers\ProductController::class, 'deleteProduct']);
