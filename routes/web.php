<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FavoritController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePenjualController;
use App\Http\Controllers\KatalogProdukController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [ProductController::class, 'halaman_awal'])->name('halaman_awal');

Route::get('/katalog_produk', [KatalogProdukController::class, 'index'])->name('katalog_produk');
Route::post('/filter_produk', [KatalogProdukController::class, 'filter_produk'])->name('filter_produk');
Route::post('/search_produk', [KatalogProdukController::class, 'store'])->name('search_produk');
Route::get('/detail_produk/{id}', [KatalogProdukController::class, 'show'])->name('detail_produk');

Route::get('/about_us', function () {
    $title = "About Us";
    return view('pages-user.aboutUS', compact('title'));
})->name('about_us');

Route::get('/contact_us', function () {
    $title = "Contact Us";
    return view('pages-user.contactUs', compact('title'));
})->name('contact_us');

Auth::routes();
Route::get('/edit_profile/{id}', [ProfileController::class, 'edit']);
Route::put('/edit_profile/{id}/update', [ProfileController::class, 'update'])->name('profile-update');
// menu yang dapat di akses hanya user dengan role admin
Route::group(['middleware' => ['auth', 'role:Admin']], function () {
    Route::get('/home_admin', [HomeAdminController::class, 'index'])->name('home_admin');
    

    Route::prefix('penjual')->group(function () {
        Route::get('/', [PenjualController::class, 'index'])->name('penjual');
        Route::get('/create', [PenjualController::class, 'create'])->name('penjual-create');
        Route::get('/{id}', [PenjualController::class, 'show'])->name('penjual-detail');
        Route::get('/{id}/edit', [PenjualController::class, 'edit'])->name('penjual-edit');
        Route::post('/store', [PenjualController::class, 'store'])->name('penjual-store');
        Route::put('/{id}/update', [PenjualController::class, 'update'])->name('penjual-update');
        Route::delete('/{id}/destroy', [PenjualController::class, 'destroy'])->name('penjual-hapus');
    });
});

// menu yang dapat di akses hanya user dengan role penjual
Route::group(['middleware' => ['auth', 'role:Penjual']], function () {
    Route::get('/home_penjual', [HomePenjualController::class, 'index'])->name('home_penjual');

    Route::prefix('produk')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('produk');
        Route::get('/create', [ProductController::class, 'create'])->name('produk-create');
        Route::get('/{id}', [ProductController::class, 'show'])->name('produk-detail');
        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('produk-edit');
        Route::post('/store', [ProductController::class, 'store'])->name('produk-store');
        Route::put('/{id}/update', [ProductController::class, 'update'])->name('produk-update');
        Route::delete('/{id}/destroy', [ProductController::class, 'destroy'])->name('produk-hapus');
        Route::get('/hapus_gallery/{id}', [ProductController::class, 'hapus_gallery'])->name('hapus_gallery');
    });


    Route::prefix('transaksi')->group(function () {
        Route::get('/', [TransaksiController::class, 'index'])->name('transaksi');
        Route::get('/create', [TransaksiController::class, 'create'])->name('transaksi-create');
        Route::get('/{id}', [TransaksiController::class, 'show'])->name('transaksi-detail');
        Route::get('/{id}/edit', [TransaksiController::class, 'edit'])->name('transaksi-edit');
        Route::post('/store', [TransaksiController::class, 'store'])->name('transaksi-store');
        Route::put('/{id}/update', [TransaksiController::class, 'update'])->name('transaksi-update');
        Route::delete('/{id}/destroy', [TransaksiController::class, 'destroy'])->name('transaksi-hapus');
    });
});


// menu yang dapat di akses hanya user dengan role User
Route::group(['middleware' => ['auth', 'role:Siswa']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::prefix('favorit')->group(function () {
        Route::get('/', [FavoritController::class, 'index'])->name('favorit');
        Route::get('/{id}', [FavoritController::class, 'show'])->name('favorit-create');
        Route::delete('/{id}/destroy', [FavoritController::class, 'destroy'])->name('favorit-hapus');
    });

    Route::prefix('pesanan')->group(function () {
        Route::get('/', [PesananController::class, 'index'])->name('pesanan');
        Route::get('/{id}', [PesananController::class, 'show'])->name('pesanan-create');
        Route::post('/store', [PesananController::class, 'store'])->name('pesanan-store');
        Route::delete('/{id}/destroy', [PesananController::class, 'destroy'])->name('pesanan-hapus');
        Route::post('/update-quantity',  [PesananController::class, 'edit'])->name('update-quantity');
    });

    Route::prefix('checkout')->group(function () {
        Route::get('/', [CheckoutController::class, 'index'])->name('checkout');
        Route::post('/{id}', [CheckoutController::class, 'show'])->name('checkout-create');
        Route::post('/store', [CheckoutController::class, 'store'])->name('checkout-store');
        Route::delete('/{id}/destroy', [CheckoutController::class, 'destroy'])->name('checkout-hapus');
    });

    Route::prefix('history')->group(function () {
        Route::get('/', [HistoryController::class, 'index'])->name('history');
        Route::post('/{id}', [HistoryController::class, 'show'])->name('history-create');
        Route::put('/{id}/update', [HistoryController::class, 'update'])->name('history-update');
    });
});
