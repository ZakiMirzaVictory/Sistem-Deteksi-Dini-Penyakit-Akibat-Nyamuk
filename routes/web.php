<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AdminController;

// Halaman utama langsung diarahkan ke login
Route::get('/', function () {
    return redirect()->route('login');
});

// Route Khusus Tamu (Belum Login)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.perform');

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.perform');
});

// Route Wajib Login
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Portal Masyarakat
    Route::get('/dashboard-masyarakat', [DashboardController::class, 'masyarakat'])->name('masyarakat.dashboard');
    Route::get('/buat-laporan', [LaporanController::class, 'create'])->name('laporan.create');
    Route::post('/buat-laporan', [LaporanController::class, 'store'])->name('laporan.store');
    Route::get('/notifikasi-masyarakat', [DashboardController::class, 'notifikasiMasyarakat'])->name('masyarakat.laporan.notifikasi');
    Route::get('/laporan-terverifikasi', [DashboardController::class, 'laporanTerverifikasi'])->name('masyarakat.laporan.terverifikasi');

    // Portal Admin
    Route::get('/dashboard-admin', [DashboardController::class, 'admin'])->name('admin.dashboard');
    Route::get('/kelola-pengguna', [AdminController::class, 'kelolaPengguna'])->name('admin.pengguna.index');
    Route::get('/verifikasi-laporan', [AdminController::class, 'verifikasiLaporan'])->name('admin.laporan.verifikasi');
    Route::post('/verifikasi-laporan/{id}', [AdminController::class, 'prosesVerifikasi'])->name('admin.laporan.proses');
    Route::get('/notifikasi-admin', [AdminController::class, 'notifikasiAdmin'])->name('admin.notifikasi');

    // Menampilkan halaman edit pengguna
    Route::get('/kelola-pengguna/{id}/edit', [AdminController::class, 'editPengguna'])->name('admin.pengguna.edit');

    // Memproses penyimpanan perubahan data (Update)
    Route::put('/kelola-pengguna/{id}', [AdminController::class, 'updatePengguna'])->name('admin.pengguna.update');

    // Menghapus data pengguna (Delete)
    Route::delete('/kelola-pengguna/{id}', [AdminController::class, 'hapusPengguna'])->name('admin.pengguna.destroy');

    // Menampilkan form tambah pengguna
Route::get('/kelola-pengguna/create', [AdminController::class, 'tambahPengguna'])->name('admin.pengguna.create');

// Menyimpan data pengguna baru ke database
Route::post('/kelola-pengguna', [AdminController::class, 'simpanPengguna'])->name('admin.pengguna.store');

// Memproses aksi verifikasi (Terima atau Tolak)
Route::put('/laporan/{id}/status', [AdminController::class, 'updateStatusLaporan'])->name('admin.laporan.status');
});