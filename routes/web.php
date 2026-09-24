<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'Login']);
Route::get('/register', [PageController::class, 'register']);

Route::get('/dashboard-masyarakat', [PageController::class, 'dashboardMasyarakat']);
Route::get('/buat-laporan', [PageController::class, 'buatLaporan']);
Route::get('/laporan-terverifikasi', [PageController::class, 'laporanTerverifikasi']);
Route::get('/notifikasi-masyarakat', [PageController::class, 'notifikasiMasyarakat']);

Route::get('/dashboard-admin', [PageController::class, 'dashboardAdmin']);
Route::get('/kelola-pengguna', [PageController::class, 'kelolaPengguna']);
Route::get('/notifikasi-admin', [PageController::class, 'notifikasiAdmin']);