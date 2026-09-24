@if ($page === 'registrasi')

<h1 class="auth-title">Deteksi Dini Penyakit<br>Akibat Nyamuk</h1>

<form>
    <div class="field">
        <label for="nama">Nama Lengkap</label>
        <input id="nama" type="text" placeholder="Masukkan nama lengkap">
    </div>

    <div class="field">
        <label for="email">Email</label>
        <input id="email" type="email" placeholder="nama@email.com">
    </div>

    <div class="field">
        <label for="hp">Nomor HP</label>
        <input id="hp" type="tel" placeholder="08xxxxxxxxxx">
    </div>

    <div class="field">
        <label for="alamat">Alamat</label>
        <input id="alamat" type="text" placeholder="Masukkan alamat lengkap">
    </div>

    <div class="field">
        <label for="password">Password</label>
        <input id="password" type="password" placeholder="Minimal 8 karakter">
    </div>

    <button type="submit" class="btn btn-primary btn-block auth-submit">
        Daftar
    </button>
</form>

<p class="auth-footer">
    Sudah punya akun?
    <a href="{{ url('/') }}">Login</a>
</p>


@elseif ($page === 'login')

<h1 class="auth-title">Deteksi Dini Penyakit<br>Akibat Nyamuk</h1>

<form>
    <div class="field">
        <label for="identitas">Email Atau Nomor HP</label>
        <input id="identitas" type="text" placeholder="nama@email.com">
    </div>

    <div class="field" style="margin-bottom:6px;">
        <label for="password">Password</label>
        <input id="password" type="password" placeholder="Masukkan password">
    </div>

    <div class="field-row">
        <label style="display:flex;align-items:center;gap:6px;margin:0;">
            <input type="checkbox" style="width:auto;">
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
    <a href="{{ url('/register') }}">Daftar</a>
</p>


@elseif ($page === 'dashboard-masyarakat')

<div class="page-head">
    <div>
        <h1>Dashboard Masyarakat</h1>
        <p>Selamat datang kembali! Berikut ringkasan laporan Anda.</p>
    </div>
</div>

<div class="stats-grid">

    <div class="stat-card">
        <div class="stat-top">
            <span class="label">Total Laporan</span>

            <div class="stat-icon" style="background:var(--primary-soft);color:var(--primary);">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2">
                    <path d="M14 3H6a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8z"/>
                </svg>
            </div>
        </div>

        <div class="stat-value">12</div>
        <div class="stat-note">+3 dari bulan lalu</div>
    </div>


    <div class="stat-card">
        <div class="stat-top">
            <span class="label">Laporan Terverifikasi</span>

            <div class="stat-icon" style="background:var(--success-soft);color:var(--success);">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2">
                    <path d="M9 12l2 2 4-4"/>
                    <circle cx="12" cy="12" r="9"/>
                </svg>
            </div>
        </div>

        <div class="stat-value">8</div>
        <div class="stat-note">+2 dari bulan lalu</div>
    </div>


    <div class="stat-card">
        <div class="stat-top">
            <span class="label">Menunggu Verifikasi</span>

            <div class="stat-icon" style="background:var(--warn-soft);color:var(--warn);">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="9"/>
                    <path d="M12 7v5l3 3"/>
                </svg>
            </div>
        </div>

        <div class="stat-value">4</div>
        <div class="stat-note">-1 dari bulan lalu</div>
    </div>


    <div class="stat-card">
        <div class="stat-top">
            <span class="label">Notifikasi Baru</span>

            <div class="stat-icon" style="background:var(--primary-soft);color:var(--primary);">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2">
                    <path d="M18 8a6 6 0 1 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/>
                </svg>
            </div>
        </div>

        <div class="stat-value">2</div>
        <div class="stat-note">Belum dibaca</div>
    </div>

</div>


<div class="content-grid">

    <div style="display:flex;flex-direction:column;gap:18px;">

        <div class="card">
            <h3 style="font-size:14px;margin-bottom:16px;">
                Tren Laporan Bulanan
            </h3>

            <div class="trend">
                <div class="bar" style="height:35%;"><span>Jan</span></div>
                <div class="bar" style="height:22%;"><span>Feb</span></div>
                <div class="bar" style="height:48%;"><span>Mar</span></div>
                <div class="bar" style="height:55%;"><span>Apr</span></div>
                <div class="bar" style="height:70%;"><span>Mei</span></div>
                <div class="bar" style="height:95%;"><span>Jun</span></div>
            </div>
        </div>


        <div class="card">
            <h3 style="font-size:14px;margin-bottom:10px;">
                Laporan Terbaru
            </h3>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Lokasi</th>
                            <th>Penyakit</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>2026-06-03</td>
                            <td>Jl. Merdeka No. 45</td>
                            <td>DBD</td>
                            <td>
                                <span class="badge badge-success">
                                    Terverifikasi
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td>2026-06-02</td>
                            <td>Jl. Sudirman No. 12</td>
                            <td>Malaria</td>
                            <td>
                                <span class="badge badge-warn">
                                    Menunggu
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td>2026-06-01</td>
                            <td>Jl. Gatot Subroto</td>
                            <td>Chikungunya</td>
                            <td>
                                <span class="badge badge-success">
                                    Terverifikasi
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td>2026-05-30</td>
                            <td>Jl. Ahmad Yani No. 78</td>
                            <td>DBD</td>
                            <td>
                                <span class="badge badge-success">
                                    Terverifikasi
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>


    <div class="card">

        <h3 style="font-size:14px;text-align:center;margin-bottom:4px;">
            Profil Pengguna
        </h3>

        <div class="profile-avatar">AH</div>

        <p style="text-align:center;font-weight:600;font-size:13.5px;">
            Ahmad Hidayat
        </p>

        <p style="text-align:center;font-size:11.5px;color:var(--muted);margin-bottom:10px;">
            ahmad.hidayat@email.com
        </p>

        <div class="profile-row">
            <span class="k">Nomor HP</span>
            <span>081234567890</span>
        </div>

        <div class="profile-row">
            <span class="k">Bergabung</span>
            <span>Jan 2026</span>
        </div>

        <div class="profile-row">
            <span class="k">Role</span>
            <span>Masyarakat</span>
        </div>

    </div>

</div>


@elseif ($page === 'buat-laporan')

<div class="page-head">
    <div>
        <h1>Buat Laporan Baru</h1>
        <p>Laporkan kasus penyakit terkait nyamuk di wilayah Anda.</p>
    </div>
</div>

<div class="card" style="max-width:640px;">

    <form>

        <div class="field">
            <label>Lokasi Kejadian *</label>
            <input type="text"
                placeholder="Masukkan alamat lengkap lokasi kejadian">
        </div>

        <div class="field">
            <label>Jenis Penyakit *</label>

            <select>
                <option>Pilih jenis penyakit</option>
                <option>Demam Berdarah Dengue (DBD)</option>
                <option>Malaria</option>
                <option>Chikungunya</option>
            </select>
        </div>

        <div class="field">
            <label>Gejala yang Dialami *</label>

            <textarea rows="3"
                placeholder="Deskripsikan gejala yang dialami (demam, sakit kepala, nyeri otot, dll)"></textarea>
        </div>

        <div class="field">
            <label>Kondisi Lingkungan *</label>

            <textarea rows="3"
                placeholder="Deskripsikan kondisi lingkungan sekitar (genangan air, tempat penampungan air, dll)"></textarea>
        </div>

        <div class="field">
            <label>Foto Pendukung (Opsional)</label>

            <div class="dropzone">
                <svg class="dz-icon" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <path d="M12 16V4M7 9l5-5 5 5"/>
                    <path d="M4 16v3a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-3"/>
                </svg>

                Klik untuk upload atau drag &amp; drop<br>

                <span style="font-size:11px;">
                    PNG, JPG, JPEG (Maks. 5MB)
                </span>
            </div>
        </div>

        <div style="display:flex;gap:10px;margin-top:6px;">
            <button type="submit" class="btn btn-primary">
                Kirim Laporan
            </button>

            <button type="button" class="btn btn-ghost">
                Batal
            </button>
        </div>

    </form>

