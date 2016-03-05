@extends('admin_template')

@section('content')

<h1> List of Citizens </h1>


@foreach ($citizens as $citizens)

<article>
	

	<h2> <a href="/citizens/{{ $citizens->id}}" {{ $citizens->firstname}}</a></h2>
</article>
 {{ $citizens->firstname}}

@endforeach
@stop
