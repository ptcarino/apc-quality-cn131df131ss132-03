@extends('region_template')

@section('content')
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>

            </tr>
            @foreach($cityrequest as $sr)
                <tr>
                    <td>{{ $sr->id }}</td>
                    <td>  <a href="/cityrequest/{{ $sr->id }}"{{ $sr->id }}>Makati City</a></td>
                    <td>{{ $sr->created_at}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@stop