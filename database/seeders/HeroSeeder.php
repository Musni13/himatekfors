<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hero;

class HeroSeeder extends Seeder
{
    public function run(): void
    {
        Hero::firstOrCreate(
            ['nama' => 'Himpunan Mahasiswa Contoh'],
            [
                'logo' => 'assets/template/img/logo-hima.png',
                'slogan' => 'Bersatu dan Berkarya untuk Negeri',
            ]
        );
    }
}
