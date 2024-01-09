@extends('layouts.admin-layout')

@section('tittle')
    Input Gejala
@endsection

@section('content')
<div class="container mt-4">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Input Gejala</h2>
    </div>
    <form action="{{route('input-gejala.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-lg-3">
            <label for="gejala">Kode Gejala : </label>
            <input type="text" class="form-control" id="gejala" name="symptom_codes" placeholder="Masukkan kode gejala">
        </div>
        <div class="form-group mb-lg-3">
            <label for="penyebabPenyakit">Gejala</label>
            <input type="text" class="form-control" id="penyebabPenyakit" name="symptoms" placeholder="Masukkan gejala">
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection