<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function masyarakat()
    {
        return view('masyarakat.dashboard', [
            'pageTitle' => 'Dashboard Masyarakat — Deteksi Dini Nyamuk',
            'role' => 'masyarakat',
            'activePage' => 'dashboard'
        ]);
    }

    public function admin()
    {
        return view('admin.dashboard', [
            'pageTitle' => 'Dashboard Admin — Deteksi Dini Nyamuk',
            'role' => 'admin',
            'activePage' => 'dashboard'
        ]);
    }

    public function notifikasiMasyarakat()
    {
        return view('masyarakat.laporan.notifikasi', [
            'pageTitle' => 'Notifikasi — Masyarakat',
            'role' => 'masyarakat',
            'activePage' => 'notifikasi'
        ]);
    }

    public function laporanTerverifikasi()
    {
        return view('masyarakat.laporan.terverifikasi', [
            'pageTitle' => 'Laporan Terverifikasi — Deteksi Dini Nyamuk',
            'role' => 'masyarakat',
            'activePage' => 'laporan-terverifikasi' 
        ]);
    }

}