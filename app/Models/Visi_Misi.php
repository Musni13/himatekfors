<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visi_Misi extends Model
{
    use HasFactory;
    protected $table = 'visi_misi';

    protected $fillable = [
        'nama',
        'keterangan'
    ];
       
}
