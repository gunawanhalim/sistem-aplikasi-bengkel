<?php
// php artisan make:request master_kendaraan_create_request

namespace App\Http\Controllers;

use App\Http\Requests\master_kendaraan_create_request;
use App\Models\master_kendaraan;
use App\Models\master_kota;
use App\Models\master_type_kendaraan;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;


class master_kendaraan_controller extends Controller
{
    public function index()
    {
        $kendaraan = master_kendaraan::get(); // select * from t_master_kendaraan
        return view('/kendaraan',['list_kendaraan' => $kendaraan]);
        // dd($kendaraan);
    }
    
    public function show($id){
        $m_kendaraan = master_kendaraan::find($id);
        return view('kendaraan-detail', ['kendaraan' => $m_kendaraan]);
    }
    public function create(){
        $type = master_type_kendaraan::select('type_kendaraan')->get();
        $kota = master_kota::select('id','kota')->get();
        return view('kendaraan-add',
        ['kota' => $kota],
        ['type_kendaraan'=> $type]);
    }
    public function store(master_kendaraan_create_request $request){
        // $validated = $request->validate([
        //     'nomor_plat' => 'unique:t_master_kendaraan|max:10',
        // ]);
        $kendaraan = master_kendaraan::create($request->all());
        if($kendaraan){
            $request->session()->flash('status','success');
            $request->session()->flash('message','Add New kendaraan success!');
            // Session::flash('message','add new kendaraan success!');
        }
        return redirect('/kendaraan');
    }
    public function edit(Request $request, $id)
    {   
        $type_kendaraan = master_type_kendaraan::get();
        $kota = master_kota::select('id','kota')->get();
        // $kendaraan = master_kendaraan::with('kota')->findOrFail($id);
        $kendaraan = master_kendaraan::findOrFail($id);
        return view('kendaraan-edit',
        ['kendaraan' => $kendaraan,'type_kendaraan' => $type_kendaraan,'kota'=>$kota]);
    }

    public function update(Request $request, $id)
    {   
        $kendaraan = master_kendaraan::findOrFail($id);

        $kendaraan->nama_pemilik = $request->nama_pemilik;
        $kendaraan->nomor_ktp = $request->nomor_ktp;
        $kendaraan->nomor_mesin = $request->nomor_mesin;
        $kendaraan->type_kendaraan = $request->type_kendaraan;
        $kendaraan->nomor_plat = $request->nomor_plat;
        $kendaraan->nomor_wa = $request->nomor_wa;
        $kendaraan->kategori_member = $request->kategori_member;
        $kendaraan->kota_id = $request->kota_id;
        $kendaraan->save();
    }

    public function delete($id){
        $kendaraan = master_kendaraan::findOrFail($id);
        return view('kendaraan-delete',['kendaraan' => $kendaraan]);
    }
    public function destroy($id){
        $deleteKendaraan = master_kendaraan::findOrFail($id);
        $deleteKendaraan->delete();
        if($deleteKendaraan){
            session()->flash('status','success');
            session()->flash('message','Delete Data kendaraan success!');
        }
        return redirect('/kendaraan');
    }
}
