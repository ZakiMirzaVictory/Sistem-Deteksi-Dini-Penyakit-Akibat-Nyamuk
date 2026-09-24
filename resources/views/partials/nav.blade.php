<?php if ($layout !== 'auth'): ?>

    <?php if ($role === 'admin'): ?>

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

            <a class="nav-item <?= $activePage === 'dashboard' ? 'active' : '' ?>"
               href="{{ url('/dashboard-admin') }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 11l9-7 9 7v9a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1z"/>
                </svg>
                Dashboard
            </a>

            <a class="nav-item <?= $activePage === 'kelola-pengguna' ? 'active' : '' ?>"
               href="{{ url('/kelola-pengguna') }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
                Kelola Pengguna
            </a>

            <a class="nav-item <?= $activePage === 'verifikasi-laporan' ? 'active' : '' ?>"
               href="{{ url('/verifikasi-laporan') }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 12l2 2 4-4"/>
                    <rect x="3" y="4" width="18" height="16" rx="2"/>
                </svg>
                Verifikasi Laporan
            </a>

            <a class="nav-item <?= $activePage === 'notifikasi' ? 'active' : '' ?>"
               href="{{ url('/notifikasi-admin') }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 8a6 6 0 1 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/>
                    <path d="M13.7 21a2 2 0 0 1-3.4 0"/>
                </svg>
                Notifikasi
            </a>

            <div class="sidebar-footer">
                <a class="nav-item" href="{{ url('/') }}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                        <path d="M16 17l5-5-5-5M21 12H9"/>
                    </svg>
                    Keluar
                </a>
            </div>
        </aside>

    <?php else: ?>

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

            <a class="nav-item <?= $activePage === 'dashboard' ? 'active' : '' ?>"
               href="{{ url('/dashboard-masyarakat') }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 11l9-7 9 7v9a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1z"/>
                </svg>
                Dashboard
            </a>

            <a class="nav-item <?= $activePage === 'buat-laporan' ? 'active' : '' ?>"
               href="{{ url('/buat-laporan') }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M14 3H6a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8z"/>
                    <path d="M14 3v5h5M9 13h6M9 17h6"/>
                </svg>
                Buat Laporan
            </a>

            <a class="nav-item <?= $activePage === 'laporan-terverifikasi' ? 'active' : '' ?>"
               href="{{ url('/laporan-terverifikasi') }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 12l2 2 4-4"/>
                    <circle cx="12" cy="12" r="9"/>
                </svg>
                Laporan Terverifikasi
            </a>

            <a class="nav-item <?= $activePage === 'notifikasi' ? 'active' : '' ?>"
               href="{{ url('/notifikasi-masyarakat') }}">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 8a6 6 0 1 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/>
                    <path d="M13.7 21a2 2 0 0 1-3.4 0"/>
                </svg>
                Notifikasi
            </a>

            <div class="sidebar-footer">
                <a class="nav-item" href="{{ url('/') }}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                        <path d="M16 17l5-5-5-5M21 12H9"/>
                    </svg>
                    Keluar
                </a>
            </div>
        </aside>

    <?php endif; ?>

<?php endif; ?>