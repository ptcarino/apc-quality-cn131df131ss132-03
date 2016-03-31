@extends('app')

@section('content')

<h1> Add New Rro</h1>
 


 {!! Form::open(['url' =>'rros']) !!}



	<div class="form-group">


@include('errors.list')
@include('rros.form')

{!! Form::submit('Add RRO',['class'=>'btn  btn-primary form-control']) !!}
 {!! Form::close() !!}



	</div>

@stop
