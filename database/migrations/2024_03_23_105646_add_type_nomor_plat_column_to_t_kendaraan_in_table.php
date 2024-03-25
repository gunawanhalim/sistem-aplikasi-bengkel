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
        Schema::table('t_kendaraan_in', function (Blueprint $table) {
            $table->string('nomor_plat')->after('nomor_transaksi')->required();
            $table->foreign('nomor_plat')->references('nomor_plat')->on('t_master_kendaraan')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_kendaraan_in', function (Blueprint $table) {
            $table->dropForeign(['nomor_plat']);
            $table->dropColumn('nomor_plat');
        });
    }
};
