<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Laporan;
use App\Models\Notifikasi;
use App\Models\RiwayatPenanganan;
use Carbon\Carbon;

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
            'id_user'   => Auth::id(), // Pastikan Auth::id() mereturn id_user (integer)
            'tanggal'   => $request->tanggal,
            'lokasi'    => $request->lokasi,
            'gejala'    => $request->gejala,
            'deskripsi' => $request->deskripsi,
            'foto'      => $fotoPath,
            'status'    => 'pending', 
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

    // --- TAMBAHAN UNTUK TIKET KF-4.2, KF-4.3, KF-5.3 ---
    public function updateStatus(Request $request, $id)
    {
        // Validasi input dari tombol HTML (terima / tolak)
        $request->validate([
            'status' => 'required|in:terverifikasi,ditolak',
        ]);

        $laporan = Laporan::findOrFail($id);
        
        // 1. Update Status Laporan (KF-4.2 / KF-4.3)
        $laporan->status = $request->status;
        $laporan->save();

        // 2. Simpan Riwayat Penanganan (KF-4.2)
        RiwayatPenanganan::create([
            'id_user' => Auth::id(), // Admin yang sedang login
            'id_laporan' => $laporan->id,
            'status' => $request->status,
            'catatan' => $request->status == 'terverifikasi' ? 'Laporan valid dan telah diverifikasi.' : 'Laporan ditolak oleh admin.',
        ]);

        // 3. Buat Notifikasi Otomatis untuk Pelapor (KF-5.3)
        $pesanNotif = $request->status == 'terverifikasi' 
            ? "Laporan Anda di lokasi {$laporan->lokasi} telah DITERIMA dan DIVERIFIKASI." 
            : "Mohon maaf, laporan Anda di lokasi {$laporan->lokasi} DITOLAK.";

        Notifikasi::create([
            'id_user' => $laporan->id_user, // Target notifikasi: Masyarakat pelapor
            'id_laporan' => $laporan->id,
            'pesan' => $pesanNotif,
            'status' => 'belum_dibaca',
            'tanggal' => Carbon::now()->toDateString()
        ]);

        return redirect()->back()->with('success', 'Status laporan berhasil diubah dan notifikasi telah dikirim ke pelapor.');
    }
}