@extends('admin_template')

@section('content')
    <h1>Add a Shelter</h1>

    <hr/>

    {!! Form::open(['url' => 'shelters']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! Form::label('cities_id', 'City:') !!}
            {!! Form::select('cities_id', $city, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add Shelter', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
@stop