@extends('city_template')

@section('content')
    <h1>Ticket</h1>
    <hr/>
    {!! Form::open(['url' => 'tickets']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}

        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop