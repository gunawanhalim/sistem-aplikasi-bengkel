<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_kota extends Model
{
    use HasFactory;
    
    protected $table = 't_master_kota';
    public $timestamps = false;
    protected $fillable = [
        'kota'
    ];
    public function kendaraan()
    {   
        return $this->hasMany(master_kendaraan::class,'kota_id','id'); //one to many
        // return $this->belongsTo(master_kota::class,'whatever_id','other_key_id');
    }
}
