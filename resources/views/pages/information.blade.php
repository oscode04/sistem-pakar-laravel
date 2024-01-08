@extends('layouts.main-layout')

@section('tittle')
    Informasi Penyakit
@endsection

@section('content')
    <!-- content -->
    <div class="container">
        <h2 class="text-center mt-lg-3">Daftar Penyakit Pada Tanaman Cabai</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 mt-lg-3">
                <div class="card custom-penyakit-card d-flex align-items-center justify-content-center">
                    <a href="{{route('antraknosa')}}">
                        <div class="card-body">
                            <p class="nama-penyakit">Antraknosa</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 mt-lg-3">
                <div class="card custom-penyakit-card d-flex align-items-center justify-content-center">
                    <a href="{{route('phytopthora')}}">
                        <div class="card-body">
                            <p class="nama-penyakit">Phytopthora</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 mt-lg-3">
                <div class="card custom-penyakit-card d-flex align-items-center justify-content-center">
                    <a href="{{route('antraknosa')}}">
                        <div class="card-body">
                            <p class="nama-penyakit text-center">Rembah Semai</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 mt-lg-3">
                <div class="card custom-penyakit-card d-flex align-items-center justify-content-center">
                    <a href="{{route('antraknosa')}}">
                        <div class="card-body">
                            <p class="nama-penyakit text-center">Layu Fusarium</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 mt-lg-3">
                <div class="card custom-penyakit-card d-flex align-items-center justify-content-center">
                    <a href="{{route('antraknosa')}}">
                        <div class="card-body">
                            <p class="nama-penyakit text-center">Penyakit Kuning</p>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
    <!-- end content -->
@endsection