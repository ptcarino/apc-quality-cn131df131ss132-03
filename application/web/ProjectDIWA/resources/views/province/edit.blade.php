@extends('admin_template')

@section('content')
    <h1>Add a Province</h1>

    {!! Form::model($provinces,['method'=>'PATCH','url'=>'provinces/'. $provinces->id]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! Form::label('regions_id', 'Region:') !!}
        {!! Form::select('regions_id', $region, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Edit', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

    {!! Form::open([
          'method' => 'DELETE',
          'route' => ['provinces.destroy', $provinces->id]
      ]) !!}
    {!! Form::submit('Delete this task?', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop