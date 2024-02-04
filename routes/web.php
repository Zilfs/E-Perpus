<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengelolaAuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/sign-up', [AuthController::class, 'sign_up'])->name('sign-up');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'index'])->name('logout');
Route::get('/login-pengelola', [PengelolaAuthController::class, 'index'])->name('login-pengelola');
Route::post('/athenticate-pengelola', [PengelolaAuthController::class, 'authenticate'])->name('authenticate-pengelola');
Route::get('/logout-pengelola', [PengelolaAuthController::class, 'logout'])->name('logout-pengelola');

Route::middleware(['isPengelola'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/kategori-buku', KategoriController::class);
    Route::resource('/buku', BukuController::class);
});

Route::middleware(['isAdmin'])->group(function () {
    Route::resource('/user', UserController::class);
});

Route::middleware(['isPetugas'])->group(function () {
    Route::resource('/peminjaman', PeminjamanController::class);
});

Route::middleware(['isPeminjam'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/kategori/{id}', [HomeController::class, 'kategori'])->name('kategori');
    Route::get('/data-buku/{id}', [HomeController::class, 'buku'])->name('buku');
});
