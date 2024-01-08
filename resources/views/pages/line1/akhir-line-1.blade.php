@extends('layouts.main-layout')

@section('tittle')
    Konsultasi
@endsection

@section('content')
<div class="container mt-lg-5">
  <div class="card card-custom">
    <div class="card-body">
      <h3 class="text-center">Hasil Diagnosa</h3>
      <h5>Nama Penyakit :
        @foreach($diseases as $disease)
          {{ $disease->disease_name }}
        @endforeach
      </h5>
      <h5>Gejala yang dialami tanaman anda : </h5>
      @if(session()->has('user_answer') && count(array_filter(session('user_answer'))) > 0)
        <ul>
            @foreach(session('user_answer') as $answer)
                @if(!is_null($answer))
                    <li>{{ $answer }}</li>
                @endif
            @endforeach
        </ul>
      @else
          <p>Tidak ada jawaban yang tersimpan di session atau nilainya null.</p>
      @endif

      <h5>Solusi untuk mengatasi penyakit tersebut : </h5>
      
          <ul>
              @foreach($solutions as $solution)
                  <li>{{ $solution->solution }}</li>
                  <!-- Ganti 'solution_field_name' dengan nama field solusi yang ingin Anda tampilkan -->
              @endforeach
          </ul>
      
    </div>
  </div>
  <form method="GET" action="{{ route('back-to-landing-page') }}">
    @csrf
    <div class="d-flex justify-content-center">
      <button class="next-btn btn btn-primary">Selesai</button>
    </div>
  </form>
</div>
@endsection