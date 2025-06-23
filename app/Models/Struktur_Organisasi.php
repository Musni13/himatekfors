<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktur_Organisasi extends Model
{
    use HasFactory;
    protected $table = 'struktur_organisasi';

    protected $fillable = [
        'nama',
        'nph',
        'jabatan',
        'divisi',
        'gambar',
        'periode',
        'posisi',
        'is_active',
    ];
}
