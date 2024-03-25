@extends('layouts.main-layouts')
@section('title','Data Kendaraan Masuk')

@section('content')
    <div class="mt-5">
        <h2>Apakah anda yakin ingin menghapus data : {{$kendaraan->nama_pemilik}} ({{$kendaraan->nomor_plat}})</h2>
        <form action="/kendaraan-destroy/{{$kendaraan->id}}" style="display: inline-block"method="post" >
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="/kendaraan" class="btn btn-primary">Cancel</a>
    </form>
    </div>

@endsection