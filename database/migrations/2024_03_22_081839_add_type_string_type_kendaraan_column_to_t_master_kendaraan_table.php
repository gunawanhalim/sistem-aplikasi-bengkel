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
            $table->string('type_kendaraan')->after('nama_pemilik')->required();
            $table->foreign('type_kendaraan')->references('type_kendaraan')->on('t_type_kendaraan')->onDelete('restrict');
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
            $table->dropForeign(['type_kendaraan']);
            $table->dropColumn('type_kendaraan');
        });
    }
};
