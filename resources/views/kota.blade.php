@extends('layouts.main-layouts')
@section('title','Data Kota')

@section('content')
<h1>Ini Halaman Data Kota</h1>
<div class="my-5">
    <a href="kota-add" class="btn btn-primary">Add Kota</a>
</div>
<h3>Kota Detail</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Kota</th>
                <th>Nomor Plat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_kota as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->kota}}</td>
                    <td>@foreach($data->kendaraan as $kendaraan)
                    -{{$kendaraan['nomor_plat']}} 
                    <br>@endforeach</td>
                    <td><a href="kota-detail/{{$data->id}}">Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection