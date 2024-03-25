<?php
//php artisan make:migration add_type_id_column_to_t_master_kendaraan_table // untuk alter table
// php artisan make:migration add_unique_rule_in_t_master_kendaraan_table //menambahkan unique
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
        Schema::create('t_master_kota', function (Blueprint $table) {
            $table->id('id');
            $table->string('kota',15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_master_kota');
    }
};
