@extends('layouts.app')

@section('content')

<div class="page-head">
    <div>
        <h1>Edit Pengguna</h1>
        <p>Perbarui informasi data pengguna sistem.</p>
    </div>
</div>

<div class="card" style="max-width: 600px; padding: 24px;">
    <form action="{{ route('admin.pengguna.update', $pengguna->id_user) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="field" style="margin-bottom: 16px;">
            <label style="font-weight: 600; display: block; margin-bottom: 6px;">Nama Lengkap</label>
            <input type="text" name="nama" value="{{ old('nama', $pengguna->nama) }}" class="form-control" style="width: 100%; padding: 8px; border: 1px solid #cbd5e1; border-radius: 6px;" required>
        </div>

        <div class="field" style="margin-bottom: 16px;">
            <label style="font-weight: 600; display: block; margin-bottom: 6px;">Email</label>
            <input type="email" name="email" value="{{ old('email', $pengguna->email) }}" class="form-control" style="width: 100%; padding: 8px; border: 1px solid #cbd5e1; border-radius: 6px;" required>
        </div>

        <div class="field" style="margin-bottom: 16px;">
            <label style="font-weight: 600; display: block; margin-bottom: 6px;">No. HP</label>
            <input type="text" name="no_hp" value="{{ old('no_hp', $pengguna->no_hp) }}" class="form-control" style="width: 100%; padding: 8px; border: 1px solid #cbd5e1; border-radius: 6px;">
        </div>

        <div class="field" style="margin-bottom: 20px;">
            <label style="font-weight: 600; display: block; margin-bottom: 6px;">Role</label>
            <select name="role" class="form-control" style="width: 100%; padding: 8px; border: 1px solid #cbd5e1; border-radius: 6px;" required>
                <option value="masyarakat" {{ $pengguna->role == 'masyarakat' ? 'selected' : '' }}>Masyarakat</option>
                <option value="admin" {{ $pengguna->role == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>

        <div style="display: flex; gap: 10px;">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('admin.pengguna.index') }}" class="btn btn-ghost" style="text-decoration: none; padding: 8px 16px; background: #e2e8f0; border-radius: 6px; color: #334155;">Batal</a>
        </div>
    </form>
</div>

@endsection