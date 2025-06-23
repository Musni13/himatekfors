<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('hero', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('logo'); // bisa untuk simpan path gambar/logo
            $table->string('slogan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hero');
    }
};

