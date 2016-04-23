@extends('shelter_template')

@section('content')
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th></th>
            </tr>
            @foreach($tickets as $ticket)
                <tr>
                    <td>  <a href="/tickets/{{$ticket->id }}"{{ $ticket->id }}>{{ $ticket->title }}</a></td>
                    <td>{{ $ticket->created_at }}</td>

                </tr>

            @endforeach

        </table>
    </div>
@stop