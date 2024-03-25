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
        Schema::create('t_master_point', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('service_point_range');
            $table->bigInteger('service_point_value');
            $table->bigInteger('part_point_range');
            $table->bigInteger('part_point_value');
            $table->bigInteger('body_point_range');
            $table->bigInteger('body_point_value');
            $table->dateTime('periode_awal');
            $table->dateTime('periode_akhir');
            $table->integer('nomor_point'); //nomor bukti penginputan
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_master_point');
    }
};
