<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPenanganan extends Model
{
    use HasFactory;

    // Menentukan nama tabel secara spesifik
    protected $table = 'riwayat_penanganan';

    // Mengizinkan semua kolom diisi (mass assignment)
    protected $guarded = []; 
}