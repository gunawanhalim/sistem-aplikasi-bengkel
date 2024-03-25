@extends('layouts.main-layouts')
@section('title','Detail Kota')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Nama Kota</th>
                <th>Nama Pemilik</th>
                <th>Nomor Plat</th>
                <th>Nomor Mesin</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{$kota->kota}} </td>
                    <td>@foreach($kota->kendaraan as $kendaraan)
                        -{{$kendaraan['nama_pemilik']}} <br>
                    @endforeach</td>
                    <td>@foreach($kota->kendaraan as $kendaraan)
                        -{{$kendaraan['nomor_plat']}} <br>
                    @endforeach</td>
                    <td>@foreach($kota->kendaraan as $kendaraan)
                        -{{$kendaraan['nomor_mesin']}} <br>
                    @endforeach</td>
                    
                </tr>
        </tbody>
    </table>
    @endsection