</div>


@elseif ($page === 'laporan-terverifikasi')

<div class="page-head">
    <div>
        <h1>Laporan Terverifikasi</h1>
        <p>Daftar laporan Anda yang telah diverifikasi oleh tenaga medis.</p>
    </div>
</div>

<div class="card">

    <div class="toolbar">

        <div class="search-box">
            <svg viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="7"/>
                <path d="M21 21l-4.3-4.3"/>
            </svg>

            <input type="text"
                placeholder="Cari laporan berdasarkan lokasi atau penyakit...">
        </div>

        <button class="btn btn-outline btn-sm">
            Filter
        </button>

    </div>


    <div class="table-wrap">

        <table>

            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Lokasi</th>
                    <th>Jenis Penyakit</th>
                    <th>Gejala</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>2026-06-03</td>
                    <td>Jl. Merdeka No. 45</td>
                    <td>DBD</td>
                    <td>Demam tinggi, sakit kepala</td>
                    <td>
                        <span class="badge badge-success">
                            Terverifikasi
                        </span>
                    </td>
                    <td>
                        <a href="#"
                            style="color:var(--primary);font-weight:600;">
                            Detail
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>2026-05-30</td>
                    <td>Jl. Ahmad Yani No. 78</td>
                    <td>DBD</td>
                    <td>Demam, mual, bintik merah</td>
                    <td>
                        <span class="badge badge-success">
                            Terverifikasi
                        </span>
                    </td>
                    <td>
                        <a href="#"
                            style="color:var(--primary);font-weight:600;">
                            Detail
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>2026-05-28</td>
                    <td>Jl. Diponegoro No. 23</td>
                    <td>Malaria</td>
                    <td>Demam berkala, menggigil</td>
                    <td>
                        <span class="badge badge-success">
                            Terverifikasi
                        </span>
                    </td>
                    <td>
                        <a href="#"
                            style="color:var(--primary);font-weight:600;">
                            Detail
                        </a>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</div>


@elseif ($page === 'notifikasi-masyarakat')

<div class="page-head" style="justify-content:space-between;">
    <div>
        <h1>Notifikasi</h1>
        <p>Informasi terbaru mengenai laporan Anda.</p>
    </div>

    <button class="btn btn-outline btn-sm">
        Tandai Semua Sudah Dibaca
    </button>
</div>

<p style="font-size:12.5px;color:var(--muted);margin-bottom:14px;">
    3 notifikasi belum dibaca
</p>


<div class="notif-item unread">

    <div class="notif-icon"
        style="background:var(--success-soft);color:var(--success);">

        <svg width="16" height="16" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2">
            <path d="M9 12l2 2 4-4"/>
            <circle cx="12" cy="12" r="9"/>
        </svg>

    </div>

    <div class="notif-body">

        <div class="notif-title-row">
            <span class="notif-title">
                Laporan Anda telah diverifikasi
            </span>

            <span class="badge badge-danger">
                Belum dibaca
            </span>
        </div>

        <p class="notif-text">
            Laporan DBD di Jl. Mawar No. 5 telah diverifikasi oleh tenaga medis dan ditindaklanjuti.
        </p>

        <p class="notif-time">
            01 Jun 2026, 14:32
        </p>

    </div>

</div>


<div class="notif-item unread">

    <div class="notif-icon"
        style="background:var(--success-soft);color:var(--success);">

        <svg width="16" height="16" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2">
            <path d="M9 12l2 2 4-4"/>
            <circle cx="12" cy="12" r="9"/>
        </svg>

    </div>

    <div class="notif-body">

        <div class="notif-title-row">
            <span class="notif-title">
                Laporan Anda telah diverifikasi
            </span>

            <span class="badge badge-danger">
                Belum dibaca
            </span>
        </div>

        <p class="notif-text">
            Laporan Malaria di Jl. Melati No. 12 telah diverifikasi dan penanganan sedang dilakukan.
        </p>

        <p class="notif-time">
            20 Mei 2026, 09:15
        </p>

    </div>

