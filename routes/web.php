<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

// Halaman utama: Cek status login terlebih dahulu
Route::get('/', function () {
    if (Auth::check()) {
        $userRole = strtolower(trim(Auth::user()->role));
        return $userRole === 'admin'
            ? redirect()->route('admin.dashboard')
            : redirect()->route('masyarakat.dashboard');
    }

    return redirect()->route('login');
});

// ==========================================
// ROUTE KHUSUS TAMU (BELUM LOGIN)
// ==========================================
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.perform');

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.perform');
});

// ==========================================
// ROUTE WAJIB LOGIN & TIDAK BISA DI-BACK
// ==========================================
Route::middleware(['auth', 'prevent-back-history'])->group(function () {
    
    // Semua user (Admin & Masyarakat) bisa melakukan logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // ------------------------------------------
    // GRUP ROUTE KHUSUS MASYARAKAT
    // ------------------------------------------
    Route::middleware('role:masyarakat')->group(function () {
        Route::get('/dashboard-masyarakat', [DashboardController::class, 'masyarakat'])->name('masyarakat.dashboard');
        
        Route::get('/buat-laporan', [LaporanController::class, 'create'])->name('laporan.create');
        Route::post('/buat-laporan', [LaporanController::class, 'store'])->name('laporan.store');
        
        Route::get('/notifikasi-masyarakat', [DashboardController::class, 'notifikasiMasyarakat'])->name('masyarakat.laporan.notifikasi');
        Route::get('/laporan-terverifikasi', [DashboardController::class, 'laporanTerverifikasi'])->name('masyarakat.laporan.terverifikasi');
    });

    // ------------------------------------------
    // GRUP ROUTE KHUSUS ADMIN
    // ------------------------------------------
    Route::middleware('role:admin')->group(function () {
        Route::get('/dashboard-admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        
        Route::get('/kelola-pengguna/create', [AdminController::class, 'tambahPengguna'])->name('admin.pengguna.create');
        Route::post('/kelola-pengguna', [AdminController::class, 'simpanPengguna'])->name('admin.pengguna.store');
        
        Route::get('/kelola-pengguna', [AdminController::class, 'kelolaPengguna'])->name('admin.pengguna.index');
        Route::get('/kelola-pengguna/{id}/edit', [AdminController::class, 'editPengguna'])->name('admin.pengguna.edit');
        Route::put('/kelola-pengguna/{id}', [AdminController::class, 'updatePengguna'])->name('admin.pengguna.update');
        Route::delete('/kelola-pengguna/{id}', [AdminController::class, 'hapusPengguna'])->name('admin.pengguna.destroy');

        Route::get('/verifikasi-laporan', [AdminController::class, 'verifikasiLaporan'])->name('admin.laporan.verifikasi');
        Route::post('/verifikasi-laporan/{id}', [AdminController::class, 'prosesVerifikasi'])->name('admin.laporan.proses');
        Route::put('/laporan/{id}/status', [AdminController::class, 'updateStatusLaporan'])->name('admin.laporan.status');
        
        Route::get('/notifikasi-admin', [AdminController::class, 'notifikasiAdmin'])->name('admin.notifikasi');
    });
});