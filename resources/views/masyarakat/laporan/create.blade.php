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

        <div class="field">
            <label for="lokasi">Lokasi Kejadian *</label>
            <input type="text" id="lokasi" name="lokasi" placeholder="Masukkan alamat lengkap lokasi kejadian" required>
        </div>

        <div class="field">
            <label for="jenis_penyakit">Jenis Penyakit *</label>
            <select id="jenis_penyakit" name="jenis_penyakit" required>
                <option value="">Pilih jenis penyakit</option>
                <option value="DBD">Demam Berdarah Dengue (DBD)</option>
                <option value="Malaria">Malaria</option>
                <option value="Chikungunya">Chikungunya</option>
            </select>
        </div>

        <div class="field">
            <label for="gejala">Gejala yang Dialami *</label>
            <textarea id="gejala" name="gejala" rows="3" placeholder="Deskripsikan gejala yang dialami" required></textarea>
        </div>

        <div class="field">
            <label for="kondisi_lingkungan">Kondisi Lingkungan *</label>
            <textarea id="kondisi_lingkungan" name="kondisi_lingkungan" rows="3" placeholder="Deskripsikan kondisi lingkungan sekitar" required></textarea>
        </div>

        <div class="field">
            <label for="foto">Foto Pendukung (Opsional)</label>
            <input type="file" id="foto" name="foto" accept="image/png, image/jpeg, image/jpg">
        </div>

        <div style="display:flex;gap:10px;margin-top:6px;">
            <button type="submit" class="btn btn-primary">Kirim Laporan</button>
            <a href="{{ route('masyarakat.dashboard') }}" class="btn btn-ghost">Batal</a>
        </div>
    </form>
</div>
@endsection