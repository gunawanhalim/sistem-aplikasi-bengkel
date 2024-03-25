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
        Schema::table('t_type_kendaraan', function (Blueprint $table) {
            $table->unique('type_kendaraan')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_type_kendaraan', function (Blueprint $table) {
            $table->dropUnique('t_type_kendaraan_type_kendaraan_unique');
        });
    }
};
