@extends('layouts.admin-layout')

@section('tittle')
    Input Solusi
@endsection

@section('content')
<div class="container mt-4">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Input Solusi</h2>
    </div>
    <form action="{{route('input-solusi.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-lg-3">
            <label for="solusi">Kode Solusi : </label>
            <input type="text" class="form-control" id="solusi" name="solution_code" placeholder="Masukkan kode solusi">
        </div>     
        <div class="form-group mb-lg-3">
            <label for="solusi">Solusi : </label>
            <input type="text" class="form-control" id="solusi" name="solution" placeholder="Masukkan solusi">
        </div>        
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection