<?php
//php artisan make:model master_kota
// php artisan make:controller master_kota_controller
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_kendaraan extends Model
{
    use HasFactory;

    protected $table = 't_master_kendaraan';
    public $timestamps = false;
    protected $fillable = [
        'nama_pemilik',
        'nomor_ktp',
        'nomor_mesin',
        'nomor_plat',
        'nomor_wa',
        'kategori_member',
        'kota_id',
        'type_kendaraan'
    ];
    public function kota()
    {   
        // return $this->hasMany(master_kota::class, 'id', 'kota_id');        @foreach($data->master_kota as $kota)             <td>{{$kota['kota']}}</td>             @endforeach

        return $this->belongsTo(master_kota::class);
        // return $this->belongsTo(master_kota::class,'whatever_id','other_key_id');
    }
    public function type_kendaraan()
    {
        return $this->hasMany(master_type_kendaraan::class);
        // return $this->belongsTo(master_kota::class,'whatever_id','other_key_id');
    }
    // public $incrementing = false; // Auto Increment
}
