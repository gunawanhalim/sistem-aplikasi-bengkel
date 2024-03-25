@extends('layouts.main-layouts')
@section('title','Add Kendaraan')

@section('content')
    <div class="mt-5">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="kendaraan" method="post">
            @csrf
            <div class="mb-3 col-2">
                <label for="name">Nama Pemilik</label>
                <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik">
            </div>
            <div class="mb-3 col-2">
                <label for="name">Nomor Ktp</label>
                <input type="text" class="form-control" name="nomor_ktp" id="nomor_ktp">
            </div>
            <div class="mb-3 col-2">
                <label for="name">Nomor Plat</label>
                <input type="text" class="form-control" name="nomor_plat" id="nomor_plat">
            </div>
            <div class="mb-3 col-2">
                <label for="name">Nomor Mesin</label>
                <input type="text" class="form-control" name="nomor_mesin" id="nomor_mesin">
            </div>
            <div class="mb-3 col-2">
                <label for="name">Nomor Whatsapp</label>
                <input type="text" class="form-control" name="nomor_wa" id="nomor_wa">
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
                    @foreach ($type_kendaraan as $item)
                       <option value="{{$item->type_kendaraan}}">{{$item->type_kendaraan}}</option>
                   @endforeach
                </select>
            </div>
            <div class="mb-3 col-2">
                <label for="kota">Kota Kendaraan</label>
                <select name="kota_id" id="kota_id" class="form-control">
                    <option value="">Select One</option>
                    @foreach ($kota as $item)
                       <option value="{{$item->id}}">{{$item->kota}}</option>
                   @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection