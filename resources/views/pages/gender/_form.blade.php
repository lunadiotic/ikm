<div class="form-body">
    <div class="form-group{{ $errors->has('code') ? ' has-danger' : '' }}">
        {!! Form::label('code', 'Kode') !!}
        {!! Form::text('code', null, ['class' => $errors->has('code') ? 'form-control form-control-danger' : 'form-control', 'required', 'autofocus']) !!}
        <small class="form-control-feedback">{{ $errors->first('code') }}</small>
    </div>
    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
        {!! Form::label('title', 'Jenis Kelamin') !!}
        {!! Form::text('title', null, ['class' => $errors->has('title') ? 'form-control form-control-danger' : 'form-control', 'required']) !!}
        <small class="form-control-feedback">{{ $errors->first('title') }}</small>
    </div>
    <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
        {!! Form::label('status', 'Aktif ?') !!}
        {!! Form::select('status',[1 => 'Ya', 0 => 'Tidak'], null, ['id' => 'status', 'class' => $errors->has('code') ? 'form-control form-control-danger' : 'form-control']) !!}
         <small class="form-control-feedback">{{ $errors->first('status') }}</small>
    </div>
</div>
<div class="form-actions pull-right">
    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
    <button type="button" class="btn btn-inverse">Cancel</button>
</div>