<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';       // Sesuai nama tabel di DBeaver
    protected $primaryKey = 'id_user';   // Sesuai nama kolom primary key di DBeaver
    
    protected $fillable = [
        'nama',
        'email',
        'password',
        'role',
        'alamat',
        'no_hp',
    ];

    // TAMBAHKAN FUNGSI RELASI INI
    public function user()
    {
        // Menghubungkan id_user di tabel laporan dengan id_user di tabel pengguna
        return $this->belongsTo(Pengguna::class, 'id_user', 'id_user');
    }
}