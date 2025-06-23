<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UbahGambarNullableDiBeritaBeranda extends Migration
{
    public function up()
    {
        Schema::table('berita_beranda', function (Blueprint $table) {
            $table->string('gambar')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('berita_beranda', function (Blueprint $table) {
            $table->string('gambar')->nullable(false)->change();
        });
    }
}
