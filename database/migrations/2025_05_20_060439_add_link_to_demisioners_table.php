<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('demisioner', function (Blueprint $table) {
            $table->string('instagram')->nullable()->after('gambar');
            $table->string('facebook')->nullable()->after('instagram');
            $table->string('twitter')->nullable()->after('facebook');
        });
    }

    public function down(): void
    {
        Schema::table('demisioner', function (Blueprint $table) {
            $table->dropColumn(['instagram', 'facebook', 'twitter']);
        });
    }
};
