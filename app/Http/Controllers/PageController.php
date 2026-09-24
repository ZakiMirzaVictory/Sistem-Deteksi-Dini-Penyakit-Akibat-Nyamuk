<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function login()
    {
        return view('layouts.nyamuk', [
            'page' => 'login',
            'pageTitle' => 'Login — Deteksi Dini Penyakit Akibat Nyamuk',
            'layout' => 'auth',
            'role' => null,
            'activePage' => ''
        ]);
    }

    public function register()
    {
        return view('layouts.nyamuk', [
            'page' => 'registrasi',
            'pageTitle' => 'Registrasi — Deteksi Dini Penyakit Akibat Nyamuk',
            'layout' => 'auth',
            'role' => null,
            'activePage' => ''
        ]);
    }

    public function dashboardMasyarakat()
    {
        return view('layouts.nyamuk', [
            'page' => 'dashboard-masyarakat',
            'pageTitle' => 'Dashboard Masyarakat — Deteksi Dini Nyamuk',
            'layout' => 'dashboard',
            'role' => 'masyarakat',
            'activePage' => 'dashboard'
        ]);
    }

    public function buatLaporan()
    {
        return view('layouts.nyamuk', [
            'page' => 'buat-laporan',
            'pageTitle' => 'Buat Laporan — Deteksi Dini Nyamuk',
            'layout' => 'dashboard',
            'role' => 'masyarakat',
            'activePage' => 'buat-laporan'
        ]);
    }

    public function laporanTerverifikasi()
    {
        return view('layouts.nyamuk', [
            'page' => 'laporan-terverifikasi',
            'pageTitle' => 'Laporan Terverifikasi — Deteksi Dini Nyamuk',
            'layout' => 'dashboard',
            'role' => 'masyarakat',
            'activePage' => 'laporan-terverifikasi'
        ]);
    }

    public function notifikasiMasyarakat()
    {
        return view('layouts.nyamuk', [
            'page' => 'notifikasi-masyarakat',
            'pageTitle' => 'Notifikasi — Portal Masyarakat',
            'layout' => 'dashboard',
            'role' => 'masyarakat',
            'activePage' => 'notifikasi'
        ]);
    }

    public function dashboardAdmin()
    {
        return view('layouts.nyamuk', [
            'page' => 'dashboard-admin',
            'pageTitle' => 'Dashboard Admin — Deteksi Dini Nyamuk',
            'layout' => 'dashboard',
            'role' => 'admin',
            'activePage' => 'dashboard'
        ]);
    }

    public function kelolaPengguna()
    {
        return view('layouts.nyamuk', [
            'page' => 'kelola-pengguna',
            'pageTitle' => 'Kelola Pengguna — Portal Admin',
            'layout' => 'dashboard',
            'role' => 'admin',
            'activePage' => 'kelola-pengguna'
        ]);
    }

    public function verifikasiLaporan()
    {
        return view('layouts.nyamuk', [
            'page' => 'verifikasi-laporan',
            'pageTitle' => 'Verifikasi Laporan — Portal Admin',
            'layout' => 'dashboard',
            'role' => 'admin',
            'activePage' => 'verifikasi-laporan'
        ]);
    }

    public function notifikasiAdmin()
    {
        return view('layouts.nyamuk', [
            'page' => 'notifikasi-admin',
            'pageTitle' => 'Notifikasi — Portal Admin',
            'layout' => 'dashboard',
            'role' => 'admin',
            'activePage' => 'notifikasi'
        ]);
    }
}