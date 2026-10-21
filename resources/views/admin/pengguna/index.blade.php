@extends('layouts.app')

@section('content')
<div class="page-head">
    <div class="page-head-icon">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M9 12l2 2 4-4"/>
            <rect x="3" y="4" width="18" height="16" rx="2"/>
        </svg>
    </div>
    <div>
        <h1>Verifikasi Laporan</h1>
        <p>Tinjau dan verifikasi laporan dari masyarakat.</p>
    </div>
</div>

<div class="tabs">
    <a href="#" class="tab active">Menunggu Verifikasi (8)</a>
    <a href="#" class="tab">Terverifikasi (36)</a>
    <a href="#" class="tab">Ditolak (3)</a>
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
                        <button type="button" class="btn btn-outline btn-sm" style="border-color:var(--success);color:var(--success);margin-right:6px;">
                            Verifikasi
                        </button>
                        <button type="button" class="btn btn-outline btn-sm" style="border-color:var(--primary-dark);color:var(--primary-dark);">
                            Tolak
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Budi Santoso</td>
                    <td>Kel. Pandean</td>
                    <td>Malaria</td>
                    <td>31 Mei 2026</td>
                    <td>
                        <button type="button" class="btn btn-outline btn-sm" style="border-color:var(--success);color:var(--success);margin-right:6px;">
                            Verifikasi
                        </button>
                        <button type="button" class="btn btn-outline btn-sm" style="border-color:var(--primary-dark);color:var(--primary-dark);">
                            Tolak
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="card" style="max-width:640px;">
    <h3 style="font-size:14.5px;margin-bottom:12px;">
        Detail Laporan — Wahyu Zizi
    </h3>

    <div class="detail-grid">
        <div class="detail-item">
            <div class="k">PELAPOR</div>
            <div class="v">Wahyu Zizi</div>
        </div>
        <div class="detail-item">
            <div class="k">TANGGAL</div>
            <div class="v">01 Juni 2026</div>
        </div>
        <div class="detail-item">
            <div class="k">LOKASI</div>
            <div class="v">Jl. Mawar No. 5, Madiun</div>
        </div>
        <div class="detail-item">
            <div class="k">JENIS PENYAKIT</div>
            <div class="v">DBD</div>
        </div>
    </div>

    <div class="detail-item" style="margin-bottom:14px;">
        <div class="k">GEJALA</div>
        <div class="v">
            Demam tinggi 39°C, nyeri sendi, bintik merah di kulit
        </div>
    </div>

    <div class="field">
        <label for="tindakan">Tindakan Penanganan</label>
        <textarea id="tindakan" rows="3" placeholder="Isi tindakan penanganan yang dilakukan..."></textarea>
    </div>

    <div style="display:flex;gap:10px;">
        <button type="button" class="btn btn-primary">
            Verifikasi Laporan
        </button>
        <button type="button" class="btn btn-ghost">
            Tolak Laporan
        </button>
    </div>
</div>
@endsection