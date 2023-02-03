<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\ClassController;

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
    Route::get('student', 'show');
});

Route::controller(OfficerController::class)->group(function () {
    Route::get('officer', 'show');
});

Route::controller(ClassController::class)->group(function () {
    Route::get('class', 'show');
    Route::post('class/add', 'addclass')->name('addclass');
    Route::get('edit/{id}', 'editclass')->name('editclass');
});
