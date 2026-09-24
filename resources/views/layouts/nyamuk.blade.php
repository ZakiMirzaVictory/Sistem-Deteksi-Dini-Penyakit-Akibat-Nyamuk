@include('partials.header')

@include('partials.nav')

<?php if ($layout !== 'auth'): ?>
    <main class="main">
<?php endif; ?>

@include('partials.konten')

@include('partials.footer')