@extends('layouts.app')

@section('content')
<div class="page-head">
    <div>
        <h1>Laporan Terverifikasi</h1>
        <p>Daftar laporan Anda yang telah diverifikasi oleh tenaga medis.</p>
    </div>
</div>

<div class="card p-4">
    <!-- Baris Pencarian (Opsional, Biarkan Statis Dulu Sesuai Desain) -->
    <div class="d-flex justify-content-between mb-4">
        <div class="input-group" style="max-width: 600px;">
            <span class="input-group-text bg-light border-end-0"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control border-start-0 bg-light" placeholder="Cari laporan berdasarkan lokasi atau penyakit...">
        </div>
        <button class="btn btn-outline-danger px-4 rounded-pill">Filter</button>
    </div>

    <!-- Tabel Dinamis -->
    <div class="table-responsive">
        <table class="table table-borderless align-middle" style="width: 100%;">
            <thead style="border-bottom: 1px solid #eaeaea;">
                <tr>
                    <th class="text-muted pb-3" style="font-weight: 500;">Tanggal</th>
                    <th class="text-muted pb-3" style="font-weight: 500;">Lokasi</th>
                    <th class="text-muted pb-3" style="font-weight: 500;">Jenis Penyakit</th>
                    <th class="text-muted pb-3" style="font-weight: 500;">Gejala</th>
                    <th class="text-muted pb-3" style="font-weight: 500;">Status</th>
                    <th class="text-muted pb-3" style="font-weight: 500;"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($laporan as $item)
                <tr style="border-bottom: 1px solid #f4f4f4;">
                    <!-- Format Tanggal -->
                    <td class="py-3">{{ \Carbon\Carbon::parse($item->tanggal)->format('Y-m-d') }}</td>
                    
                    <td class="py-3">{{ $item->lokasi }}</td>
                    
                    <!-- Menggunakan deskripsi karena tidak ada kolom jenis_penyakit di migrasi Anda -->
                    <td class="py-3">{{ \Illuminate\Support\Str::limit($item->deskripsi, 20) }}</td>
                    
                    <td class="py-3">{{ \Illuminate\Support\Str::limit($item->gejala, 40) }}</td>
                    
                    <td class="py-3">
                        <span class="badge" style="background: #e6f8ec; color: #15803d; padding: 6px 12px; border-radius: 20px; font-weight: 500;">
                            Terverifikasi
                        </span>
                    </td>
                    
                    <!-- Arahkan ke route detail laporan (sesuaikan jika route-nya berbeda) -->
                    <td class="py-3 text-end">
                        <a href="#" style="color: #dc2626; text-decoration: none; font-weight: 600;">Detail</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center py-4 text-muted">
                        Belum ada laporan yang diverifikasi.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection