<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBeritaAndGaleriTables extends Migration
{
    public function up()
    {
        // Hanya tambahkan kolom 'code' jika belum ada di galeri_beranda
        Schema::table('galeri_beranda', function (Blueprint $table) {
            if (!Schema::hasColumn('galeri_beranda', 'code')) {
                $table->string('code', 12)->nullable();
            }
        });
    }

    public function down()
    {
        // Hapus kolom 'code' jika ada (rollback)
        Schema::table('galeri_beranda', function (Blueprint $table) {
            if (Schema::hasColumn('galeri_beranda', 'code')) {
                $table->dropColumn('code');
            }
        });
    }
}
