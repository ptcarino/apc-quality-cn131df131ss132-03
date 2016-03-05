@extends('admin_template')

@section('content')
    <h1>Add a City</h1>
    <hr/>

    {!! Form::model($cities,['method'=>'PATCH','url'=>'cities/'. $cities->id]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! Form::label('provinces_id', 'Province:') !!}
        {!! Form::select('provinces_id', $province, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Edit', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

    {!! Form::open([
          'method' => 'DELETE',
          'route' => ['cities.destroy', $cities->id]
      ]) !!}
    {!! Form::submit('Delete this task?', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

