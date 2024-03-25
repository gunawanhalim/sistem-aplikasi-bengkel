<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\master_kota;
class master_kota_controller extends Controller
{   
    public function index()
    {   
        //eager load
        $m_kota = master_kota::with('kendaraan')->get();
        // $m_kota = master_kota::get(); // select * from t_master_kendaraan
        
        return view('/kota',['list_kota' => $m_kota]);
        // dd(12*130);
    }
    public function show($id){
        $m_kota = master_kota::find($id);
        return view('kota-detail', ['kota' => $m_kota]);
    }
    public function create(){
        $kota = master_kota::all();
        return view('kota-add',
        ['kota' => $kota]);
    }
    public function store(Request $request)
    {   

        $kota = master_kota::create($request->all());
        $m_kota = master_kota::with('kendaraan')->get();
        return view('/kota', ['list_kota' => $m_kota]);
    }

}
