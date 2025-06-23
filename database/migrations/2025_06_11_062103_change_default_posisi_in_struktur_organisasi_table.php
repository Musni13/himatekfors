<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDefaultPosisiInStrukturOrganisasiTable extends Migration
{
    public function up()
    {
        Schema::table('struktur_organisasi', function (Blueprint $table) {
            // Hapus default pada kolom posisi
            $table->integer('posisi')->default(null)->change();
        });
    }

    public function down()
    {
        Schema::table('struktur_organisasi', function (Blueprint $table) {
            // Kembalikan default ke 0 jika dibatalkan
            $table->integer('posisi')->default(0)->change();
        });
    }
}
