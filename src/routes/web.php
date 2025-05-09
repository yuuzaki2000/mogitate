<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'show']);
Route::get('/products/register', [ProductController::class, 'add']);
Route::post('/products/register', [ProductController::class, 'store']);
Route::post('/products/search', [ProductController::class, 'search']);

Route::post('/products/{productId}', [ProductController::class, 'detail']);
Route::post('/products/{productId}/update', [ProductController::class, 'update']);
Route::post('/products/{productId}/delete', [ProductController::class, 'destroy']);
