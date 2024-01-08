@extends('layouts.main-layout')

@section('tittle')
  Rembah Semai
@endsection

@section('content')
<div class="container mt-lg-5 mb-lg-5">
  <div class="card card-custom">
    <div class="card-body">
      <h3 class="text-center">Penjelasan Penyakit</h3>
      <h5>Nama Penyakit : {{$diseaseName}} </h5>
      <h5>Penjelasan singkat : </h5>
      <p>
        {{$diseaseDetail}}
      </p>
      <h5>Gejala yang muncul pada tanaman : </h5>
        <ul>
            @foreach ($symptoms as $symptom)
                <li> {{ $symptom }}</li>
            @endforeach
        </ul>
      <h5>Solusi untuk mengatasi penyakit tersebut : </h5>
        <ul>
            @foreach ($solutions as $solution)
                <li> {{ $solution }}</li>
            @endforeach
        </ul>
    </div>
  </div>
</div>
@endsection