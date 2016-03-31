@extends('admin_template')

@section('content')
    <h1>Add a Region</h1>

    <hr/>

    {!! Form::open(['url' => 'regions']) !!}

    <div class="form-group">

        {!! Form::label('name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add Region', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
@stop