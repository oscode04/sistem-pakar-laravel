@extends('layouts.main-layout')

@section('tittle')
    Home Page
@endsection

@section('content')
    <!-- content -->
    <div class="container">
        <div class="row">
          <div class="col-lg-6 main-img">
            <img
              class="position-absolute top-50 start-0 translate-middle-y"
              src="../aset/main-img.jpg"
              alt="" />
          </div>
          <div class="col-lg-6 web-tittle">
            <h1>
              Selamat Datang Di
              <br />
              Dokter Tanaman
            </h1>
            <p>
              Perawatan Cabai yang Efektif: Konsultasikan Tanaman Cabai Anda di
              Sini!
            </p>
            <div class="row">
              <div class="col-lg-5">
                <a href="konsultasi.html">
                  <button type="button" class="konsul-btn btn">
                    Konsultasi Sekarang
                  </button>
                </a>
              </div>
              <div class="col-lg-6">
                <button type="button" class="info-btn btn">
                  Informasi Penyakit
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end content -->
@endsection