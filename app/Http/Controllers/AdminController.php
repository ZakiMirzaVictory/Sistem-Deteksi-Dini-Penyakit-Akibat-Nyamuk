<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;
use App\Models\Laporan;
use App\Models\Notifikasi;
use App\Models\RiwayatPenanganan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
{
    $stats = [
        'total_pengguna' => Pengguna::count(),
        'total_laporan'  => Laporan::count(),
        'pending'        => Laporan::where('status', 'pending')->count(),
        'terverifikasi'  => Laporan::where('status', 'terverifikasi')->count(),
    ];

    $laporanTerbaru = Laporan::with('user')
        ->latest()
        ->take(5)
        ->get();

    return view('admin.dashboard', [
        'pageTitle'      => 'Dashboard Admin — Deteksi Dini Nyamuk',
        'role'           => 'admin',
        'activePage'     => 'dashboard',
        'stats'          => $stats,
        'laporanTerbaru' => $laporanTerbaru,
    ]);
}
    public function kelolaPengguna()
    {
        $data_pengguna = Pengguna::all();

        return view('admin.pengguna.index', [
            'pageTitle' => 'Kelola Pengguna — Portal Admin',
            'role' => 'admin',
            'activePage' => 'kelola-pengguna', 
            'data_pengguna' => $data_pengguna
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

    // 1. Menampilkan halaman form edit berdasarkan id_user
    public function editPengguna($id)
    {
        $pengguna = Pengguna::where('id_user', $id)->firstOrFail();

        return view('admin.pengguna.edit', [
            'pageTitle' => 'Edit Pengguna — Portal Admin',
            'role' => 'admin',
            'activePage' => 'kelola-pengguna',
            'pengguna' => $pengguna
        ]);
    }

    // 2. Menyimpan perubahan data ke database
    public function updatePengguna(Request $request, $id)
    {
        $pengguna = Pengguna::where('id_user', $id)->firstOrFail();

        $request->validate([
            'nama'   => 'required|string|max:255',
            'email'  => 'required|email|max:255',
            'no_hp'  => 'nullable|string|max:20',
            'role'   => 'required|string',
        ]);

        $pengguna->update([
            'nama'  => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'role'  => $request->role,
        ]);

        return redirect()->route('admin.pengguna.index')->with('success', 'Data pengguna berhasil diperbarui!');
    }

    // 3. Menghapus data pengguna
    public function hapusPengguna($id)
    {
        $pengguna = Pengguna::where('id_user', $id)->firstOrFail();
        $pengguna->delete();

        return redirect()->route('admin.pengguna.index')->with('success', 'Pengguna berhasil dihapus!');
    }
    // 1. Menampilkan halaman form tambah pengguna
    public function tambahPengguna()
    {
        return view('admin.pengguna.create', [
            'pageTitle' => 'Tambah Pengguna Baru — Portal Admin',
            'role' => 'admin',
            'activePage' => 'kelola-pengguna',
        ]);
    }

    // 2. Menyimpan data pengguna baru ke database Aiven
    public function simpanPengguna(Request $request)
    {
        $request->validate([
            'nama'     => 'required|string|max:255',
            'email'    => 'required|email|unique:pengguna,email|max:255',
            'password' => 'required|string|min:6',
            'no_hp'    => 'nullable|string|max:20',
            'alamat'   => 'nullable|string',
            'role'     => 'required|string',
        ]);

        Pengguna::create([
            'nama'     => $request->nama,
            'email'    => $request->email,
            'password' => Hash::make($request->password), // Enskripsi password agar aman
            'no_hp'    => $request->no_hp,
            'alamat'   => $request->alamat,
            'role'     => $request->role,
        ]);

        return redirect()->route('admin.pengguna.index')->with('success', 'Pengguna baru berhasil ditambahkan!');
    }

    // 1. Menampilkan daftar laporan masuk di halaman verifikasi
    public function verifikasiLaporan()
    {
        // Ambil semua data laporan, bisa diurutkan dari yang terbaru
        $laporan = Laporan::with('user')->orderBy('created_at', 'desc')->get();

        return view('admin.laporan.verifikasi', [
            'pageTitle' => 'Verifikasi Laporan — Portal Admin',
            'role' => 'admin',
            'activePage' => 'verifikasi-laporan',
            'laporan' => $laporan
        ]);
    }

    // 2. Memproses perubahan status (Terima / Tolak)
    public function updateStatusLaporan(Request $request, $id)
{
    $request->validate([
        'status' => 'required|in:terverifikasi,ditolak',
        'alasan' => 'required_if:status,ditolak|nullable|string|max:500',
    ], [
        'alasan.required_if' => 'Alasan penolakan wajib diisi.',
    ]);

    $laporan = Laporan::findOrFail($id);

    if ($laporan->status !== 'pending') {
        return back()->with('error', 'Laporan ini sudah diproses sebelumnya.');
    }

    $diverifikasi = $request->status === 'terverifikasi';

    DB::transaction(function () use ($request, $laporan, $diverifikasi) {
        $laporan->update(['status' => $request->status]);

        RiwayatPenanganan::create([
            'id_laporan' => $laporan->id,
            'id_admin'   => Auth::user()->id_user,
            'tindakan'   => $diverifikasi ? 'Laporan diverifikasi' : 'Laporan ditolak',
            'keterangan' => $diverifikasi ? null : $request->alasan,
            'tanggal'    => now()->toDateString(),
        ]);

        Notifikasi::create([
            'id_user'    => $laporan->id_user,
            'id_laporan' => $laporan->id,
            'pesan'      => $diverifikasi
                ? 'Laporan Anda di ' . $laporan->lokasi . ' telah diverifikasi.'
                : 'Laporan Anda di ' . $laporan->lokasi . ' ditolak. Alasan: ' . $request->alasan,
            'tanggal'    => now()->toDateString(),
        ]);
    });

    return redirect()->back()->with('success', $diverifikasi
        ? 'Laporan berhasil diverifikasi.'
        : 'Laporan berhasil ditolak.');
}}