{!! Form::model($model, ['url' => $delete_url, 'method' => 'DELETE']) !!}
    <a href="{{ $show_url }}" class="btn btn-sm  btn-info">Show</a>
    <a href="{{ $edit_url }}" class="btn btn-sm btn-secondary">Edit</a>
    <button 
        type="submit" 
        class="btn btn-sm btn-danger"
        onclick="alert('Are you sure want to delete this data ?')"
    >Delete</button>
{!! Form::close() !!}