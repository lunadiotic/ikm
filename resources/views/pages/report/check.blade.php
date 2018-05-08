@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Create Data</h4>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'report.respondent.check', 'method' => 'POST']) !!}
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('tahun') ? ' has-danger' : '' }}">
                                        {!! Form::label('tahun', 'Tahun') !!}
                                        {!! Form::number('tahun', null, ['class' => $errors->has('tahun') ? 'form-control form-control-danger' : 'form-control', 'required']) !!}
                                        <small class="form-control-feedback">{{ $errors->first('tahun') }}</small>
                                    </div>
                                    <div class="form-group{{ $errors->has('semester') ? ' has-danger' : '' }}">
                                        {!! Form::label('semester', 'Semester') !!}
                                        {!! Form::select('semester',[1 => 'Semester 1', 2 => 'Semester 2'], null, ['id' => 'semester', 'class' => $errors->has('semester') ? 'form-control form-control-danger' : 'form-control']) !!}
                                         <small class="form-control-feedback">{{ $errors->first('semester') }}</small>
                                    </div>
                                </div>
                            </div>                          
                        </div>
                        <div class="form-actions pull-right">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                            <button type="button" class="btn btn-inverse">Cancel</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection