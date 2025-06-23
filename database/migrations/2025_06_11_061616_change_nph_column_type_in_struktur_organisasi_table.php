<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNphColumnTypeInStrukturOrganisasiTable extends Migration
{
    public function up()
    {
        Schema::table('struktur_organisasi', function (Blueprint $table) {
            $table->string('nph', 30)->change(); // ubah ke VARCHAR(30)
        });
    }

    public function down()
    {
        Schema::table('struktur_organisasi', function (Blueprint $table) {
            // Ubah balik ke tipe sebelumnya jika perlu (misal bigint)
            $table->bigInteger('nph')->change();
        });
    }
}

