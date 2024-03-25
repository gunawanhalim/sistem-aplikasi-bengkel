<?php

namespace App\Http\Controllers;

use App\Models\master_t_kendaraan_in;
use Illuminate\Http\Request;

class master_t_kendaraan_in_controller extends Controller
{
    public function index()
    {
        $m_kendaraan_in = master_t_kendaraan_in::get(); // select * from t_master_kendaraan
        
        return view('/kendaraan_masuk',['list_kendaraan_masuk' => $m_kendaraan_in]);
        // dd(12*130);
    }
}
