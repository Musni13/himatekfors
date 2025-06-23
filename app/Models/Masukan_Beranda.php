<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masukan_Beranda extends Model
{
    use HasFactory;

    protected $table = 'masukan_beranda';

    protected $fillable = [
        'nama',
        'email',
        'judul',
        'pesan'
    ];
}