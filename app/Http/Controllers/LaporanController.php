<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function create()
    {
        return view('masyarakat.laporan.create', [
            'pageTitle' => 'Buat Laporan Baru — Deteksi Dini Nyamuk',
            'role' => 'masyarakat',
            'activePage' => 'buat-laporan'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'lokasi' => 'required|string|max:255',
            'jenis_penyakit' => 'required|string',
            'gejala' => 'required|string',
            'kondisi_lingkungan' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        // Simpan logika laporan ke database di sini...

        return redirect()->route('masyarakat.dashboard')->with('success', 'Laporan berhasil dikirim.');
    }

    public function terverifikasi()
    {
        return view('masyarakat.laporan.terverifikasi', [
            'pageTitle' => 'Laporan Terverifikasi — Masyarakat',
            'role' => 'masyarakat',
            'activePage' => 'laporan-terverifikasi'
        ]);
    }
}