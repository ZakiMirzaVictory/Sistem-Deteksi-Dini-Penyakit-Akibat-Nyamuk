@extends('layouts.app')

@section('content')
<div class="page-head">
    <div>
        <h1>Dashboard Masyarakat</h1>
        <p>Selamat datang kembali! Berikut ringkasan laporan Anda.</p>
    </div>
</div>

<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-top">
            <span class="label">Total Laporan</span>
            <div class="stat-icon" style="background:var(--primary-soft);color:var(--primary);">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 3H6a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8z"/></svg>
            </div>
        </div>
        <div class="stat-value">12</div>
        <div class="stat-note">+3 dari bulan lalu</div>
    </div>

    <div class="stat-card">
        <div class="stat-top">
            <span class="label">Laporan Terverifikasi</span>
            <div class="stat-icon" style="background:var(--success-soft);color:var(--success);">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>
            </div>
        </div>
        <div class="stat-value">8</div>
        <div class="stat-note">+2 dari bulan lalu</div>
    </div>

    <div class="stat-card">
        <div class="stat-top">
            <span class="label">Menunggu Verifikasi</span>
            <div class="stat-icon" style="background:var(--warn-soft);color:var(--warn);">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
            </div>
        </div>
        <div class="stat-value">4</div>
        <div class="stat-note">-1 dari bulan lalu</div>
    </div>

    <div class="stat-card">
        <div class="stat-top">
            <span class="label">Notifikasi Baru</span>
            <div class="stat-icon" style="background:var(--primary-soft);color:var(--primary);">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8a6 6 0 1 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/></svg>
            </div>
        </div>
        <div class="stat-value">2</div>
        <div class="stat-note">Belum dibaca</div>
    </div>
</div>

<div class="content-grid">
    <div style="display:flex;flex-direction:column;gap:18px;">
        <div class="card">
            <h3 style="font-size:14px;margin-bottom:16px;">Tren Laporan Bulanan</h3>
            <div class="trend">
                <div class="bar" style="height:35%;"><span>Jan</span></div>
                <div class="bar" style="height:22%;"><span>Feb</span></div>
                <div class="bar" style="height:48%;"><span>Mar</span></div>
                <div class="bar" style="height:55%;"><span>Apr</span></div>
                <div class="bar" style="height:70%;"><span>Mei</span></div>
                <div class="bar" style="height:95%;"><span>Jun</span></div>
            </div>
        </div>

        <div class="card">
            <h3 style="font-size:14px;margin-bottom:10px;">Laporan Terbaru</h3>
            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Lokasi</th>
                            <th>Penyakit</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2026-06-03</td>
                            <td>Jl. Merdeka No. 45</td>
                            <td>DBD</td>
                            <td><span class="badge badge-success">Terverifikasi</span></td>
                        </tr>
                        <tr>
                            <td>2026-06-02</td>
                            <td>Jl. Sudirman No. 12</td>
                            <td>Malaria</td>
                            <td><span class="badge badge-warn">Menunggu</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <h3 style="font-size:14px;text-align:center;margin-bottom:4px;">Profil Pengguna</h3>
        <div class="profile-avatar">AH</div>
        <p style="text-align:center;font-weight:600;font-size:13.5px;">Ahmad Hidayat</p>
        <p style="text-align:center;font-size:11.5px;color:var(--muted);margin-bottom:10px;">ahmad.hidayat@email.com</p>
        <div class="profile-row"><span class="k">Nomor HP</span><span>081234567890</span></div>
        <div class="profile-row"><span class="k">Bergabung</span><span>Jan 2026</span></div>
        <div class="profile-row"><span class="k">Role</span><span>Masyarakat</span></div>
    </div>
</div>
@endsection