@extends('layouts.main-layout')

@section('tittle')
    Konsultasi
@endsection

@section('content')
<div class="container">
    <div class="mt-lg-4">
      <h2 class="text-lg-center">Gejala</h2>
      <p class="text-lg-center">Ini disini nanti gejala</p>
      <div class="yesorno text-lg-center mt-3">
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadioOptions"
            id="inlineRadio1"
            value="ya" />
          <label class="form-check-label" for="inlineRadio1"><b>Ya</b></label>
        </div>
        <div class="form-check form-check-inline">
          <input
            class="form-check-input"
            type="radio"
            name="inlineRadioOptions"
            id="inlineRadio2"
            value="tidak" />
          <label class="form-check-label" for="inlineRadio2"
            ><b>Tidak</b></label
          >
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <a href="" class="mt-4">
        <button class="next-btn btn btn-primary">Next</button>
      </a>
    </div>
  </div>
@endsection