</div>


<div class="notif-item">

    <div class="notif-icon"
        style="background:var(--danger-soft);color:var(--primary-dark);">

        <svg width="16" height="16" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2">
            <path d="M18 6L6 18M6 6l12 12"/>
        </svg>

    </div>

    <div class="notif-body">

        <div class="notif-title-row">
            <span class="notif-title">
                Laporan Anda ditolak
            </span>

            <span class="badge badge-muted">
                Sudah dibaca
            </span>
        </div>

        <p class="notif-text">
            Laporan di Kel. Pandean ditolak karena data tidak lengkap. Silakan buat laporan baru.
        </p>

        <p class="notif-time">
            15 Mei 2026, 16:45
        </p>

    </div>

</div>


@elseif ($page === 'dashboard-admin')

<div class="page-head">

    <div class="page-head-icon">
        <svg width="18" height="18" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 11l9-7 9 7v9a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1z"/>
        </svg>
    </div>

    <div>
        <h1>Dashboard Admin</h1>
        <p>Selamat datang, Zaki Mirza</p>
    </div>

</div>


<div class="stats-grid">

    <div class="stat-card">
        <span class="label">Total Pengguna</span>
        <div class="stat-value">128</div>
        <div class="stat-note">Terdaftar</div>
    </div>

    <div class="stat-card">
        <span class="label">Total Laporan</span>
        <div class="stat-value">47</div>
        <div class="stat-note">Semua laporan</div>
    </div>

    <div class="stat-card">
        <span class="label">Menunggu Verifikasi</span>
        <div class="stat-value" style="color:var(--warn);">8</div>
        <div class="stat-note">Pending</div>
    </div>

    <div class="stat-card">
        <span class="label">Terverifikasi</span>
        <div class="stat-value" style="color:var(--success);">36</div>
        <div class="stat-note">Diproses</div>
    </div>

</div>


<div class="card">

    <h3 style="font-size:14px;margin-bottom:12px;">
        Laporan Masuk Terbaru
    </h3>

    <div class="table-wrap">

        <table>

            <thead>
                <tr>
                    <th>Pelapor</th>
                    <th>Lokasi</th>
                    <th>Jenis Penyakit</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>Wahyu Zizi</td>
                    <td>Jl. Mawar No. 5</td>
                    <td>DBD</td>
                    <td>01 Jun 2026</td>
                    <td>
                        <span class="badge badge-warn">
                            Pending
                        </span>
                    </td>
                </tr>

                <tr>
                    <td>Budi Santoso</td>
                    <td>Kel. Pandean</td>
                    <td>Malaria</td>
                    <td>31 Mei 2026</td>
                    <td>
                        <span class="badge badge-warn">
                            Pending
                        </span>
                    </td>
                </tr>

                <tr>
                    <td>Siti Aminah</td>
                    <td>Jl. Kenanga</td>
                    <td>Chikungunya</td>
                    <td>30 Mei 2026</td>
                    <td>
                        <span class="badge badge-success">
                            Terverifikasi
                        </span>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</div>


@elseif ($page === 'kelola-pengguna')

<div class="page-head">
    <div>
        <h1>Kelola Pengguna</h1>
        <p>Manajemen data seluruh pengguna sistem.</p>
    </div>
</div>


