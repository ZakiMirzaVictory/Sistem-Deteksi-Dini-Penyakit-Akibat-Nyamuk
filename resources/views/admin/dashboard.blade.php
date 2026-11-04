@extends('layouts.app')

@section('content')
<div class="page-head">
    <div class="page-head-icon">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 11l9-7 9 7v9a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1z"/></svg>
    </div>
    <div>
        <h1>Dashboard Admin</h1>
        <p>Selamat datang, {{ auth()->user()->name ?? 'Administrator' }}</p>
    </div>
</div>

<div class="stats-grid">
    <div class="stat-card">
        <span class="label">Total Pengguna</span>
        <div class="stat-value">{{ number_format($stats['total_pengguna']) }}</div>
        <div class="stat-note">Terdaftar</div>
    </div>

    <div class="stat-card">
        <span class="label">Total Laporan</span>
        <div class="stat-value">{{ number_format($stats['total_laporan']) }}</div>
        <div class="stat-note">Semua laporan</div>
    </div>

    <div class="stat-card">
        <span class="label">Menunggu Verifikasi</span>
        <div class="stat-value" style="color:var(--warn);">{{ number_format($stats['pending']) }}</div>
        <div class="stat-note">Pending</div>
    </div>

    <div class="stat-card">
        <span class="label">Terverifikasi</span>
        <div class="stat-value" style="color:var(--success);">{{ number_format($stats['terverifikasi']) }}</div>
        <div class="stat-note">Diproses</div>
    </div>
</div>

<div class="card">
    <h3 style="font-size:14px;margin-bottom:12px;">Laporan Masuk Terbaru</h3>
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Pelapor</th>
                    <th>Lokasi</th>
                    <th>Jenis Penyakit</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($laporanTerbaru as $laporan)
                    <tr>
                        <td>{{ $laporan->user->nama ?? '-' }}</td>
                        <td>{{ $laporan->lokasi }}</td>
                        <td>{{ $laporan->jenis_penyakit }}</td>
                        <td>{{ $laporan->created_at->translatedFormat('d M Y') }}</td>
                        <td>
                            @if ($laporan->status === 'pending')
                                <span class="badge badge-warn">Pending</span>
                            @elseif ($laporan->status === 'terverifikasi')
                                <span class="badge badge-success">Terverifikasi</span>
                            @else
                                <span class="badge">{{ ucfirst($laporan->status) }}</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align:center;padding:16px;">Belum ada laporan masuk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection