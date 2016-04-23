@extends('shelter_template')

@section('content')
    <h1>Add Record</h1>
    <hr/>
    {!! Form::open(['url' => 'historicrecords']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}

        {!! Form::label('content', 'Content    :') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::submit('Add Record', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop