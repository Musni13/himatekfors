<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNamaColumnTypeOnProfilBerandaTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('profil_beranda', function (Blueprint $table) {
            $table->text('nama')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profil_beranda', function (Blueprint $table) {
            $table->string('nama')->change();
        });
    }
}

