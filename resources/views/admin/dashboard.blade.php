@extends('layouts.app')

@section('content')
<div class="page-head">
    <div class="page-head-icon">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 11l9-7 9 7v9a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1z"/></svg>
    </div>
    <div>
        <h1>Dashboard Admin</h1>
        <p>Selamat datang, Administrator</p>
    </div>
</div>

<div class="stats-grid">
    <div class="stat-card">
        <span class="label">Total Pengguna</span>
        <div class="stat-value">128</div>
        <div class="stat-note">Terdaftar</div>
    </div>

    <div class="stat-card">
        <span class="label">Total Laporan</span>
        <div class="stat-value">47</div>
        <div class="stat-note">Semua laporan</div>
    </div>

    <div class="stat-card">
        <span class="label">Menunggu Verifikasi</span>
        <div class="stat-value" style="color:var(--warn);">8</div>
        <div class="stat-note">Pending</div>
    </div>

    <div class="stat-card">
        <span class="label">Terverifikasi</span>
        <div class="stat-value" style="color:var(--success);">36</div>
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
                <tr>
                    <td>Wahyu Zizi</td>
                    <td>Jl. Mawar No. 5</td>
                    <td>DBD</td>
                    <td>01 Jun 2026</td>
                    <td><span class="badge badge-warn">Pending</span></td>
                </tr>
                <tr>
                    <td>Budi Santoso</td>
                    <td>Kel. Pandean</td>
                    <td>Malaria</td>
                    <td>31 Mei 2026</td>
                    <td><span class="badge badge-warn">Pending</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection