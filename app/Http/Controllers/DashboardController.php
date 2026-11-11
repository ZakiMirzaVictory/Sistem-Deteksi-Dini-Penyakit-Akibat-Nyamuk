<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Notifikasi;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function masyarakat()
    {
        $user   = Auth::user();
        $idUser = $user->id_user;

        // ---------- Kartu statistik ----------
        $awalBulanIni   = now()->startOfMonth();
        $awalBulanLalu  = now()->subMonthNoOverflow()->startOfMonth();
        $akhirBulanLalu = now()->subMonthNoOverflow()->endOfMonth();

        // $status = null -> semua laporan
        $hitung = function (?string $status = null) use ($idUser, $awalBulanIni, $awalBulanLalu, $akhirBulanLalu) {
            $query = fn () => Laporan::where('id_user', $idUser)
                ->when($status, fn ($q) => $q->where('status', $status));

            $bulanIni  = $query()->where('created_at', '>=', $awalBulanIni)->count();
            $bulanLalu = $query()->whereBetween('created_at', [$awalBulanLalu, $akhirBulanLalu])->count();
            $selisih   = $bulanIni - $bulanLalu;

            return [
                'total' => $query()->count(),
                'note'  => $selisih === 0
                    ? 'Sama seperti bulan lalu'
                    : ($selisih > 0 ? '+' : '') . $selisih . ' dari bulan lalu',
            ];
        };

        $stats = [
            'total'         => $hitung(),
            'terverifikasi' => $hitung('terverifikasi'),
            'pending'       => $hitung('pending'),
            'notifikasi' => Notifikasi::where('id_user', $idUser)->where('status', 'belum_dibaca')->count(),
        ];

        // ---------- Grafik tren 6 bulan terakhir ----------
        $perBulan = Laporan::where('id_user', $idUser)
            ->where('created_at', '>=', now()->subMonthsNoOverflow(5)->startOfMonth())
            ->get(['created_at'])
            ->groupBy(fn ($l) => $l->created_at->format('Y-m'));

        $tren = collect(range(5, 0))->map(function ($i) use ($perBulan) {
            $bulan  = now()->subMonthsNoOverflow($i);
            $jumlah = $perBulan->get($bulan->format('Y-m'), collect())->count();

            return [
                'label'  => $bulan->translatedFormat('M'),
                'jumlah' => $jumlah,
            ];
        });

        $maks = max($tren->max('jumlah'), 1);
        $tren = $tren->map(function ($t) use ($maks) {
            // tinggi minimal supaya bulan kosong/kecil tetap kelihatan
            $t['tinggi'] = $t['jumlah'] > 0 ? max(round($t['jumlah'] / $maks * 100), 8) : 3;
            return $t;
        });

        // ---------- Laporan terbaru ----------
        $laporanTerbaru = Laporan::where('id_user', $idUser)
            ->latest()
            ->take(5)
            ->get();

        // ---------- Profil ----------
        $inisial = collect(explode(' ', trim($user->nama)))
            ->filter()
            ->take(2)
            ->map(fn ($kata) => mb_strtoupper(mb_substr($kata, 0, 1)))
            ->implode('');

        return view('masyarakat.dashboard', [
            'pageTitle'      => 'Dashboard Masyarakat — Deteksi Dini Nyamuk',
            'role'           => 'masyarakat',
            'activePage'     => 'dashboard',
            'user'           => $user,
            'inisial'        => $inisial,
            'stats'          => $stats,
            'tren'           => $tren,
            'laporanTerbaru' => $laporanTerbaru,
        ]);
    }

    public function notifikasiMasyarakat()
    {
        // Ambil ID pengguna yang sedang login
        $id_user = Auth::id(); // atau Auth::user()->id_user sesuai struktur kolom Anda

        // Ambil notifikasi milik pengguna yang sedang login
        $notifikasi = Notifikasi::where('id_user', $id_user)
                                ->orderBy('tanggal', 'desc')
                                ->orderBy('created_at', 'desc')
                                ->get();
                                
        // Hitung jumlah notifikasi yang belum dibaca
        $jumlahBelumDibaca = Notifikasi::where('id_user', $id_user)
                                       ->where('status', 'belum_dibaca')
                                       ->count();

        // Lempar data ke halaman blade
        return view('masyarakat.laporan.notifikasi', compact('notifikasi', 'jumlahBelumDibaca'));
    }

    public function tandaiSemuaDibaca()
    {
        $id_user = Auth::id();
        
        // Update semua status 'belum_dibaca' menjadi 'sudah_dibaca'
        Notifikasi::where('id_user', $id_user)
                  ->where('status', 'belum_dibaca')
                  ->update(['status' => 'sudah_dibaca']);

        return redirect()->back()->with('success', 'Semua notifikasi telah ditandai dibaca.');
    }

    public function laporanTerverifikasi()
{
    // Mengambil laporan milik user yang sedang login khusus dengan status 'terverifikasi'
    $laporanTerverifikasi = Laporan::where('id_user', Auth::id())
                                   ->where('status', 'terverifikasi')
                                   ->orderBy('tanggal', 'desc')
                                   ->get();

    return view('masyarakat.laporan.terverifikasi', [
        'pageTitle' => 'Laporan Terverifikasi — Masyarakat',
        'role' => 'masyarakat',
        'activePage' => 'laporan-terverifikasi',
        'laporan' => $laporanTerverifikasi // Mengirim data ke tampilan blade
    ]);
}
}