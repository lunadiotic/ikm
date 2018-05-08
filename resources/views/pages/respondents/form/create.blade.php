@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Create Data</h4>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'setting.respondents.form.store', 'method' => 'POST']) !!}
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('code') ? ' has-danger' : '' }}">
                                        {!! Form::label('code', 'Kode') !!}
                                        {!! Form::text('code', null, ['class' => $errors->has('code') ? 'form-control form-control-danger' : 'form-control', 'required', 'autofocus']) !!}
                                        <small class="form-control-feedback">{{ $errors->first('code') }}</small>
                                    </div>
                                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                        {!! Form::label('title', 'Soal') !!}
                                        {!! Form::text('title', null, ['class' => $errors->has('title') ? 'form-control form-control-danger' : 'form-control', 'required']) !!}
                                        <small class="form-control-feedback">{{ $errors->first('title') }}</small>
                                    </div>
                                    <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                        {!! Form::label('status', 'Aktif ?') !!}
                                        {!! Form::select('status',[1 => 'Ya', 0 => 'Tidak'], null, ['id' => 'status', 'class' => $errors->has('code') ? 'form-control form-control-danger' : 'form-control']) !!}
                                         <small class="form-control-feedback">{{ $errors->first('status') }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="answer_title">Jawaban</label>
                                        <input type="text" name="answer_title[]" id="" class="form-control" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="answer_score">Nilai</label>
                                        <input type="number" name="answer_score[]" id="" class="form-control" required>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="answer_title">Jawaban</label>
                                        <input type="text" name="answer_title[]" id="" class="form-control" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="answer_score">Nilai</label>
                                        <input type="number" name="answer_score[]" id="" class="form-control" required>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="answer_title">Jawaban</label>
                                        <input type="text" name="answer_title[]" id="" class="form-control" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="answer_score">Nilai</label>
                                        <input type="number" name="answer_score[]" id="" class="form-control" required>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="answer_title">Jawaban</label>
                                        <input type="text" name="answer_title[]" id="" class="form-control" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="answer_score">Nilai</label>
                                        <input type="number" name="answer_score[]" id="" class="form-control" required>
                                    </div>
                                </div>
                                <!--/span-->
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