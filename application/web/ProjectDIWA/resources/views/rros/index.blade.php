@extends('app')

@section('content')

<h1> List of Users </h1>


@foreach ($rros as $rros)

 {{ $rros->name}}
	 <a href="/rros/{{ $rros->id}}/edit" >Edit</a><br>
@endforeach
@stop
