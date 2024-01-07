@extends('layouts.main-layout')

@section('tittle')
    Konsultasi
@endsection

@section('content')
<div class="container">
  @if(count($userAnswers) > 0)
    <ul>
        @foreach($userAnswers as $answer)
            <li>{{ $answer }}</li>
        @endforeach
    </ul>
  @else
      <p>Tidak ada jawaban yang tersimpan di session.</p>
  @endif
  <form method="GET" action="{{ route('back-to-landing-page') }}">
    @csrf
    <div class="d-flex justify-content-center">
      <button class="next-btn btn btn-primary">Selesai</button>
    </div>
  </form>
</div>
@endsection