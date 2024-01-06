@extends('layouts.main-layout')

@section('title')
    Daftar Penyakit
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
            <h2 class="dashboard-title mb-lg-3">Daftar Penyakit Pada Tanaman Cabai</h2>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- benerin href ntar --}}
                            <a href="{{route('input-penyakit.create')}}" class="btn btn-primary mb-3">
                                + Tambah Jenis Penyakit Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                    <tr>
                                        {{-- <th>Nomor</th> --}}
                                        <th>Nama Penyakit</th>
                                        <th>Penyebab</th>
                                        <th>Detail</th>
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
                    { data: 'disease_name', name: 'disease_name' },
                    { data: 'disease_cause', name: 'disease_cause' },
                    { data: 'disease_detail', name: 'disease_detail' },
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