<div class="card">

    <div class="toolbar">

        <div class="search-box">

            <svg viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="7"/>
                <path d="M21 21l-4.3-4.3"/>
            </svg>

            <input type="text"
                placeholder="Cari berdasarkan nama atau email...">

        </div>

        <button class="btn btn-primary btn-sm">
            + Tambah Pengguna
        </button>

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

                <tr>
                    <td>Wahyu Zizi Febriani</td>
                    <td>wahyu@gmail.com</td>
                    <td>081234567890</td>

                    <td>
                        <span class="badge badge-muted">
                            Masyarakat
                        </span>
                    </td>

                    <td>
                        <a href="#"
                            style="color:var(--primary);font-weight:600;margin-right:12px;">
                            Edit
                        </a>

                        <a href="#"
                            style="color:var(--primary-dark);font-weight:600;">
                            Hapus
                        </a>
                    </td>
                </tr>


                <tr>
                    <td>Muhammad Zidni</td>
                    <td>zidni@gmail.com</td>
                    <td>082345678901</td>

                    <td>
                        <span class="badge badge-muted">
                            Masyarakat
                        </span>
                    </td>

                    <td>
                        <a href="#"
                            style="color:var(--primary);font-weight:600;margin-right:12px;">
                            Edit
                        </a>

                        <a href="#"
                            style="color:var(--primary-dark);font-weight:600;">
                            Hapus
                        </a>
                    </td>
                </tr>


                <tr>
                    <td>Zaki Mirza Victory</td>
                    <td>zaki@pnm.ac.id</td>
                    <td>083456789012</td>

                    <td>
                        <span class="badge badge-success">
                            Admin
                        </span>
                    </td>

                    <td>
                        <a href="#"
                            style="color:var(--primary);font-weight:600;margin-right:12px;">
                            Edit
                        </a>

                        <a href="#"
                            style="color:var(--primary-dark);font-weight:600;">
                            Hapus
                        </a>
                    </td>
                </tr>


                <tr>
                    <td>Budi Santoso</td>
                    <td>budi@gmail.com</td>
                    <td>084567890123</td>

                    <td>
                        <span class="badge badge-muted">
                            Masyarakat
                        </span>
                    </td>

                    <td>
                        <a href="#"
                            style="color:var(--primary);font-weight:600;margin-right:12px;">
                            Edit
                        </a>

                        <a href="#"
                            style="color:var(--primary-dark);font-weight:600;">
                            Hapus
                        </a>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</div>


@elseif ($page === 'verifikasi-laporan')

<div class="page-head">

    <div class="page-head-icon">
        <svg width="18" height="18" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2">
            <path d="M9 12l2 2 4-4"/>
            <rect x="3" y="4" width="18" height="16" rx="2"/>
        </svg>
    </div>

    <div>
        <h1>Verifikasi Laporan</h1>
        <p>Tinjau dan verifikasi laporan dari masyarakat.</p>
    </div>

</div>


<div class="tabs">
    <div class="tab active">Menunggu Verifikasi (8)</div>
    <div class="tab">Terverifikasi (36)</div>
    <div class="tab">Ditolak (3)</div>
</div>


<div class="card" style="margin-bottom:18px;">

    <div class="table-wrap">

        <table>

            <thead>
                <tr>
                    <th>Pelapor</th>
                    <th>Lokasi</th>
                    <th>Jenis Penyakit</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>Wahyu Zizi</td>
                    <td>Jl. Mawar No. 5</td>
                    <td>DBD</td>
                    <td>01 Jun 2026</td>

                    <td>
                        <button class="btn btn-outline btn-sm"
                            style="border-color:var(--success);color:var(--success);margin-right:6px;">
                            Verifikasi
                        </button>

                        <button class="btn btn-outline btn-sm"
                            style="border-color:var(--primary-dark);color:var(--primary-dark);">
                            Tolak
                        </button>
                    </td>
                </tr>


                <tr>
                    <td>Budi Santoso</td>
                    <td>Kel. Pandean</td>
                    <td>Malaria</td>
                    <td>31 Mei 2026</td>

                    <td>
                        <button class="btn btn-outline btn-sm"
                            style="border-color:var(--success);color:var(--success);margin-right:6px;">
                            Verifikasi
                        </button>

                        <button class="btn btn-outline btn-sm"
                            style="border-color:var(--primary-dark);color:var(--primary-dark);">
                            Tolak
                        </button>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</div>


