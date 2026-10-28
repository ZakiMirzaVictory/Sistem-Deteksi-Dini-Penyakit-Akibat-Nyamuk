<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class AdminController extends Controller
{
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
}