<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Menambahkan user 'admin' jika belum ada
        User::firstOrCreate(
            ['username' => 'admin'],
            [
                'id' => Str::uuid(),
                'nama' => 'Admin Himatekfors',
                'password' => Hash::make('password123'),
                'bypass' => 'password123',
            ]
        );
    }
}
