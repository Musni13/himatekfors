<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNphColumnTypeInDemisionerTable extends Migration
{
    public function up()
    {
        Schema::table('demisioner', function (Blueprint $table) {
            $table->string('nph', 36)->change();
        });
    }

    public function down()
    {
        Schema::table('demisioner', function (Blueprint $table) {
            $table->integer('nph')->change(); // Sesuaikan jika sebelumnya bukan integer
        });
    }
}

