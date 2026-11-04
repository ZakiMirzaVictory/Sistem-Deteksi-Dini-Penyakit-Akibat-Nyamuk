@extends('layouts.auth')

@section('content')
<h1 class="auth-title">Deteksi Dini Penyakit<br>Akibat Nyamuk</h1>

<!-- Menampilkan semua error di bagian atas form -->
@if ($errors->any())
    <div style="color: red; background-color: #fee2e2; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
        <ul style="margin: 0; padding-left: 20px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger" style="color:red; margin-bottom:12px;">
        {{ session('error') }}
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success" style="color:green; margin-bottom:12px;">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('login.perform') }}" method="POST">
    @csrf

    <div class="field">
        <label for="identitas">Email Atau Nomor HP</label>
        <input id="identitas" name="identitas" type="text" placeholder="nama@email.com" value="{{ old('identitas') }}" required>
    </div>

    <div class="field" style="margin-bottom:6px;">
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Masukkan password" required>
    </div>

    <div class="field-row">
        <label style="display:flex;align-items:center;gap:6px;margin:0;">
            <input type="checkbox" name="remember" style="width:auto;">
            Ingat saya
        </label>
        <a href="#">Lupa password?</a>
    </div>

    <button type="submit" class="btn btn-primary btn-block auth-submit">
        Login
    </button>
</form>

<p class="auth-footer">
    Belum punya akun?
    <a href="{{ route('register') }}">Daftar</a>
</p>
@endsection