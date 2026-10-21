@extends('layouts.app')

@section('content')
<div class="page-head" style="justify-content:space-between;">
    <div>
        <h1>Notifikasi</h1>
        <p>Informasi terbaru mengenai laporan Anda.</p>
    </div>

    <button class="btn btn-outline btn-sm">
        Tandai Semua Sudah Dibaca
    </button>
</div>

<p style="font-size:12.5px;color:var(--muted);margin-bottom:14px;">
    2 notifikasi belum dibaca
</p>

<div class="notif-item unread">
    <div class="notif-icon" style="background:var(--success-soft);color:var(--success);">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M9 12l2 2 4-4"/>
            <circle cx="12" cy="12" r="9"/>
        </svg>
    </div>

    <div class="notif-body">
        <div class="notif-title-row">
            <span class="notif-title">
                Laporan Anda telah diverifikasi
            </span>
            <span class="badge badge-danger">
                Belum dibaca
            </span>
        </div>
        <p class="notif-text">
            Laporan DBD di Jl. Mawar No. 5 telah diverifikasi oleh tenaga medis dan ditindaklanjuti.
        </p>
        <p class="notif-time">
            01 Jun 2026, 14:32
        </p>
    </div>
</div>

<div class="notif-item unread">
    <div class="notif-icon" style="background:var(--success-soft);color:var(--success);">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M9 12l2 2 4-4"/>
            <circle cx="12" cy="12" r="9"/>
        </svg>
    </div>

    <div class="notif-body">
        <div class="notif-title-row">
            <span class="notif-title">
                Laporan Anda telah diverifikasi
            </span>
            <span class="badge badge-danger">
                Belum dibaca
            </span>
        </div>
        <p class="notif-text">
            Laporan Malaria di Jl. Melati No. 12 telah diverifikasi dan penanganan sedang dilakukan.
        </p>
        <p class="notif-time">
            20 Mei 2026, 09:15
        </p>
    </div>
</div>

<div class="notif-item">
    <div class="notif-icon" style="background:var(--danger-soft);color:var(--primary-dark);">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M18 6L6 18M6 6l12 12"/>
        </svg>
    </div>

    <div class="notif-body">
        <div class="notif-title-row">
            <span class="notif-title">
                Laporan Anda ditolak
            </span>
            <span class="badge badge-muted">
                Sudah dibaca
            </span>
        </div>
        <p class="notif-text">
            Laporan di Kel. Pandean ditolak karena data tidak lengkap. Silakan buat laporan baru.
        </p>
        <p class="notif-time">
            15 Mei 2026, 16:45
        </p>
    </div>
</div>
@endsection