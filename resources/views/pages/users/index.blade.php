@extends('layouts.app')

@section('title', 'Data Pegawai')
@section('title.category', 'General')

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
@endpush

@section('content')
<div class="row">
    <!-- Zero Configuration  Starts-->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Daftar Pegawai</h5>
            </div>
            <div class="card-body">
                <button class="btn btn-primary btn-sm" title="Tambah Pegawai" data-bs-toggle="modal"
                    data-bs-target="#modalContainer" data-title="Tambah Pegawai" href="{{ route('user.create') }}"><i
                        class="fa fa-plus fa-fw"></i>
                    Tambah
                    Pegawai</button>
                <button class="btn btn-success btn-sm" title="Import Excel" data-bs-toggle="modal"
                    data-bs-target="#modalContainer" data-title="Import Excel" href="{{ route('user.create') }}"><i
                        class="fa fa-plus fa-fw"></i>
                    Import Excel</button>
                <div class="table-responsive">
                    <table id="tableDokumen" class="display">
                        <thead>
                            <tr>
                                <th></th>
                                <th>No.</th>
                                <th>ID Pegawai</th>
                                <th>Nama Pegawai</th>
                                <th>NIP/NIK</th>
                                <th>Jabatan</th>
                                <th>Pangkat</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalContainer" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalContainer" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Title</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                ...
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    var tableDokumen = $('#tableDokumen').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: {
            url: '{{ route('user.index') }}',
            // data: function (d) {
            //     d.bulan = $('select[name=bulan]').val();
            //     d.tahun = $('select[name=tahun]').val();
            // }
        },
        columns: [
            { data: 'action', name: 'action', className: 'text-nowrap text-center', width: '1%', orderable: false, searchable: false },
            { data: 'DT_RowIndex', name: 'DT_RowIndex', className: 'text-center', width: '1%' , searchable: false, orderable: false},
            { data: 'kode', name: 'kode' },
            { data: 'nama', name: 'nama' },
            { data: 'nip_nik', name: 'nip_nik', className: 'text-center' },
            { data: 'jabatan', name: 'jabatan' },
            { data: 'pangkat', name: 'pangkat' },
            { data: 'role', name: 'role', className: 'text-nowrap' },
        ],
    });

    // $('#search-form').on('submit', function(e) {
    //     tableDokumen.draw();
    //     e.preventDefault();
    // });
</script>
@endpush
