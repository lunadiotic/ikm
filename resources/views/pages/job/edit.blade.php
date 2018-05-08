@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Create Data</h4>
                </div>
                <div class="card-body">
                    {!! Form::model($data, ['route' => ['setting.job.update', $data->id], 'method' => 'PUT']) !!}
                        @include('pages.job._form')                    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection