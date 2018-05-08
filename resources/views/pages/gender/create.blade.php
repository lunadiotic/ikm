@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Create Data</h4>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'setting.gender.store', 'method' => 'POST']) !!}
                        @include('pages.gender._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection