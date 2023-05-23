<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController; //panggil controller yang ada dibuat sebelumnya
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Models\DetailTransaksi;

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
Route::get('/salam', function () {
    return "Selamat pagi";
}); // ini adalah routing untuk pemanggilan dirinya sendiri
Route::get('/ucapan', function () {
    return view('ucapan'); //ini adalah routing yang mengarahkan ke view yang ada di folder 
    //resources/views
});
Route::get('/nilai', function () {
    return view('nilai');
}); //arahkan return nilai ke file nilai yang ada di view 
Route::get('/daftar_nilai', function () {
    return view('daftar_nilai');
});
//mengarahkan routing ke controller
Route::get('/siswa', [SiswaController::class, 'dataSiswa']);
//mengarahkan ke controller dashboardController
Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');

// bisa make ini 
Route::resource('transaksi', TransaksiController::class);
Route::resource('detail_transaksi', DetailTransaksi::class);
Route::resource('user', UserController::class);

// atau ini bebas dah
Route::get('/pegawai', [PegawaiController::class, 'index']);
