<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BeasiswasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AtributController;
use App\Http\Controllers\MatriksController;
Use App\Http\Controllers\AhpController;


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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/mahasiswa', [MahasiswaController::class, "mahasiswa"]);
Route::get('/tambah', [MahasiswaController::class, "tambah"]);
Route::post('/mahasiswa/save', [MahasiswaController::class, "save"]);
Route::delete('/mahasiswa/delete/{id}', [MahasiswaController::class, "destroy"])->name('mahasiswa.delete');
Route::get('/edit/{id}', [MahasiswaController::class, "edit"]);
Route::get('/nilai', [MahasiswaController::class, "nilai"]);
Route::get('/beasiswa', [BeasiswasController::class, "beasiswa"]);
Route::delete('/atribut/delete/{id}', [AtributController::class, "destroy"])->name('atribut.delete');
Route::get('/atribut', [AtributController::class, "atribut"]);
Route::get('/rules', [AtributController::class, "rules"]);
Route::post('/atribut/save', [AtributController::class, "save"]);
Route::delete('/rules/delete/{id}', [AtributController::class, "destroy"])->name('rules.delete');
Route::get('/tambahrules', [AtributController::class, "tambahrules"]);
Route::get('/result', [MatriksController::class, "result"]);
Route::get('/hasil', [AhpController::class, "hasil"]);
Route::post('/result/save', [AtributController::class, "save"]);

Route::group(['middleware'=>['auth']], function(){
    Route::get('/',[IndexController::class, "welcome"]);
});