<div class="card" style="max-width:640px;">

    <h3 style="font-size:14.5px;margin-bottom:4px;">
        Detail Laporan — Wahyu Zizi
    </h3>


    <div class="detail-grid">

        <div class="detail-item">
            <div class="k">PELAPOR</div>
            <div class="v">Wahyu Zizi</div>
        </div>

        <div class="detail-item">
            <div class="k">TANGGAL</div>
            <div class="v">01 Juni 2026</div>
        </div>

        <div class="detail-item">
            <div class="k">LOKASI</div>
            <div class="v">Jl. Mawar No. 5, Madiun</div>
        </div>

        <div class="detail-item">
            <div class="k">JENIS PENYAKIT</div>
            <div class="v">DBD</div>
        </div>

    </div>


    <div class="detail-item" style="margin-bottom:14px;">

        <div class="k">GEJALA</div>

        <div class="v">
            Demam tinggi 39°C, nyeri sendi, bintik merah di kulit
        </div>

    </div>


    <div class="field">

        <label>Tindakan Penanganan</label>

        <textarea rows="3"
            placeholder="Isi tindakan penanganan yang dilakukan..."></textarea>

    </div>


    <div style="display:flex;gap:10px;">

        <button class="btn btn-primary">
            Verifikasi Laporan
        </button>

        <button class="btn btn-ghost">
            Tolak Laporan
        </button>

    </div>

</div>


@elseif ($page === 'notifikasi-admin')

<div class="page-head" style="justify-content:space-between;">

    <div>
        <h1>Notifikasi</h1>
        <p>Pemberitahuan laporan baru dan aktivitas sistem.</p>
    </div>

    <button class="btn btn-outline btn-sm">
        Tandai Semua Sudah Dibaca
    </button>

</div>


<p style="font-size:12.5px;color:var(--muted);margin-bottom:14px;">
    2 notifikasi belum dibaca
</p>


<div class="notif-item unread">

    <div class="notif-icon"
        style="background:var(--warn-soft);color:var(--warn);">

        <svg width="16" height="16" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 7v5l3 3"/>
        </svg>

    </div>

    <div class="notif-body">

        <div class="notif-title-row">

            <span class="notif-title">
                Laporan Baru Menunggu Verifikasi
            </span>

            <span class="badge badge-danger">
                Belum dibaca
            </span>

        </div>

        <p class="notif-text">
            Wahyu Zizi melaporkan kasus DBD di Jl. Mawar No. 5 — memerlukan verifikasi Anda.
        </p>

        <p class="notif-time">
            01 Jun 2026, 14:20
        </p>

    </div>

</div>


<div class="notif-item unread">

    <div class="notif-icon"
        style="background:var(--warn-soft);color:var(--warn);">

        <svg width="16" height="16" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 7v5l3 3"/>
        </svg>

    </div>

    <div class="notif-body">

        <div class="notif-title-row">

            <span class="notif-title">
                Laporan Baru Menunggu Verifikasi
            </span>

            <span class="badge badge-danger">
                Belum dibaca
            </span>

        </div>

        <p class="notif-text">
            Budi Santoso melaporkan kasus Malaria di Kel. Pandean — memerlukan verifikasi Anda.
        </p>

        <p class="notif-time">
            31 Mei 2026, 10:05
        </p>

    </div>

</div>


<div class="notif-item">

    <div class="notif-icon"
        style="background:var(--success-soft);color:var(--success);">

        <svg width="16" height="16" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
        </svg>

    </div>

    <div class="notif-body">

        <div class="notif-title-row">

            <span class="notif-title">
                Pengguna Baru Terdaftar
            </span>

            <span class="badge badge-muted">
                Sudah dibaca
            </span>

        </div>

        <p class="notif-text">
            Akun masyarakat baru atas nama Siti Aminah berhasil melakukan registrasi.
        </p>

        <p class="notif-time">
            30 Mei 2026, 08:12
        </p>

    </div>

</div>

@endif