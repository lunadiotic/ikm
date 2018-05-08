@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">
                        Detail Table
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $data->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nomor</td>
                                        <td>{{ $data->no_register }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Izin</td>
                                        <td>{{ $data->service_type }}</td>
                                    </tr>
                                    <tr>
                                        <td>Bidang</td>
                                        <td>{{ $data->service_sector }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped">
                                @foreach ($data->details as $item)
                                <tr>
                                    <td>Soal</td>
                                    <td>{{ $item->quiz->parent->title }}</td>
                                    <td>Jawaban</td>
                                    <td>{{ $item->quiz->title }}</td>
                                    <td>Nilai</td>
                                    <td>{{ $item->score }}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
