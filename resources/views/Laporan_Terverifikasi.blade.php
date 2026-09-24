<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laporan Terverifikasi — Deteksi Dini Nyamuk</title>
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
 
    <a class="nav-item" href="dashboard-masyarakat.html">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 11l9-7 9 7v9a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1z"/></svg>
      Dashboard
    </a>
    <a class="nav-item" href="buat-laporan.html">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 3H6a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8z"/><path d="M14 3v5h5M9 13h6M9 17h6"/></svg>
      Buat Laporan
    </a>
    <a class="nav-item active" href="laporan-terverifikasi.html">
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
        <h1>Laporan Terverifikasi</h1>
        <p>Daftar laporan Anda yang telah diverifikasi oleh tenaga medis.</p>
      </div>
    </div>
 
    <div class="card">
      <div class="toolbar">
        <div class="search-box">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
          <input type="text" placeholder="Cari laporan berdasarkan lokasi atau penyakit...">
        </div>
        <button class="btn btn-outline btn-sm">Filter</button>
      </div>
 
      <div class="table-wrap">
        <table>
          <thead><tr><th>Tanggal</th><th>Lokasi</th><th>Jenis Penyakit</th><th>Gejala</th><th>Status</th><th></th></tr></thead>
          <tbody>
            <tr><td>2026-06-03</td><td>Jl. Merdeka No. 45</td><td>DBD</td><td>Demam tinggi, sakit kepala</td><td><span class="badge badge-success">Terverifikasi</span></td><td><a href="#" style="color:var(--primary);font-weight:600;">Detail</a></td></tr>
            <tr><td>2026-05-30</td><td>Jl. Ahmad Yani No. 78</td><td>DBD</td><td>Demam, mual, bintik merah</td><td><span class="badge badge-success">Terverifikasi</span></td><td><a href="#" style="color:var(--primary);font-weight:600;">Detail</a></td></tr>
            <tr><td>2026-05-28</td><td>Jl. Diponegoro No. 23</td><td>Malaria</td><td>Demam berkala, menggigil</td><td><span class="badge badge-success">Terverifikasi</span></td><td><a href="#" style="color:var(--primary);font-weight:600;">Detail</a></td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>
</div>
</body>
</html>