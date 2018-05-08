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
                                        <td>Kode</td>
                                        <td>{{ $data->code }}</td>
                                    </tr>
                                    <tr>
                                        <td>Soal</td>
                                        <td>{{ $data->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>{{ $data->status }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped">
                                @foreach ($data->childs as $item)
                                <tr>
                                    <td>Jawaban</td>
                                    <td>{{ $item->title }}</td>
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
