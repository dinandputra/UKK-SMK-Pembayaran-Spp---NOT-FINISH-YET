<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PenggunaController;


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

// logout
Route::get('/logout', [LoginController::class, 'logout']);

//CRUD KELAS
Route::resource('/kelas/index', KelasController::class); 
Route::get('/kelas/hapuskelas/{id_kelas}', [KelasController::class, 'destroy']);

//CRUD SPP
Route::resource('/spp/index', SppController::class);
Route::get('/spp/hapusspp/{id_spp}', [SppController::class, 'destroy']);

//CRUD SISWA
Route::resource('/siswa/index', SiswaController::class);
Route::get('/siswa/hapussiswa/{nisn}', [SiswaController::class, 'destroy']);

//CRUD PENGGUNA
Route::resource('/pengguna/index', PenggunaController::class);
Route::get('/pengguna/hapuspengguna/{id_pengguna}', [PenggunaController::class, 'destroy']);

//CRUD PEMBAYARAN



// Admin route
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.adminHome');
});

// Petugas Route
Route::middleware(['auth', 'user-access:petugas'])->group(function () {
  
    Route::get('/petugas/home', [HomeController::class, 'petugasHome'])->name('petugas.petugasHome');
});

// User Route
Route::middleware(['auth', 'user-access:user'])->group(function () {
   
    Route::get('/user/home', [HomeController::class, 'userHome'])->name('user.home');

});
  
