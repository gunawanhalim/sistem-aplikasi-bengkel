<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_master_kendaraan', function (Blueprint $table) {
            $table->unique('nomor_plat')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_master_kendaraan', function (Blueprint $table) {
            $table->dropUnique('t_master_kendaraan_nomor_plat_unique');
        });
    }
};
