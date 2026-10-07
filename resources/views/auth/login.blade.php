@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="login-card">
    <h2>Login System</h2>

    {{-- Menampilkan Error Session dari Controller --}}
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('login.perform') }}" method="POST">
        @csrf {{-- Wajib untuk proteksi CSRF --}}

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="{{ old('username') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <button type="submit" class="btn-login">Masuk</button>
    </form>
</div>
@endsection