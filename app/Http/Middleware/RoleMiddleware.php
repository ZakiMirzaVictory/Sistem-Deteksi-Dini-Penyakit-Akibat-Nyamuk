<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userRole = strtolower(trim(Auth::user()->role));
        $targetRole = strtolower(trim($role));

        // Konversi 'user' menjadi 'masyarakat' agar lolos pencecekan middleware
        if ($userRole === 'user') {
            $userRole = 'masyarakat';
        }

        if ($userRole === $targetRole) {
            return $next($request);
        }

        return abort(403, 'Anda tidak memiliki hak akses ke halaman ini.');
    }
}