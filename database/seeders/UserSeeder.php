<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; // ← tambahkan baris ini
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['username' => 'admin'],
            [
                'id' => Str::uuid(),
                'nama' => 'Admin Himatekfors',
                'password' => Hash::make('password123'),
            ]
        );
    }
}