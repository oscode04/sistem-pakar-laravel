@extends('layouts.main-layout')

@section('tittle')
    Input Penyakit
@endsection

@section('content')
<div class="container mt-4">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Input Penyakit</h2>
    </div>
    <form action="{{route('input-penyakit.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-lg-3">
            <label for="namaPenyakit">Nama Penyakit:</label>
            <input type="text" class="form-control" id="namaPenyakit" name="disease_name" placeholder="Masukkan nama penyakit">
        </div>
        <div class="form-group mb-lg-3">
            <label for="penyebabPenyakit">Penyebab Penyakit:</label>
            <input type="text" class="form-control" id="penyebabPenyakit" name="disease_cause" placeholder="Masukkan penyebab penyakit">
        </div>
        <div class="form-group mb-lg-3">
            <label for="detailPenyakit">Detail Penyakit:</label>
            <textarea class="form-control" id="detailPenyakit" name="disease_detail" placeholder="Masukkan detail penyakit"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection