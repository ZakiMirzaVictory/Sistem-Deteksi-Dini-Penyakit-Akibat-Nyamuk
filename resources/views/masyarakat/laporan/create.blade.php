@extends('layouts.app')

@section('content')
<div class="page-head">
    <div>
        <h1>Buat Laporan Baru</h1>
        <p>Laporkan kasus penyakit terkait nyamuk di wilayah Anda.</p>
    </div>
</div>

<form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="field">
            <label for="tanggal">Tanggal Kejadian *</label>
            <input type="date" id="tanggal" name="tanggal" value="{{ date('Y-m-d') }}" required>
        </div>

        <div class="field">
            <label for="lokasi">Lokasi Kejadian *</label>
            <input type="text" id="lokasi" name="lokasi" placeholder="Masukkan alamat lengkap lokasi kejadian" required>
        </div>

        <div class="field">
            <label for="gejala">Gejala yang Dialami *</label>
            <textarea id="gejala" name="gejala" rows="3" placeholder="Contoh: Demam tinggi, bintik merah, pusing" required></textarea>
        </div>

        <div class="field">
            <label for="deskripsi">Deskripsi & Kondisi Lingkungan *</label>
            <textarea id="deskripsi" name="deskripsi" rows="4" placeholder="Jelaskan jenis penyakit yang dicurigai dan kondisi lingkungan sekitar (misal: genangan air, selokan mampet)" required></textarea>
        </div>

        <div class="field">
            <label for="foto">Foto Pendukung (Opsional)</label>
            <input type="file" id="foto" name="foto" accept="image/png, image/jpeg, image/jpg">
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Kirim Laporan</button>
            <a href="{{ route('masyarakat.dashboard') }}" class="btn btn-ghost">Batal</a>
        </div>
    </form>
</div>
@endsection