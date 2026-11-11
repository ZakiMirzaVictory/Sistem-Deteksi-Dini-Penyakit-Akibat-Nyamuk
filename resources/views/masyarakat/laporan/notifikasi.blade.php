@extends('layouts.app')

@section('content')
<div class="page-head" style="justify-content:space-between;">
    <div>
        <h1>Notifikasi</h1>
        <p>Informasi terbaru mengenai laporan Anda.</p>
    </div>

    <!-- FITUR: Tandai Semua Sudah Dibaca -->
    <form action="{{ route('masyarakat.notifikasi.read_all') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-outline btn-sm">
            Tandai Semua Sudah Dibaca
        </button>
    </form>
</div>

<!-- Menampilkan jumlah notifikasi yang belum dibaca -->
<p style="font-size:12.5px;color:var(--muted);margin-bottom:14px;">
    {{ $jumlahBelumDibaca }} notifikasi belum dibaca
</p>

<!-- Looping Data Notifikasi -->
@forelse($notifikasi as $notif)
    <div class="notif-item {{ $notif->status == 'belum_dibaca' ? 'unread' : '' }}">
        
        <!-- Icon dinamis berdasarkan isi pesan atau status -->
        @if(str_contains(strtolower($notif->pesan), 'ditolak'))
            <div class="notif-icon" style="background:var(--danger-soft);color:var(--primary-dark);">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 6L6 18M6 6l12 12"/>
                </svg>
            </div>
        @else
            <div class="notif-icon" style="background:var(--success-soft);color:var(--success);">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 12l2 2 4-4"/>
                    <circle cx="12" cy="12" r="9"/>
                </svg>
            </div>
        @endif

        <div class="notif-body">
            <div class="notif-title-row">
                <span class="notif-title">
                    {{ str_contains(strtolower($notif->pesan), 'ditolak') ? 'Laporan Anda ditolak' : 'Laporan Anda telah diverifikasi' }}
                </span>
                
                <!-- Badge status dibaca / belum -->
                @if($notif->status == 'belum_dibaca')
                    <span class="badge badge-danger">Belum dibaca</span>
                @else
                    <span class="badge badge-muted">Sudah dibaca</span>
                @endif
            </div>
            
            <p class="notif-text">
                {{ $notif->pesan }}
            </p>
            
            <p class="notif-time">
                {{ \Carbon\Carbon::parse($notif->tanggal)->translatedFormat('d M Y') }}
                @if($notif->created_at)
                    , {{ $notif->created_at->format('H:i') }}
                @endif
            </p>
        </div>
    </div>
@empty
    <!-- Tampilan jika tabel notifikasi kosong -->
    <div style="text-align: center; padding: 20px; color: var(--muted);">
        Belum ada notifikasi saat ini.
    </div>
@endforelse

@endsection