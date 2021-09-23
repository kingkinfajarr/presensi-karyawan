<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\UserController;
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
    return view('user.index');
});
Route::get('/login', [LoginController::class, 'index'])
    ->name('login');
Route::post('/admin', [LoginController::class, 'login'])
    ->name('post-login');
Route::get('/registrasi', [UserController::class, 'registrasi'])
    ->name('registrasi');
Route::post('/post-registrasi', [UserController::class, 'postRegistrasi'])
    ->name('post-registrasi');

// Karyawan
Route::group(['middleware' => ['auth','ceklevel:karyawan']], function() {
    Route::get('/presensi', [UserController::class, 'presensi'])
        ->name('presensi');
    Route::get('/presensi-masuk', [PresensiController::class, 'presensiMasuk'])
        ->name('presensi-masuk');
    Route::post('/post-presensi-masuk', [PresensiController::class, 'postPresensiMasuk'])
        ->name('post-presensi-masuk');
    Route::get('/presensi-keluar', [PresensiController::class, 'presensiKeluar'])
        ->name('presensi-keluar');
    Route::post('/post-presensi-keluar', [PresensiController::class, 'postPresensiKeluar'])
        ->name('post-presensi-keluar');
    Route::get('/rekap-presensi', [PresensiController::class, 'rekapPresensiKaryawan'])
        ->name('rekap-presensi');
});

// Admin
Route::group(['middleware' => ['auth','ceklevel:admin']], function() {
    Route::get('/rekap-presensi-admin', [AdminController::class, 'rekapPresensiKaryawan'])
        ->name('rekap-presensi-admin');
    Route::get('/cetak-laporan', [AdminController::class, 'cetakLaporan'])
        ->name('cetak-laporan');
});

Route::get('/logout', [LoginController::class, 'logout'])
    ->name('logout');

