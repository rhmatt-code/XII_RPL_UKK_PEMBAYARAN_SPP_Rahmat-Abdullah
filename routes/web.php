<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Routing\RouteGroup;

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
    return view('home');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('home', 'show')->name('home');
    Route::get('ceknisn', 'nisn')->name('ceknisn');
});
Route::controller(LoginController::class)->group(function () {
    Route::post('store', 'store')->name('login');
    Route::get('logout', 'logout')->name('logout');
});

Route::group(['middleware' => ['cekstatus']], function () {
    Route::controller(StudentController::class)->group(function () {
        Route::get('siswa', 'show')->name('siswa');
        Route::post('siswa/add', 'add')->name('addsiswa');
        Route::get('siswa/edit/{id}', 'edit')->name('editsiswa');
        Route::post('siswa/update/{id}', 'update')->name('updatesiswa');
        Route::get('siswa/delete/{id}', 'delete')->name('deletesiswa');
    });

    Route::controller(OfficerController::class)->group(function () {
        Route::get('petugas', 'show')->name('petugas');
        Route::post('petugas/add', 'add')->name('addpetugas');
        Route::get('petugas/edit/{id}', 'edit')->name('editpetugas');
        Route::post('petugas/update/{id}', 'update')->name('updatepetugas');
        Route::get('petugas/delete/{id}', 'delete')->name('deletepetugas');
    });

    Route::controller(ClassController::class)->group(function () {
        Route::get('class', 'show')->name('kelas');
        Route::post('class/add', 'addclass')->name('addclass');
        Route::get('edit/{id_kelas}', 'editclass')->name('editclass');
        Route::post('update/{id_kelas}', 'updateclass')->name('updateclass');
        Route::get('delete/{id_kelas}', 'delete')->name('deleteclass');
    });

    Route::controller(SppController::class)->group(function () {
        Route::get('spp', 'show')->name('spp');
        Route::post('spp/add', 'add')->name('addspp');
        Route::get('spp/edit/{id}', 'edit')->name('editspp');
        Route::post('spp/update/{id}', 'update')->name('updatespp');
        Route::get('spp/delete/{id}', 'delete')->name('deletespp');
    });
    Route::controller(TransaksiController::class)->group(function () {
        Route::get('transaksi', 'show')->name('transaksi');
        Route::get('search', 'search')->name('search');
        Route::post('transaksi/store', 'store')->name('storetransaksi');
        Route::get('laporan', 'laporan')->name('laporan');
    });
});

Route::group(['middleware' => ['petugas']], function () {
    Route::controller(TransaksiController::class)->group(function () {
        Route::get('transaksi', 'show')->name('transaksi');
        Route::get('search', 'search')->name('search');
        Route::post('transaksi/store', 'store')->name('storetransaksi');
        Route::get('summary/{id}','cetak_pdf')->name('pdf');
        Route::get('laporan', 'laporan')->name('laporan');
    });
});

