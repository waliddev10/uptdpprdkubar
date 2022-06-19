<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'kode',
        'password',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'jenis_kelamin',
        'nip_nik',
        'jabatan',
        'pangkat',
        'role',
        'remember_token'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
}
