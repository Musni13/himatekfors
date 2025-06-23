<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Background_Berita extends Model
{
    use HasFactory;

    protected $table = 'background_berita';

    protected $fillable = [
        'gambar',
    ];
}