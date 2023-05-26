<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Product_GalleriesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function(){

//Route Penjual
Route::get('/penjual', [PenjualController::class, 'index']);
Route::get('/penjual/create', [PenjualController::class, 'create']);
Route::post('/penjual/store', [PenjualController::class, 'store']);
Route::get('/penjual/edit/{id}', [PenjualController::class, 'edit']);
Route::post('/penjual/update', [PenjualController::class, 'update']);
Route::get('/penjual/show/{id}', [PenjualController::class, 'show']);

//Route Product
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product/store', [ProductController::class, 'store']);
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/product/update', [ProductController::class, 'update']);

//Route Product Galleries
Route::get('/product_galleries', [Product_GalleriesController::class, 'index']);
Route::get('/product_galleries/create', [Product_GalleriesController::class, 'create']);
Route::post('/product_galleries/store', [Product_GalleriesController::class, 'store']);
Route::get('/product_galleries/edit/{id}', [Product_GalleriesController::class, 'edit']);
Route::post('/product_galleries/update', [Product_GalleriesController::class, 'update']);


});