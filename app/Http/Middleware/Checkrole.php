<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Sesuaikan parameter 'masyarakat' dengan nilai 'user' pada DB
        $expectedRole = ($role === 'masyarakat') ? 'user' : $role;

        if (Auth::user()->role !== $expectedRole) {
            abort(403, 'Anda tidak memiliki hak akses ke halaman ini.');
        }

        return $next($request);
    }
}