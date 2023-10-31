<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PortoController;
use App\Http\Controllers\DinamisController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;
use Dompdf\Dompdf;

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

Route::get('home',[PortoController::class, 'index']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/postregister',[AuthController::class, 'postregister']);

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/postlogin', [AuthController::class,'postlogin']);
Route::get('/logout', [AuthController::class,'logout']);

//hasil atau report PDF
Route::get('/downloadpdf', [MahasiswaController::class, 'downloadpdf']);


Route::get('web/beranda', [DinamisController::class, 'beranda']);
Route::get('web/profil', [DinamisController::class, 'profil']);
Route::get('web/kontak', [DinamisController::class, 'kontak']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');


Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/{id}/update', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa/{id}/delete', [MahasiswaController::class, 'destroy']);

Route::get('/mahasiswa/search', [MahasiswaController::class, 'search']);

Route::get('/mahasiswa/wali', [MahasiswaController::class, 'wali']);

Route::get('/mahasiswa/dosen', [MahasiswaController::class, 'dosen']);

Route::get('/mahasiswa/matkul', [MahasiswaController::class, 'matkul']);

