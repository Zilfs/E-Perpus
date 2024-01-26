<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PengelolaAuthController;
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
Route::get('/login-pengelola', [PengelolaAuthController::class, 'index'])->name('login-pengelola');
Route::post('/athenticate-pengelola', [PengelolaAuthController::class, 'authenticate'])->name('authenticate-pengelola');

Route::middleware(['isPengelola'])->group(function () {
});
