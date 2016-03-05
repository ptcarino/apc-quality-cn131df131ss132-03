@extends('admin_template')

@section('content')
    <h1>Send A Request</h1>

    <hr/>

    {!! Form::open(['url'=>'cityneeds']) !!}
    <div class="form-group">
        {!! Form::label('needs', 'Needs:') !!}
        {!! Form::text('needs', null, ['class' => 'form-control']) !!}

        {!! Form::label('notes', 'Notes:') !!}
        {!! Form::textarea('notes', null, ['class' => 'form-control']) !!}

        {!! Form::label('remarks', 'Remarks:') !!}
        {!! Form::textarea('remarks', null, ['class' => 'form-control']) !!}


    </div>

    <div class="form-group">
        {!! Form::submit('Send Request', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop