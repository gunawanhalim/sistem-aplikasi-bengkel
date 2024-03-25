@extends('layouts.main-layouts')
@section('title','Edit Kendaraan')

@section('content')
    <div class="mt-5">
        <form action="/kendaraan/{{$kendaraan->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3 col-2">
                <label for="name">Nama Pemilik</label>
                <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik" value="{{$kendaraan->nama_pemilik}}" required>
            </div>
            <div class="mb-3 col-2">
                <label for="name">Nomor Ktp</label>
                <input type="text" class="form-control" name="nomor_ktp" id="nomor_ktp" value="{{$kendaraan->nomor_ktp}}" required>
            </div>
            <div class="mb-3 col-2">
                <label for="name">Nomor Plat</label>
                <input type="text" class="form-control" name="nomor_plat" id="nomor_plat" value="{{$kendaraan->nomor_plat}}" required>
            </div>
            <div class="mb-3 col-2">
                <label for="name">Nomor Mesin</label>
                <input type="text" class="form-control" name="nomor_mesin" id="nomor_mesin" value="{{$kendaraan->nomor_mesin}}" required>
            </div>
            <div class="mb-3 col-2">
                <label for="name">Nomor Whatsapp</label>
                <input type="text" class="form-control" name="nomor_wa" id="nomor_wa" value="{{$kendaraan->nomor_mesin}}" required>
            </div>
            <div class="mb-3 col-2">
                <label for="kategori">Kategori</label>
                <select name="kategori_member" id="kategori_member" class="form-control">
                    <option>Select One</option>
                    <option value="silver">Silver</option>
                    <option value="gold">Gold</option>
                    <option value="platinum">Platinum</option>
                </select>
            </div>
            <div class="mb-3 col-2">
                <label for="tipe_kendaraan">Tipe Kendaraan</label>
                <select name="type_kendaraan" id="type_kendaraan" class="form-control">
                    <option value="">Select One</option>
                    @foreach ($type_kendaraan as $data)
                     <option value="{{$data->type_kendaraan}}">{{$data->type_kendaraan}}</option>
                    @endforeach
                       
                </select>
            </div>
            <div class="mb-3 col-2">
                <label for="kota">Kota Kendaraan</label>
                
                <select name="kota_id" id="kota_id" class="form-control">
                        {{-- <option value="{{$kendaraan->kota->id}}">{{$kendaraan->kota->kota}}</option> --}}
                        @foreach ($kota as $data)
                        <option value="{{$data->id}}">{{$data->kota}}</option>
               @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection