<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login', [
            'pageTitle' => 'Login — Deteksi Dini Penyakit Akibat Nyamuk'
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'identitas' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek login via email atau no_hp
        $fieldType = filter_var($credentials['identitas'], FILTER_VALIDATE_EMAIL) ? 'email' : 'no_hp';

        if (Auth::attempt([$fieldType => $credentials['identitas'], 'password' => $credentials['password']], $request->boolean('remember'))) {
            // Mencegah Session Fixation
            $request->session()->regenerate();

            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->intended(route('admin.dashboard'));
            }

            return redirect()->intended(route('masyarakat.dashboard'));
        }

        return back()->withInput($request->only('identitas'))
            ->with('error', 'Email/No HP atau Password yang Anda masukkan salah.');
    }

    public function showRegister()
    {
        return view('auth.register', [
            'pageTitle' => 'Registrasi — Deteksi Dini Penyakit Akibat Nyamuk'
        ]);
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|unique:pengguna,email',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'no_hp' => $validated['no_hp'],
            'alamat' => $validated['alamat'],
            'password' => Hash::make($validated['password']),
            'role' => 'masyarakat',
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Anda telah berhasil keluar.');
    }
}