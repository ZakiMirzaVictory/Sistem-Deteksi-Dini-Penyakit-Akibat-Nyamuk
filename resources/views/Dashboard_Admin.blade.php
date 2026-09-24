<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard Admin — Deteksi Dini Nyamuk</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/styles.css">
</head>
<body>
<div class="app-shell">
 
  <aside class="sidebar">
    <div class="brand">
      <div class="brand-icon">
        <svg viewBox="0 0 48 48" width="30" height="30" fill="none">
          <path d="M24 3 L43 10 V22 C43 33 35 41 24 45 C13 41 5 33 5 22 V10 Z" stroke="#e12727" stroke-width="3"/>
          <ellipse cx="24" cy="23" rx="4.5" ry="6.5" fill="#e12727"/>
          <circle cx="24" cy="16" r="2.6" fill="#e12727"/>
        </svg>
      </div>
      <div class="brand-text">
        <div class="brand-title">Deteksi Nyamuk</div>
        <div class="brand-sub">Portal Admin</div>
      </div>
    </div>
 
    <div class="nav-label">MENU</div>
    <a class="nav-item active" href="dashboard-admin.html">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 11l9-7 9 7v9a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1z"/></svg>
      Dashboard
    </a>
    <a class="nav-item" href="kelola-pengguna.html">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
      Kelola Pengguna
    </a>
    <a class="nav-item" href="verifikasi-laporan.html">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><rect x="3" y="4" width="18" height="16" rx="2"/></svg>
      Verifikasi Laporan
    </a>
    <a class="nav-item" href="notifikasi-admin.html">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8a6 6 0 1 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.7 21a2 2 0 0 1-3.4 0"/></svg>
      Notifikasi
    </a>
 
    <div class="sidebar-footer">
      <a class="nav-item" href="login.html">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><path d="M16 17l5-5-5-5M21 12H9"/></svg>
        Keluar
      </a>
    </div>
  </aside>
 
  <main class="main">
    <div class="page-head">
      <div class="page-head-icon">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 11l9-7 9 7v9a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1z"/></svg>
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
      <h3 style="font-size:14px;margin-bottom:12px;">Laporan Masuk Terbaru</h3>
      <div class="table-wrap">
        <table>
          <thead><tr><th>Pelapor</th><th>Lokasi</th><th>Jenis Penyakit</th><th>Tanggal</th><th>Status</th></tr></thead>
          <tbody>
            <tr><td>Wahyu Zizi</td><td>Jl. Mawar No. 5</td><td>DBD</td><td>01 Jun 2026</td><td><span class="badge badge-warn">Pending</span></td></tr>
            <tr><td>Budi Santoso</td><td>Kel. Pandean</td><td>Malaria</td><td>31 Mei 2026</td><td><span class="badge badge-warn">Pending</span></td></tr>
            <tr><td>Siti Aminah</td><td>Jl. Kenanga</td><td>Chikungunya</td><td>30 Mei 2026</td><td><span class="badge badge-success">Terverifikasi</span></td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>
</div>
</body>
</html>