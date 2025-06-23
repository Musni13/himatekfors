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
        Schema::create('berita_beranda', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('detail_berita');
            $table->enum('jenis_berita', ['BERITA','KEGIATAN', 'PENGUMUMAN']);
            $table->string('gambar');
            $table->date('tanggal');
            $table->enum('is_active', ['AKTIF','NONAKTIF']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita_beranda');
    }
};
