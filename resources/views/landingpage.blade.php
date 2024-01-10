@extends('layouts.main-layout')

@section('tittle')
    Home Page
@endsection

@section('content')
    <!-- content -->
    <div class="container">
        <div class="row mt-lg-5">
          <div class="col-lg-6 col-12 main-img">
            <img
              class="mx-auto d-block"
              src="../aset/main-img.jpg"
              alt="" />
          </div>
          <div class="col-lg-6 col-12 web-tittle my-lg-auto d-lg-block">
            <div class="ms-3 mt-3">
              <h1>
                Selamat Datang Di
                <br />
                Dokter Tanaman
              </h1>
              <p>
                Perawatan Cabai yang Efektif: Konsultasikan Tanaman Cabai Anda di
                Sini!
              </p>
              <div class="row me-2">
                <div class="col-lg-5 col-6">
                  <a href="{{route("konsultasi")}}">
                    <button type="button" class="konsul-btn btn">
                      Konsultasi Sekarang
                    </button>
                  </a>
                </div>
                <div class="col-lg-6 col-6">
                  <a href="{{route("information")}}">
                    <button type="button" class="info-btn btn">
                      Informasi Penyakit
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end content -->
@endsection