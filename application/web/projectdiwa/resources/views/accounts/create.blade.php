@extends('admin_template')

@section('content')

<h1> Create a new Account</h1>

{!! Form::open(['url' =>'accounts']) !!}
<div class="form-group">

    @include('errors.list')
    @include('accounts.form')

    {!! Form::submit('Create Account',['class'=>'btn  btn-primary form-control']) !!}
{!! Form::close() !!}
</div>

@stop
