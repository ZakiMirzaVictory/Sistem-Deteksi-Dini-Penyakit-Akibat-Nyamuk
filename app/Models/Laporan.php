<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporan';

    protected $fillable = [
        'id_user',
        'tanggal',
        'lokasi',
        'gejala',
        'deskripsi',
        'foto',
        'status',
    ];

    // Relasi dengan model Pengguna
    public function user()
    {
        return $this->belongsTo(Pengguna::class, 'id_user', 'id_user');
    }   

}