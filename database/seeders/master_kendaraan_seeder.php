<?php
//php artisan db:seed --class=master_kendaraan_seeder
// composer require fakerphp/faker
namespace Database\Seeders;

use App\Models\master_kendaraan;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class master_kendaraan_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $data = [
            ['nomor_plat' => 'GG 1393 EI'],
            ['nomor_plat' => 'GG 3123 KK'],
            ['nomor_plat' => 'DD 1312 KE'],
            ['nomor_plat' => 'DD 1903 KE'],
        ]; 
    foreach($data as $value){
        master_kendaraan::insert([
                'nama_pemilik' => 'Gunawan',
                'nomor_plat' => $value['nomor_plat'],
                'nomor_mesin' => '12321dkasd4k',
                'nama_user' => 'Putri',
                // 'kategori_number' => 'gold',
                'kota_id' => +'3',
            ]);
            }

            // 'tanggal_registrasi' => Carbon::now()
            

    }


}
