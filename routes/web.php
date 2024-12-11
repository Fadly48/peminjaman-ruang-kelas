<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\RuanganController;

// Halaman Utama
Route::get('/', function () {
    return view('index');
})->name('index');

// Dashboard
Route::get('/dashboard', function () {
    return view('Dashboard', ['title' => 'Dashboard']);
})->name('dashboard');

// Registrasi
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'register_action'])->name('register.action');

// Login
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'login_action'])->name('login.action');

// Peminjaman Ruang Kelas
Route::prefix('dashboard/peminjaman')->name('peminjaman.')->group(function () {
    Route::get('/', [PeminjamanController::class, 'index'])->name('index');
    Route::get('/create', [PeminjamanController::class, 'create'])->name('create');
    Route::post('/', [PeminjamanController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [PeminjamanController::class, 'edit'])->name('edit');
    Route::put('/{id}', [PeminjamanController::class, 'update'])->name('update');
    Route::delete('/{id}', [PeminjamanController::class, 'destroy'])->name('destroy');
});

// Ruangan
Route::prefix('ruangan')->name('ruangan.')->group(function () {
    Route::get('/', [RuanganController::class, 'index'])->name('index'); // Pastikan nama route 'ruangan.index'
    Route::get('/create', [RuanganController::class, 'create'])->name('create');
    Route::post('/', [RuanganController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [RuanganController::class, 'edit'])->name('edit');
    Route::put('/{id}', [RuanganController::class, 'update'])->name('update');
    Route::delete('/{id}', [RuanganController::class, 'destroy'])->name('destroy');
});
