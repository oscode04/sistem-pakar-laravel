@extends('layouts.admin-layout')

@section('title')
    Daftar Gejala
@endsection

@section('content')
<!-- Section Content -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div
    class="section-content section-dashboard-home mt-lg-2"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title mb-lg-3">Daftar Gejala Penyakit Pada Tanaman Cabai</h2>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- benerin href ntar --}}
                            <a href="{{route('input-gejala.create')}}" class="btn btn-primary mb-3">
                                + Tambah Gejala Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                    <tr>
                                        {{-- <th>Nomor</th> --}}
                                        <th>Kode Gejala</th>
                                        <th>Gejala</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('addon-script')
    <script>
        // AJAX DataTablenn

        $('#crudTable').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: {
                    url: '{!! url()->current() !!}',
                },
                columns: [
                    // { data: 'id', name: 'id' },
                    { data: 'symptom_codes', name: 'symptom_codes' },
                    { data: 'symptoms', name: 'symptoms' },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        width: '10%'
                    },
                ]
            });

            
    </script>
@endpush