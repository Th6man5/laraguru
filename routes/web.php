<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\Profilecontroller;
use App\Http\Controllers\Usercontroller;

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


Route::get('user/{id}/edit',[UserController::class,'edit']);
Route::post('user/{id}/edit',[UserController::class,'update']);
Route::get('user/{id}/delete',[UserController::class,'delete']);
Route::post('user/reset/{id}',[UserController::class,'reset']);
Route::get('user',[UserController::class,'index']);




//routes/web.php
Route::resource('guru', GuruController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('kelas', KelasController::class);
Route::resource('ruangan', RuanganController::class);
Route::resource('jadwal', jadwalController::class);






Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
