<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profil_beranda', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gambar_depan');
            $table->string('gambar_belakang');
            $table->enum('is_active', ['AKTIF', 'NONAKTIF'])->default('AKTIF');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    
    {
        Schema::dropIfExists('profil_beranda');
    }
};
