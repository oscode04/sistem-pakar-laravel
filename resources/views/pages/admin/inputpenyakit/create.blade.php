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
            <label for="kodePenyakit">Kode Penyakit:</label>
            <input type="text" class="form-control" id="kodePenyakit" name="disease_code" placeholder="Masukkan kode penyakit">
        </div>
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
        <div class="form-group mb-lg-3">
            <label class="fw-semibold">Gejala</label><br>
                @foreach($symptoms as $symptom)
                    <input type="checkbox" name="symptoms[]" value="{{ $symptom->id_symptoms }}">  {{ $symptom->symptom_codes }}  || {{ $symptom->symptoms }} <br>
                @endforeach
        </div>
        <div class="form-group mb-lg-3">
            <label class="fw-semibold">Solusi</label> <br>
                @foreach($solutions as $solution)
                    <input type="checkbox" name="solutions[]" value="{{ $solution->id_solution }}">  {{ $solution->solution_code }} || {{ $solution->solution }} <br>
                @endforeach
        </div>
        
        <button type="submit" class="btn btn-primary mb-lg-5">Simpan</button>
    </form>
</div>
@endsection