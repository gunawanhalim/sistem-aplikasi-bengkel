@extends('layouts.main-layouts')
@section('title','Add Kendaraan')

@section('content')
    <div class="mt-5">
        <form action="kota" method="post">
            @csrf
            <div class="mb-3 col-2">
                
                <label for="name">Kota</label>
                <input type="text" class="form-control" name="kota" id="kota">
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection