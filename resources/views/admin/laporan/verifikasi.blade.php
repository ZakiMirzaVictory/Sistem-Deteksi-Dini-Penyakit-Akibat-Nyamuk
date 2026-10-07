@extends('layouts.app')

@section('content')
<div class="page-head">
    <div class="page-head-icon">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><rect x="3" y="4" width="18" height="16" rx="2"/></svg>
    </div>
    <div>
        <h1>Verifikasi Laporan</h1>
        <p>Tinjau dan verifikasi laporan dari masyarakat.</p>
    </div>
</div>

<div class="tabs">
    <div class="tab active">Menunggu Verifikasi (8)</div>
    <div class="tab">Terverifikasi (36)</div>
    <div class="tab">Ditolak (3)</div>
</div>

<div class="card" style="margin-bottom:18px;">
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Pelapor</th>
                    <th>Lokasi</th>
                    <th>Jenis Penyakit</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Wahyu Zizi</td>
                    <td>Jl. Mawar No. 5</td>
                    <td>DBD</td>
                    <td>01 Jun 2026</td>
                    <td>
                        <form action="{{ route('admin.laporan.proses', 1) }}" method="POST" style="display:inline;">
                            @csrf
                            <input type="hidden" name="status" value="verifikasi">
                            <button type="submit" class="btn btn-outline btn-sm" style="border-color:var(--success);color:var(--success);margin-right:6px;">Verifikasi</button>
                        </form>
                        <form action="{{ route('admin.laporan.proses', 1) }}" method="POST" style="display:inline;">
                            @csrf
                            <input type="hidden" name="status" value="tolak">
                            <button type="submit" class="btn btn-outline btn-sm" style="border-color:var(--primary-dark);color:var(--primary-dark);">Tolak</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection