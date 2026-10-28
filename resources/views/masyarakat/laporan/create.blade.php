@extends('layouts.app')

@section('content')
<div class="page-head">
    <div>
        <h1>Buat Laporan Baru</h1>
        <p>Laporkan kasus penyakit terkait nyamuk di wilayah Anda.</p>
    </div>
</div>

<div class="card" style="max-width:640px;">
    <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Tanggal -->
    <div>
        <label for="tanggal">Tanggal Kejadian</label>
        <input type="date" id="tanggal" name="tanggal" value="{{ date('Y-m-d') }}" required>
    </div>

    <!-- Lokasi -->
    <div>
        <label for="lokasi">Lokasi</label>
        <input type="text" id="lokasi" name="lokasi" required>
    </div>

    <!-- Gejala -->
    <div>
        <label for="gejala">Gejala</label>
        <input type="text" id="gejala" name="gejala" required>
    </div>

    <!-- Deskripsi -->
    <div>
        <label for="deskripsi">Deskripsi Laporan</label>
        <textarea id="deskripsi" name="deskripsi" rows="4" required></textarea>
    </div>

    <!-- Foto -->
    <div>
        <label for="foto">Unggah Foto (Opsional)</label>
        <input type="file" id="foto" name="foto" accept="image/*">
    </div>

    <button type="submit">Kirim Laporan</button>
</form>
</div>
@endsection