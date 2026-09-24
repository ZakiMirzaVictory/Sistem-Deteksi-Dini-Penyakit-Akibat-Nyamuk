<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function login()
    {
        return view('Login');
    }

    public function register()
    {
        return view('Register');
    }

    public function dashboardMasyarakat()
    {
        return view('Dashboard_Masyarakat');
    }

    public function buatLaporan()
    {
        return view('Buat_Laporan');
    }

    public function laporanTerverifikasi()
    {
        return view('Laporan_Terverifikasi');
    }

    public function notifikasiMasyarakat()
    {
        return view('Notifikasi_Masyarakat');
    }

    public function dashboardAdmin()
    {
        return view('Dashboard_Admin');
    }

    public function kelolaPengguna()
    {
        return view('Kelola_Pengguna');
    }

    public function notifikasiAdmin()
    {
        return view('Notifikasi_Admin');
    }
}