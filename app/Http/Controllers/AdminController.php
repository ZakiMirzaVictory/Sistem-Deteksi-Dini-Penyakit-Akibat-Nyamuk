<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function kelolaPengguna()
    {
        return view('admin.pengguna.index', [
            'pageTitle' => 'Kelola Pengguna — Portal Admin',
            'role' => 'admin',
            'activePage' => 'kelola-pengguna'
        ]);
    }

    public function verifikasiLaporan()
    {
        return view('admin.laporan.verifikasi', [
            'pageTitle' => 'Verifikasi Laporan — Portal Admin',
            'role' => 'admin',
            'activePage' => 'verifikasi-laporan'
        ]);
    }

    public function prosesVerifikasi(Request $request, $id)
    {
        // Logika verifikasi laporan...
        return back()->with('success', 'Status laporan berhasil diperbarui.');
    }

    public function notifikasiAdmin()
    {
        return view('admin.notifikasi', [
            'pageTitle' => 'Notifikasi — Portal Admin',
            'role' => 'admin',
            'activePage' => 'notifikasi'
        ]);
    }
}