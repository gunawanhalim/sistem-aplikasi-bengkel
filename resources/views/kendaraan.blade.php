@extends('layouts.main-layouts')
@section('title','Data Kendaraan')

@section('content')

<h1>Ini Halaman Data Kendaraan</h1>
<div class="my-5">
    <a href="kendaraan-add" class="btn btn-primary">Add Data</a>
</div>
    @if(Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{Session::get('message')}}
        </div>@endif
<h3>Kendaraan Detail</h3>
<table class="table mt-5">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Pemilik</th>
            <th>Type Kendaraan</th>
            <th>Nomor Plat</th>
            <th>Kota</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list_kendaraan as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->nama_pemilik}}</td>
                <td>{{$data->nomor_plat}}</td>
                <td>{{$data->type_kendaraan}}</td>
                <td>{{$data->kota['kota']}}</td>
                <td><a href="kendaraan-detail/{{$data->id}}">Detail</a>
                    <a href="kendaraan-edit/{{$data->id}}">Edit</a>
                    <a href="kendaraan-delete/{{$data->id}}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection