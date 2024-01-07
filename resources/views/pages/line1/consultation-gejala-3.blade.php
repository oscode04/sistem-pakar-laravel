@extends('layouts.main-layout')

@section('tittle')
    Konsultasi
@endsection

@section('content')
<div class="container">
    <div class="mt-lg-4">
      <h2 class="text-lg-center">Gejala</h2>
      <p class="text-lg-center">
        @foreach($symptoms as $symptom)
          @if($symptom->symptom_codes == 'G3')
              {{ $symptom->symptoms }}
              @break <!-- Opsional, untuk menghentikan iterasi setelah menampilkan satu symptom -->
          @endif
        @endforeach
      </p>
      <form method="POST" action="{{ route('store-answer') }}">
        @csrf
        <div class="yesorno text-lg-center mt-3">
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="answer"
              id="inlineRadio1"
              value="G3" />
            <label class="form-check-label" for="inlineRadio1"><b>Ya</b></label>
          </div>
          <div class="form-check form-check-inline">
            <input
              class="form-check-input"
              type="radio"
              name="answer"
              id="inlineRadio2"
              value="" />
            <label class="form-check-label" for="inlineRadio2"
              ><b>Tidak</b></label
            >
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <button class="next-btn btn btn-primary">Next</button>
        </div>
      </form>
    </div>
  </div>
@endsection