<?php
// Variabel wajib di-set dari Controller:
// $pageTitle, $layout ('auth' atau 'dashboard'),
// $role ('masyarakat'/'admin'), $activePage

if (!isset($pageTitle)) {
    $pageTitle = 'Deteksi Dini Nyamuk';
}

if (!isset($layout)) {
    $layout = 'dashboard';
}

if (!isset($role)) {
    $role = 'masyarakat';
}

if (!isset($activePage)) {
    $activePage = '';
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= htmlspecialchars($pageTitle) ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

<?php if ($layout === 'auth'): ?>

    <div class="auth-shell">

        <div class="auth-card">

            <div class="auth-logo">
                <svg viewBox="0 0 48 48" width="48" height="48" fill="none">
                    <path
                        d="M24 3 L43 10 V22 C43 33 35 41 24 45 C13 41 5 33 5 22 V10 Z"
                        stroke="#e12727"
                        stroke-width="2.4"
                    />

                    <ellipse
                        cx="24"
                        cy="23"
                        rx="4.5"
                        ry="6.5"
                        fill="#e12727"
                    />

                    <circle
                        cx="24"
                        cy="16"
                        r="2.6"
                        fill="#e12727"
                    />

                    <path
                        d="M24 17 L15 10
                           M24 17 L33 10
                           M20 24 L9 21
                           M28 24 L39 21
                           M22 29 L14 36
                           M26 29 L34 36"
                        stroke="#e12727"
                        stroke-width="1.4"
                        stroke-linecap="round"
                    />
                </svg>
            </div>

<?php else: ?>

    <div class="app-shell">

<?php endif; ?>