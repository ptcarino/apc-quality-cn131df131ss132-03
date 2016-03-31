@extends('admin_template')

@section('content')
    <h1>Edit: {!! $accounts->username !!} </h1>






    {!! Form::model($accounts,['method'=>'PATCH','url'=>'accounts/'. $accounts->id]) !!}

    @include('accounts.form')


    @include('errors.list')


    <div class="form-group">

        {!! Form::submit('Edit Account',['class'=>'btn  btn-primary form-control']) !!}

    </div>


    {!! Form::open([
          'method' => 'DELETE',
          'route' => ['accounts.destroy', $accounts->id]
      ]) !!}
    {!! Form::submit('Delete this task?', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@stop
