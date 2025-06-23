<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $table = 'hero';

    protected $fillable = [
        'nama',
        'logo',
        'slogan',
        'is_active',
        'url_youtube'
    ];
}

