<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil_Beranda extends Model
{
    use HasFactory;

    protected $table = 'profil_beranda';

    protected $fillable = [
        'nama',
        'gambar_depan',
        'gambar_belakang',
        'is_active'
    ];
}

