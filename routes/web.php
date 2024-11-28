<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PeminjamanRuangKelasController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\RuanganController;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('Dashboard', ['title' => 'Dashboard']);
})->name('dashboard');

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'register_action'])->name('register.action');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'login_action'])->name('login.action');

Route::get('/dashboard/peminjaman', [PeminjamanRuangKelasController::class, 'index'])->name('peminjaman.index');
Route::get('/dashboard/peminjaman/create', [PeminjamanRuangKelasController::class, 'create'])->name('peminjaman.create');
Route::resource('peminjaman', PeminjamanController::class);
Route::get('peminjaman/{id}/edit', [PeminjamanController::class, 'edit'])->name('peminjaman.edit');
Route::delete('peminjaman/{id}', [PeminjamanController::class, 'destroy'])->name('peminjaman.destroy');
Route::get('/ruangan', [RuanganController::class, 'daftar'])->name('ruangan.daftar');


