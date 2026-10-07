<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Atur aturan redirect bawaan Laravel
        $middleware->redirectTo(
            guests: '/login',                // Jika BELUM login -> arahkan ke /login
            users: '/dashboard-masyarakat'   // Jika SUDAH login tapi buka /login -> arahkan ke dashboard
        );
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();