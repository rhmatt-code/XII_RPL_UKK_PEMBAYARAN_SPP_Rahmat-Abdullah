<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SppController;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('home', 'show');
});

Route::controller(StudentController::class)->group(function () {
    Route::get('siswa', 'show');
    Route::post('siswa/add', 'add')->name('addsiswa');
    Route::get('siswa/edit/{id}', 'edit')->name('editsiswa');
    Route::post('siswa/update/{id}', 'update')->name('updatesiswa');
    Route::get('siswa/delete/{id}', 'delete')->name('deletesiswa');
});

Route::controller(OfficerController::class)->group(function () {
    Route::get('officer', 'show');
});

Route::controller(ClassController::class)->group(function () {
    Route::get('class', 'show');
    Route::post('class/add', 'addclass')->name('addclass');
    Route::get('edit/{id_kelas}', 'editclass')->name('editclass');
    Route::post('update/{id_kelas}', 'updateclass')->name('updateclass');
    Route::get('delete/{id_kelas}', 'delete')->name('deleteclass');
});

Route::controller(SppController::class)->group(function () {
    Route::get('spp', 'show');
    Route::post('spp/add', 'add')->name('addspp');
    Route::get('edit/{id}', 'edit')->name('editspp');
    Route::post('update/{id}', 'update')->name('updatespp');
    Route::get('delete/{id}', 'delete')->name('deletespp');
});
