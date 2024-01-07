@extends('layouts.main-layout')

@section('tittle')
    Konsultasi
@endsection

@section('content')
<div class="container">
  <p>Jawaban Anda: {{ $userAnswer }}</p>
</div>
@endsection