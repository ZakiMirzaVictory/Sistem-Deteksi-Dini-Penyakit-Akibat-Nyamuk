@extends('layouts.app')

@section('content')

<div class="page-head">
    <div>
        <h1>Kelola Pengguna</h1>
        <p>Manajemen data seluruh pengguna sistem.</p>
    </div>
</div>

<div class="card">

    <div class="toolbar">
        <div class="search-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="7"/>
                <path d="M21 21l-4.3-4.3"/>
            </svg>
            <input type="text" placeholder="Cari berdasarkan nama atau email...">
        </div>

        <a href="{{ route('admin.pengguna.create') }}" class="btn btn-primary btn-sm" style="text-decoration: none;">
    + Tambah Pengguna
        </a>
    </div>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. HP</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Perulangan data dari database Aiven -->
                @forelse($data_pengguna as $pengguna)
                <tr>
                    <td>{{ $pengguna->nama }}</td>
                    <td>{{ $pengguna->email }}</td>
                    <td>{{ $pengguna->no_hp ?? '-' }}</td>
                    <td>
                        @if($pengguna->role == 'admin')
                            <span class="badge badge-success">Admin</span>
                        @else
                            <span class="badge badge-muted">Masyarakat</span>
                        @endif
                    </td>
                    <td>
                    <!-- Tombol Edit -->
                    <a href="{{ route('admin.pengguna.edit', $pengguna->id_user) }}" style="color:var(--primary);font-weight:600;margin-right:12px;">
                        Edit
                    </a>

                    <!-- Tombol Hapus (Menggunakan Form DELETE agar aman) -->
                    <form action="{{ route('admin.pengguna.destroy', $pengguna->id_user) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus pengguna ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background:none; border:none; color:var(--primary-dark); font-weight:600; cursor:pointer; padding:0;">
                            Hapus
                        </button>
                    </form>
                   </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" style="text-align: center; color: #64748b; padding: 20px;">
                        Belum ada data pengguna di database.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection