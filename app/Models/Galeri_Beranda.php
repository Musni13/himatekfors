<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri_Beranda extends Model
{
    use HasFactory;

    protected $table = 'galeri_beranda';

    protected $fillable = [
        'gambar',
        'code',
        'is_active'
    ];

    public $timestamps = true;
}