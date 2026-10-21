@extends('layouts.app')

@section('content')

<div>
    <!-- Header Halaman -->
    <div class="page-head" style="justify-content:space-between;">
        <div>
            <h1>Notifikasi</h1>
            <p>Pemberitahuan laporan baru dan aktivitas sistem.</p>
        </div>
        <button class="btn btn-outline btn-sm">
            Tandai Semua Sudah Dibaca
        </button>
    </div>

    <!-- Info Jumlah Unread -->
    <p style="font-size:12.5px; color:var(--muted); margin-bottom:14px; font-weight:500;">
        2 notifikasi belum dibaca
    </p>

    <!-- Notifikasi 1 (Belum Dibaca) -->
    <div class="notif-item unread">
        <div class="notif-icon" style="background:var(--warn-soft); color:var(--warn);">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="9"/>
                <path d="M12 7v5l3 3"/>
            </svg>
        </div>
        <div class="notif-body">
            <div class="notif-title-row">
                <span class="notif-title">Laporan Baru Menunggu Verifikasi</span>
                <span class="badge badge-danger">Belum dibaca</span>
            </div>
            <p class="notif-text">
                Wahyu Zizi melaporkan kasus DBD di Jl. Mawar No. 5 — memerlukan verifikasi Anda.
            </p>
            <p class="notif-time">01 Jun 2026, 14:20</p>
        </div>
    </div>

    <!-- Notifikasi 2 (Belum Dibaca) -->
    <div class="notif-item unread">
        <div class="notif-icon" style="background:var(--warn-soft); color:var(--warn);">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="9"/>
                <path d="M12 7v5l3 3"/>
            </svg>
        </div>
        <div class="notif-body">
            <div class="notif-title-row">
                <span class="notif-title">Laporan Baru Menunggu Verifikasi</span>
                <span class="badge badge-danger">Belum dibaca</span>
            </div>
            <p class="notif-text">
                Budi Santoso melaporkan kasus Malaria di Kel. Pandean — memerlukan verifikasi Anda.
            </p>
            <p class="notif-time">31 Mei 2026, 10:05</p>
        </div>
    </div>

    <!-- Notifikasi 3 (Sudah Dibaca) -->
    <div class="notif-item">
        <div class="notif-icon" style="background:var(--success-soft); color:var(--success);">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                <circle cx="9" cy="7" r="4"/>
            </svg>
        </div>
        <div class="notif-body">
            <div class="notif-title-row">
                <span class="notif-title">Pengguna Baru Terdaftar</span>
                <span class="badge badge-muted">Sudah dibaca</span>
            </div>
            <p class="notif-text">
                Akun masyarakat baru atas nama Siti Aminah berhasil melakukan registrasi.
            </p>
            <p class="notif-time">30 Mei 2026, 08:12</p>
        </div>
    </div>
</div>
@endsection