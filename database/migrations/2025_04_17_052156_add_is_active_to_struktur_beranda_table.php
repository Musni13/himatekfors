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
        Schema::table('struktur_beranda', function (Blueprint $table) {
            $table->enum('is_active', ['AKTIF', 'NONAKTIF'])->default('AKTIF');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('struktur_beranda', function (Blueprint $table) {
            $table->dropColomn('is_active');  
        });
    }
};
