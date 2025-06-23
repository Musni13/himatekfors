<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita_Beranda extends Model
{
    use HasFactory;

    protected $table = 'berita_beranda';

    protected $fillable = [
        'nama',
        'detail_berita',
        'jenis_berita',
        'random_code',
        'tanggal',
        'is_active'
    ];

    public function galeri()
    {
        return $this->hasMany(Galeri_Beranda::class, 'code', 'random_code');
    }

    public function galeriFirst()
    {
        return $this->hasOne(Galeri_Beranda::class, 'code', 'random_code')->oldest('created_at');
    }

}