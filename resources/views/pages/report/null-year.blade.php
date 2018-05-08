@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">
                        INDEKS KEPUASAN MASYARAKAT PER RESPONDEN
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="text-center">PENGOLAHAN INDEKS KEPUASAN MASYARAKAT PER RESPONDEN</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">DAN PER UNSUR PELAYANAN </div>
                                </td>
                            </tr>
                            <tr>
                                <td><div class="text-center">({{ $tahun }})</div></td>
                            </tr>
                            <tr>
                                <h2>Tidak ada data.</h2>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
