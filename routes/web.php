<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DetailTransaksiController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;

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

// bisa make ini 
Route::resource('transaksi', TransaksiController::class);
Route::resource('detail_transaksi', DetailTransaksiController::class);
Route::resource('user', UserController::class);

Route::get('/penjual', [PenjualController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product_galleries', [Product_GalleriesController::class, 'index']);

