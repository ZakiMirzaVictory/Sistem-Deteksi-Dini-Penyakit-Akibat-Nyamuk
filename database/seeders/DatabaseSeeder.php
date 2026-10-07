<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Admin
        User::create([
            'nama' => 'Admin Utama',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
            'no_hp' => '081234567890',
            'alamat' => 'Madiun'
        ]);

        // Akun Masyarakat
        User::create([
            'nama' => 'Ahmad Hidayat',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
            'no_hp' => '089876543210',
            'alamat' => 'Jl. Merdeka No. 45'
        ]);
    }
}