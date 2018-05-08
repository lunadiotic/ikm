@extends('layouts.app')

@push('create-button')
    {{-- <div class="col-md-7 align-self-center text-right d-none d-md-block">
        <a href="{{ route('setting.respondents.form.create') }}" class="btn btn-info"><i class="fa fa-plus-circle"></i> Create New</a>
    </div> --}}
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">
                        Datatable
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nomor</th>
                                    <th>Bidang</th>
                                    <th>Jenis</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script>
    $(function() {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('datatable.respondent') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'no_register', name: 'no_register'},
                {data: 'service_sector', name: 'service_sector'},
                {data: 'service_type', name: 'service_type'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    });
    </script>
@endpush
