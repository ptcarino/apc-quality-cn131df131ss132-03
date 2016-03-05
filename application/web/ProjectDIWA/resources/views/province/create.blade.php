@extends('admin_template')

@section('content')
    <h1>Add a Province</h1>

    <hr/>

    {!! Form::open(['url' => 'provinces']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! Form::label('regions_id', 'Region:') !!}
            {!! Form::select('regions_id', $region, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add Province', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@stop