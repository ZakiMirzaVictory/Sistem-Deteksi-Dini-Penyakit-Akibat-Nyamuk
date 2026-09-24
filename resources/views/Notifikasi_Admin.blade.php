<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Notifikasi — Portal Admin</title>
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
    <a class="nav-item" href="dashboard-admin.html">
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
    <a class="nav-item active" href="notifikasi-admin.html">
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
    <div class="page-head" style="justify-content:space-between;">
      <div>
        <h1>Notifikasi</h1>
        <p>Pemberitahuan laporan baru dan aktivitas sistem.</p>
      </div>
      <button class="btn btn-outline btn-sm">Tandai Semua Sudah Dibaca</button>
    </div>
 
    <p style="font-size:12.5px;color:var(--muted);margin-bottom:14px;">2 notifikasi belum dibaca</p>
 
    <div class="notif-item unread">
      <div class="notif-icon" style="background:var(--warn-soft);color:var(--warn);">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
      </div>
      <div class="notif-body">
        <div class="notif-title-row">
          <span class="notif-title">Laporan Baru Menunggu Verifikasi</span>
          <span class="badge badge-danger">Belum dibaca</span>
        </div>
        <p class="notif-text">Wahyu Zizi melaporkan kasus DBD di Jl. Mawar No. 5 — memerlukan verifikasi Anda.</p>
        <p class="notif-time">01 Jun 2026, 14:20</p>
      </div>
    </div>
 
    <div class="notif-item unread">
      <div class="notif-icon" style="background:var(--warn-soft);color:var(--warn);">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
      </div>
      <div class="notif-body">
        <div class="notif-title-row">
          <span class="notif-title">Laporan Baru Menunggu Verifikasi</span>
          <span class="badge badge-danger">Belum dibaca</span>
        </div>
        <p class="notif-text">Budi Santoso melaporkan kasus Malaria di Kel. Pandean — memerlukan verifikasi Anda.</p>
        <p class="notif-time">31 Mei 2026, 10:05</p>
      </div>
    </div>
 
    <div class="notif-item">
      <div class="notif-icon" style="background:var(--success-soft);color:var(--success);">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
      </div>
      <div class="notif-body">
        <div class="notif-title-row">
          <span class="notif-title">Pengguna Baru Terdaftar</span>
          <span class="badge badge-muted">Sudah dibaca</span>
        </div>
        <p class="notif-text">Akun masyarakat baru atas nama Siti Aminah berhasil melakukan registrasi.</p>
        <p class="notif-time">30 Mei 2026, 08:12</p>
      </div>
    </div>
  </main>
</div>
</body>
</html>