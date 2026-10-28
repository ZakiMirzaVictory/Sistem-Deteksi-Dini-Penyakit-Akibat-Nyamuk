@extends('layouts.app')

@section('content')

<div class="page-head">
    <div>
        <h1>Tambah Pengguna Baru</h1>
        <p>Daftarkan akun pengguna atau admin baru ke dalam sistem.</p>
    </div>
</div>

<div class="card" style="max-width: 600px; padding: 24px;">
    <form action="{{ route('admin.pengguna.store') }}" method="POST">
        @csrf

        <div class="field" style="margin-bottom: 16px;">
            <label style="font-weight: 600; display: block; margin-bottom: 6px;">Nama Lengkap *</label>
            <input type="text" name="nama" value="{{ old('nama') }}" class="form-control" style="width: 100%; padding: 8px; border: 1px solid #cbd5e1; border-radius: 6px;" required>
        </div>

        <div class="field" style="margin-bottom: 16px;">
            <label style="font-weight: 600; display: block; margin-bottom: 6px;">Email *</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" style="width: 100%; padding: 8px; border: 1px solid #cbd5e1; border-radius: 6px;" required>
        </div>

        <div class="field" style="margin-bottom: 16px;">
            <label style="font-weight: 600; display: block; margin-bottom: 6px;">Password *</label>
            <input type="password" name="password" class="form-control" style="width: 100%; padding: 8px; border: 1px solid #cbd5e1; border-radius: 6px;" required>
        </div>

        <div class="field" style="margin-bottom: 16px;">
            <label style="font-weight: 600; display: block; margin-bottom: 6px;">No. HP</label>
            <input type="text" name="no_hp" value="{{ old('no_hp') }}" class="form-control" style="width: 100%; padding: 8px; border: 1px solid #cbd5e1; border-radius: 6px;">
        </div>

        <div class="field" style="margin-bottom: 16px;">
            <label style="font-weight: 600; display: block; margin-bottom: 6px;">Alamat</label>
            <textarea name="alamat" rows="2" class="form-control" style="width: 100%; padding: 8px; border: 1px solid #cbd5e1; border-radius: 6px;">{{ old('alamat') }}</textarea>
        </div>

        <div class="field" style="margin-bottom: 20px;">
    <label style="font-weight: 600; display: block; margin-bottom: 6px;">Role *</label>
    <select name="role" class="form-control" style="width: 100%; padding: 8px; border: 1px solid #cbd5e1; border-radius: 6px;" required>
        <!-- Sesuaikan value dengan format di database Aiven Anda -->
        <option value="user">user</option>
        <option value="admin">admin</option>
    </select>
</div>

        <div style="display: flex; gap: 10px;">
            <button type="submit" class="btn btn-primary">Simpan Pengguna</button>
            <a href="{{ route('admin.pengguna.index') }}" class="btn btn-ghost" style="text-decoration: none; padding: 8px 16px; background: #e2e8f0; border-radius: 6px; color: #334155;">Batal</a>
        </div>
    </form>
</div>

@endsection