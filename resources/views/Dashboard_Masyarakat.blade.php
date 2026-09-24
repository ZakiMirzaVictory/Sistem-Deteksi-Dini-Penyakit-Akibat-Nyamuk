<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard Masyarakat — Deteksi Dini Nyamuk</title>
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
        <div class="brand-sub">Portal Masyarakat</div>
      </div>
    </div>
 
    <a class="nav-item active" href="dashboard-masyarakat.html">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 11l9-7 9 7v9a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1z"/></svg>
      Dashboard
    </a>
    <a class="nav-item" href="buat-laporan.html">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 3H6a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8z"/><path d="M14 3v5h5M9 13h6M9 17h6"/></svg>
      Buat Laporan
    </a>
    <a class="nav-item" href="laporan-terverifikasi.html">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>
      Laporan Terverifikasi
    </a>
    <a class="nav-item" href="notifikasi-masyarakat.html">
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
      <div>
        <h1>Dashboard Masyarakat</h1>
        <p>Selamat datang kembali! Berikut ringkasan laporan Anda.</p>
      </div>
    </div>
 
    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-top"><span class="label">Total Laporan</span>
          <div class="stat-icon" style="background:var(--primary-soft);color:var(--primary);">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 3H6a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8z"/></svg>
          </div>
        </div>
        <div class="stat-value">12</div>
        <div class="stat-note">+3 dari bulan lalu</div>
      </div>
 
      <div class="stat-card">
        <div class="stat-top"><span class="label">Laporan Terverifikasi</span>
          <div class="stat-icon" style="background:var(--success-soft);color:var(--success);">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>
          </div>
        </div>
        <div class="stat-value">8</div>
        <div class="stat-note">+2 dari bulan lalu</div>
      </div>
 
      <div class="stat-card">
        <div class="stat-top"><span class="label">Menunggu Verifikasi</span>
          <div class="stat-icon" style="background:var(--warn-soft);color:var(--warn);">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
          </div>
        </div>
        <div class="stat-value">4</div>
        <div class="stat-note">-1 dari bulan lalu</div>
      </div>
 
      <div class="stat-card">
        <div class="stat-top"><span class="label">Notifikasi Baru</span>
          <div class="stat-icon" style="background:var(--primary-soft);color:var(--primary);">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8a6 6 0 1 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/></svg>
          </div>
        </div>
        <div class="stat-value">2</div>
        <div class="stat-note">Belum dibaca</div>
      </div>
    </div>
 
    <div class="content-grid">
      <div style="display:flex;flex-direction:column;gap:18px;">
        <div class="card">
          <h3 style="font-size:14px;margin-bottom:16px;">Tren Laporan Bulanan</h3>
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
          <h3 style="font-size:14px;margin-bottom:10px;">Laporan Terbaru</h3>
          <div class="table-wrap">
            <table>
              <thead><tr><th>Tanggal</th><th>Lokasi</th><th>Penyakit</th><th>Status</th></tr></thead>
              <tbody>
                <tr><td>2026-06-03</td><td>Jl. Merdeka No. 45</td><td>DBD</td><td><span class="badge badge-success">Terverifikasi</span></td></tr>
                <tr><td>2026-06-02</td><td>Jl. Sudirman No. 12</td><td>Malaria</td><td><span class="badge badge-warn">Menunggu</span></td></tr>
                <tr><td>2026-06-01</td><td>Jl. Gatot Subroto</td><td>Chikungunya</td><td><span class="badge badge-success">Terverifikasi</span></td></tr>
                <tr><td>2026-05-30</td><td>Jl. Ahmad Yani No. 78</td><td>DBD</td><td><span class="badge badge-success">Terverifikasi</span></td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
 
      <div class="card">
        <h3 style="font-size:14px;text-align:center;margin-bottom:4px;">Profil Pengguna</h3>
        <div class="profile-avatar">AH</div>
        <p style="text-align:center;font-weight:600;font-size:13.5px;">Ahmad Hidayat</p>
        <p style="text-align:center;font-size:11.5px;color:var(--muted);margin-bottom:10px;">ahmad.hidayat@email.com</p>
        <div class="profile-row"><span class="k">Nomor HP</span><span>081234567890</span></div>
        <div class="profile-row"><span class="k">Bergabung</span><span>Jan 2026</span></div>
        <div class="profile-row"><span class="k">Role</span><span>Masyarakat</span></div>
      </div>
    </div>
  </main>
</div>
</body>
</html>