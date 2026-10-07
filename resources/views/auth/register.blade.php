@extends('layouts.auth')

@section('content')
<h1 class="auth-title">Deteksi Dini Penyakit<br>Akibat Nyamuk</h1>

<form action="{{ route('register.perform') }}" method="POST">
    @csrf

    <div class="field">
        <label for="nama">Nama Lengkap</label>
        <input id="nama" name="nama" type="text" placeholder="Masukkan nama lengkap" value="{{ old('nama') }}" required>
    </div>

    <div class="field">
        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="nama@email.com" value="{{ old('email') }}" required>
    </div>

    <div class="field">
        <label for="no_hp">Nomor HP</label>
        <input id="no_hp" name="no_hp" type="tel" placeholder="08xxxxxxxxxx" value="{{ old('no_hp') }}" required>
    </div>

    <div class="field">
        <label for="alamat">Alamat</label>
        <input id="alamat" name="alamat" type="text" placeholder="Masukkan alamat lengkap" value="{{ old('alamat') }}" required>
    </div>

    <div class="field">
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Minimal 8 karakter" required>
    </div>

    <button type="submit" class="btn btn-primary btn-block auth-submit">
        Daftar
    </button>
</form>

<p class="auth-footer">
    Sudah punya akun?
    <a href="{{ route('login') }}">Login</a>
</p>
@endsection