<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'loginPage'])->name('login')->middleware('is_admin');


Route::get('admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard')->middleware('is_admin');
Route::get('admin/kelolaakun', [App\Http\Controllers\AdminController::class, 'adminKelolaAkun'])->name('admin.kelolakun')->middleware('is_admin');
Route::get('admin/kelolaruangaula', [App\Http\Controllers\AdminController::class, 'adminKelolaRuangAula'])->name('admin.kelolaRuangAula')->middleware('is_admin');
Route::get('admin/transaksi', [App\Http\Controllers\AdminController::class, 'adminTransaksi'])->name('admin.transaksi')->middleware('is_admin');
Route::get('admin/laporan', [App\Http\Controllers\AdminController::class, 'adminLaporan'])->name('admin.laporan')->middleware('is_admin');

Route::get('reservator/dashboard', [App\Http\Controllers\ReservatorController::class, 'index'])->name('reservator.dashboard');
Route::get('reservator/pendaftaran', [App\Http\Controllers\ReservatorController::class, 'reservasiPendaftaran'])->name('reservator.pendaftaran');
Route::get('reservator/pengaturan', [App\Http\Controllers\ReservatorController::class, 'reservasiPengaturan'])->name('reservator.pengaturan');
// Route::get('reservator/home', [App\Http\Controllers\HomeController::class, 'reservatorHome'])->name('reservator.home')->middleware('is_admin');


Route::get('kepalapuskesmas/dashboard', [App\Http\Controllers\KepalapuskesmasController::class, 'index'])->name('kepalapuskesmas.dashboard');
// Route::get('reservator/pendaftaran', [App\Http\Controllers\ReservatorController::class, 'reservasiPendaftaran'])->name('reservator.pendaftaran');
// Route::get('reservator/pengaturan', [App\Http\Controllers\ReservatorController::class, 'reservasiPengaturan'])->name('reservator.pengaturan');
