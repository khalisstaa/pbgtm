<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\HomeController;

// Home route
Route::get('/', function () {
    return view('auth.login'); // Redirect to login view
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/absensi', [AbsensiController::class, 'absensi'])->name('absensi');
Route::get('/absensi/edit/{id}', [AbsensiController::class, 'edit'])->name('absensi.edit');
Route::post('/absensi/update/{id}', [AbsensiController::class, 'update'])->name('absensi.update');

Route::get('/karyawan', [KaryawanController::class, 'karyawan'])->name('karyawan');
Route::get('/karyawan/create', [KaryawanController::class, 'create'])->name('karyawan.create');
Route::post('/karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');
Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit'])->name('karyawan.edit');
Route::put('/karyawan/{id}', [KaryawanController::class, 'update'])->name('karyawan.update');
Route::delete('/karyawan/{id}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');
