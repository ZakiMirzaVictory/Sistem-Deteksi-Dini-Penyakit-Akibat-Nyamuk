<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Arahkan ke tabel dan primary key sesuai migration
    protected $table = 'pengguna';
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'nama',
        'email',
        'password',
        'role',
        'alamat',
        'no_hp',
        'instansi',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}