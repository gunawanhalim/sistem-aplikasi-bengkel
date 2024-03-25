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
        Schema::create('t_kendaraan_in', function (Blueprint $table) {
            $table->dateTime('tanggal_transaksi');
            $table->bigInteger('nomor_transaksi'); // <BND-yymmdd-000001>
            $table->bigInteger('service');
            $table->bigInteger('part');
            $table->bigInteger('body');
            $table->float('service_point');
            $table->float('body_point');
            $table->float('part_point');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_kendaraan_in');
    }
};
