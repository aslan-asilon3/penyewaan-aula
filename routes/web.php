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

Route::get('/reservasi', function () {
    return view('reservasi');
});

Route::get('/informasi', function () {
    return view('informasi');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'loginPage'])->name('login');


Route::group(['prefix' => 'admin', 'middleware' => 'is_admin'], function() {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/kelolaakun', [App\Http\Controllers\AdminController::class, 'adminKelolaAkun'])->name('admin.kelolaakun');
    Route::get('/kelolaakunExport', [App\Http\Controllers\AdminController::class, 'adminKelolaAkunExport'])->name('admin.kelolaakunexport');
    Route::get('/kelolaakunPDF', [App\Http\Controllers\AdminController::class, 'adminKelolaAkunPDF'])->name('admin.kelolaakunpdf');
    Route::get('/kelolaruangaula', [App\Http\Controllers\AdminController::class, 'adminKelolaRuangAula'])->name('admin.kelolaRuangAula');
    Route::get('/transaksi', [App\Http\Controllers\AdminController::class, 'adminTransaksi'])->name('admin.transaksi');
    Route::get('/laporan', [App\Http\Controllers\AdminController::class, 'adminLaporan'])->name('admin.laporan')->middleware('is_admin');
});
Route::post('admin/kelolaakunStore', [App\Http\Controllers\Admin\adminKelolaAkun::class, 'Store'])->name('adminKelolaAkunStore')->middleware('is_admin');
Route::get('admin/kelolaakunDestroy', [App\Http\Controllers\Admin\adminKelolaAkun::class, 'Destroy'])->name('adminKelolaAkunDestroy')->middleware('is_admin');
// Route::resource('admin/kelolaakun', [App\Http\Controllers\Admin\adminKelolaAkun::class]);


// Route::resource('kelolaakun', [App\Http\Controllers\Admin\adminKelolaAkun::class])->name('kelolaakun');
// Route::prefix('kelolaakun')->group(function () {
//     // Route::get('kelolaakun', [App\Http\Controllers\AdminController::class, 'adminKelolaAkun'])->name('admin.kelolakun');
//     Route::resource('/store', App\Http\Controllers\Admin\adminKelolaAkun::class);
// });

Route::get('reservator/dashboard', [App\Http\Controllers\ReservatorController::class, 'index'])->name('reservator.dashboard');
Route::get('reservator/pendaftaran', [App\Http\Controllers\ReservatorController::class, 'reservasiPendaftaran'])->name('reservator.pendaftaran');
Route::get('reservator/pengaturan', [App\Http\Controllers\ReservatorController::class, 'reservasiPengaturan'])->name('reservator.pengaturan');
// Route::get('reservator/home', [App\Http\Controllers\HomeController::class, 'reservatorHome'])->name('reservator.home');


Route::get('kepalapuskesmas/dashboard', [App\Http\Controllers\KepalapuskesmasController::class, 'index'])->name('kepalapuskesmas.dashboard');
// Route::get('reservator/pendaftaran', [App\Http\Controllers\ReservatorController::class, 'reservasiPendaftaran'])->name('reservator.pendaftaran');
// Route::get('reservator/pengaturan', [App\Http\Controllers\ReservatorController::class, 'reservasiPengaturan'])->name('reservator.pengaturan');
