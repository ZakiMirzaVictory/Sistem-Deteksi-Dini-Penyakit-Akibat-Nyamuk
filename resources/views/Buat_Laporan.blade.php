<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Buat Laporan — Deteksi Dini Nyamuk</title>
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
    <a class="nav-item active" href="buat-laporan.html">
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
        <h1>Buat Laporan Baru</h1>
        <p>Laporkan kasus penyakit terkait nyamuk di wilayah Anda.</p>
      </div>
    </div>
 
    <div class="card" style="max-width:640px;">
      <form>
        <div class="field">
          <label>Lokasi Kejadian *</label>
          <input type="text" placeholder="Masukkan alamat lengkap lokasi kejadian">
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
          <textarea rows="3" placeholder="Deskripsikan gejala yang dialami (demam, sakit kepala, nyeri otot, dll)"></textarea>
        </div>
        <div class="field">
          <label>Kondisi Lingkungan *</label>
          <textarea rows="3" placeholder="Deskripsikan kondisi lingkungan sekitar (genangan air, tempat penampungan air, dll)"></textarea>
        </div>
        <div class="field">
          <label>Foto Pendukung (Opsional)</label>
          <div class="dropzone">
            <svg class="dz-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 16V4M7 9l5-5 5 5"/><path d="M4 16v3a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-3"/></svg>
            Klik untuk upload atau drag &amp; drop<br>
            <span style="font-size:11px;">PNG, JPG, JPEG (Maks. 5MB)</span>
          </div>
        </div>
 
        <div style="display:flex;gap:10px;margin-top:6px;">
          <button type="submit" class="btn btn-primary">Kirim Laporan</button>
          <button type="button" class="btn btn-ghost">Batal</button>
        </div>
      </form>
    </div>
  </main>
</div>
</body>
</html>