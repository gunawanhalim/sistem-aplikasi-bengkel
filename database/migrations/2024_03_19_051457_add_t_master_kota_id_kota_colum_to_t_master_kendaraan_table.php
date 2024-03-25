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
            //alter table
            $table->unsignedBigInteger('kota_id')->after('nomor_ktp')->required();
            $table->foreign('kota_id')->references('id')->on('t_master_kota')->onDelete('restrict');
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
            $table->dropForeign(['kota_id']);
            $table->dropColumn('kota_id');
            
        });
    }
};
