@extends('layouts.main-layout')

@section('tittle')
    Konsultasi
@endsection

@section('content')
<div class="container">
    <div class="mt-lg-4">
      <h4 class="text-lg-center mb-lg-2">Apakah Tanaman Anda Mengalami Gejala dibawah ini?</h4>
      <p class="text-lg-center">
        @foreach($symptoms as $symptom)
          @if($symptom->symptom_codes == 'G9')
              {{ $symptom->symptoms }}
              @break <!-- Opsional, untuk menghentikan iterasi setelah menampilkan satu symptom -->
          @endif
        @endforeach
      </p>
      <form method="POST" action="{{ route('gejala-9-line-2-c.store-answer') }}">
        @csrf
        <div class="yesorno text-lg-center mt-3">
          <div class="form-check form-check-inline">
            <input
              required
              class="form-check-input"
              type="radio"
              name="answer"
              id="inlineRadio1"
              value="
              @foreach($symptoms as $symptom)
                @if($symptom->symptom_codes == 'G9')
                    {{ $symptom->symptoms }}
                    @break <!-- Opsional, untuk menghentikan iterasi setelah menampilkan satu symptom -->
                @endif
              @endforeach 
              " />
            <label class="form-check-label" for="inlineRadio1"><b>Ya</b></label>
          </div>
          <div class="form-check form-check-inline">
            <input
              required
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