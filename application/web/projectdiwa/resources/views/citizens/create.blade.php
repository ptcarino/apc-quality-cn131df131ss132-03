@extends('admin_template')


@section('content')

<h1> Create a new Account</h1>
 


 {!! Form::open(['url' =>'citizens']) !!}



<div class="form-group">




@include('citizens.form')
@include('errors.list')
{!! Form::submit('Create Account',['class'=>'btn  btn-primary form-control']) !!}
 {!! Form::close() !!}



</div>

@stop
