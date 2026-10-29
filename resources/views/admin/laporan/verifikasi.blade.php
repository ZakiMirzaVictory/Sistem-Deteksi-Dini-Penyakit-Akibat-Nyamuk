@extends('layouts.app')

@section('content')

<div class="page-head">
    <div>
        <h1>Verifikasi Laporan</h1>
        <p>Tinjau dan verifikasi laporan atau kasus penyakit dari masyarakat.</p>
    </div>
</div>

<div class="card">
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Pelapor</th>
                    <th>Tanggal</th>
                    <th>Lokasi</th>
                    <th>Gejala & Deskripsi</th>
                    <th>Foto Pendukung</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($laporan as $item)
                <tr>
                    <!-- Nama Pelapor (mengambil dari relasi user) -->
                    <td>{{ $item->user->nama ?? 'Masyarakat' }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->lokasi }}</td>
                    <td>
                        <strong>Gejala:</strong> {{ $item->gejala }}<br>
                        <small style="color: #64748b;">{{ $item->deskripsi }}</small>
                    </td>
                    <td>
                        @if($item->foto)
                            <a href="{{ asset('storage/' . $item->foto) }}" target="_blank">
                                <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto Laporan" style="width: 60px; height: 60px; object-fit: cover; border-radius: 6px;">
                            </a>
                        @else
                            <span style="color: #94a3b8; font-size: 0.85rem;">Tidak ada foto</span>
                        @endif
                    </td>
                    <td>
                        @if($item->status == 'terverifikasi')
                            <span class="badge" style="background: #dcfce7; color: #166534; padding: 4px 8px; border-radius: 4px; font-weight: 600;">Terverifikasi</span>
                        @elseif($item->status == 'ditolak')
                            <span class="badge" style="background: #fee2e2; color: #991b1b; padding: 4px 8px; border-radius: 4px; font-weight: 600;">Ditolak</span>
                        @else
                            <span class="badge" style="background: #fef9c3; color: #854d0e; padding: 4px 8px; border-radius: 4px; font-weight: 600;">Pending</span>
                        @endif
                    </td>
                    <td>
                        <div style="display: flex; gap: 6px;">
                            <!-- Tombol Verifikasi (Terima) -->
                            <form action="{{ route('admin.laporan.status', $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="terverifikasi">
                                <button type="submit" class="btn btn-sm" style="background: #16a34a; color: white; border: none; padding: 6px 12kpx; border-radius: 4px; cursor: pointer;">Terima</button>
                            </form>

                            <!-- Tombol Tolak -->
                            <form action="{{ route('admin.laporan.status', $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="ditolak">
                                <button type="submit" class="btn btn-sm" style="background: #dc2626; color: white; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer;">Tolak</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="text-align: center; color: #64748b; padding: 20px;">
                        Belum ada laporan masuk dari masyarakat.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection