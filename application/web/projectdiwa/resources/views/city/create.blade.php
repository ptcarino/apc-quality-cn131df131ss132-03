@extends('admin_template')

@section('content')
    <h1>Add a City</h1>
    <hr/>
    {!! Form::open(['url' => 'cities']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! Form::label('provinces_id', 'Province:') !!}
        {!! Form::select('provinces_id', $province, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add City', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop