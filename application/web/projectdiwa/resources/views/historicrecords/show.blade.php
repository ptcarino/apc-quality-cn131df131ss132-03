@extends('shelter_template')

@section('content')
    <div class="table-responsive">


           <h1>Title:{{ $historicrecords ->title }}</h1>

        <article>
    <h4>

             {{$historicrecords ->content }}

    </h4>
        </article>
    </div>
@stop