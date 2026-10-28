<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Laporan;

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
        // 1. Validasi sesuai kolom tabel
        $request->validate([
            'tanggal'   => 'required|date',
            'lokasi'    => 'required|string|max:255',
            'gejala'    => 'required|string',
            'deskripsi' => 'required|string',
            'foto'      => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        // 2. Upload Foto
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('laporan_fotos', 'public');
        }

        // 3. Simpan ke database Aiven
        Laporan::create([
            'id_user'   => Auth::id(),
            'tanggal'   => $request->tanggal,
            'lokasi'    => $request->lokasi,
            'gejala'    => $request->gejala,
            'deskripsi' => $request->deskripsi,
            'foto'      => $fotoPath,
            'status'    => 'pending', // Sesuai status default di tabel kamu
        ]);

        return redirect()->route('masyarakat.dashboard')->with('success', 'Laporan berhasil dikirim!');
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