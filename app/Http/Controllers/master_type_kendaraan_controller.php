<?php

namespace App\Http\Controllers;

use App\Models\master_type_kendaraan;
use Illuminate\Http\Request;

class master_type_kendaraan_controller extends Controller
{   
     public function index()
    {
        $m_type_kendaraan = master_type_kendaraan::get(); // select * from t_master_kendaraan
        
        return view('/type_kendaraan',['list_type_kendaraan' => $m_type_kendaraan]);
        // dd(12*130);
    }

}
