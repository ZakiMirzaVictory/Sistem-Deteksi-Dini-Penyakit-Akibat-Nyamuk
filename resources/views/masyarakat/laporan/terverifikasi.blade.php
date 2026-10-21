@extends('layouts.app')

@section('content')
<div class="page-head">
    <div>
        <h1>Laporan Terverifikasi</h1>
        <p>Daftar laporan Anda yang telah diverifikasi oleh tenaga medis.</p>
    </div>
</div>

<div class="card">
    <div class="toolbar">
        <div class="search-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="7"/>
                <path d="M21 21l-4.3-4.3"/>
            </svg>
            <input type="text" placeholder="Cari laporan berdasarkan lokasi atau penyakit...">
        </div>
        <button class="btn btn-outline btn-sm">
            Filter
        </button>
    </div>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Lokasi</th>
                    <th>Jenis Penyakit</th>
                    <th>Gejala</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2026-06-03</td>
                    <td>Jl. Merdeka No. 45</td>
                    <td>DBD</td>
                    <td>Demam tinggi, sakit kepala</td>
                    <td>
                        <span class="badge badge-success">
                            Terverifikasi
                        </span>
                    </td>
                    <td>
                        <a href="#" style="color:var(--primary);font-weight:600;">
                            Detail
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2026-05-30</td>
                    <td>Jl. Ahmad Yani No. 78</td>
                    <td>DBD</td>
                    <td>Demam, mual, bintik merah</td>
                    <td>
                        <span class="badge badge-success">
                            Terverifikasi
                        </span>
                    </td>
                    <td>
                        <a href="#" style="color:var(--primary);font-weight:600;">
                            Detail
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2026-05-28</td>
                    <td>Jl. Diponegoro No. 23</td>
                    <td>Malaria</td>
                    <td>Demam berkala, menggigil</td>
                    <td>
                        <span class="badge badge-success">
                            Terverifikasi
                        </span>
                    </td>
                    <td>
                        <a href="#" style="color:var(--primary);font-weight:600;">
                            Detail
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection