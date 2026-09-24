<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login — Deteksi Dini Penyakit Akibat Nyamuk</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="resources/css/styles.css">
</head>
<body>
<div class="auth-shell">
  <div class="auth-card">
    <div class="auth-logo">
      <svg viewBox="0 0 48 48" width="48" height="48" fill="none">
        <path d="M24 3 L43 10 V22 C43 33 35 41 24 45 C13 41 5 33 5 22 V10 Z" stroke="#e12727" stroke-width="2.4"/>
        <ellipse cx="24" cy="23" rx="4.5" ry="6.5" fill="#e12727"/>
        <circle cx="24" cy="16" r="2.6" fill="#e12727"/>
        <path d="M24 17 L15 10 M24 17 L33 10 M20 24 L9 21 M28 24 L39 21 M22 29 L14 36 M26 29 L34 36" stroke="#e12727" stroke-width="1.4" stroke-linecap="round"/>
      </svg>
    </div>
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
        <label style="display:flex;align-items:center;gap:6px;margin:0;"><input type="checkbox" style="width:auto;"> Ingat saya</label>
        <a href="#">Lupa password?</a>
      </div>
 
      <button type="submit" class="btn btn-primary btn-block auth-submit">Login</button>
    </form>
 
    <p class="auth-footer">Belum punya akun? <a href="registrasi.html">Daftar</a></p>
  </div>
</div>
</body>
</html>