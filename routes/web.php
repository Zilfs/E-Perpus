<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengelolaAuthController;
use App\Http\Controllers\UlasanController;
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
    Route::get('/export-data-kategori', [kategoriController::class, 'export'])->name('export-data-kategori');
    Route::get('/export-data-buku', [BukuController::class, 'export'])->name('export-data-buku');
});

Route::middleware(['isAdmin'])->group(function () {
    Route::resource('/user', UserController::class);
    Route::get('/export-data-user', [UserController::class, 'export'])->name('export-data-user');
});

Route::middleware(['isPetugas'])->group(function () {
    Route::resource('/peminjaman', PeminjamanController::class);
    Route::get('/data-peminjaman', [PeminjamanController::class, 'show_all'])->name('data-peminjaman');
    Route::get('/export-data-peminjaman', [PeminjamanController::class, 'export'])->name('export-data-peminjaman');
});

Route::middleware(['isPeminjam'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/kategori/{id}', [HomeController::class, 'kategori'])->name('kategori');
    Route::get('/data-buku/{id}', [HomeController::class, 'buku'])->name('buku');
    Route::post('/pinjam-buku', [PeminjamanController::class, 'store'])->name('pinjam-buku');
    Route::get('/dipinjam/{id}', [PeminjamanController::class, 'show'])->name('dipinjam');
    Route::get('/kembalikan-buku/{id}', [PeminjamanController::class, 'destroy'])->name('kembalikan-buku');
    Route::resource('/ulasan', UlasanController::class);
    Route::get('/koleksi/{id}', [KoleksiController::class, 'index'])->name('koleksi');
    Route::get('/tambah-koleksi/{id}', [KoleksiController::class, 'store'])->name('tambah-koleksi');
    Route::delete('/hapus-koleksi/{id}', [KoleksiController::class, 'destroy'])->name('hapus-koleksi');
});
