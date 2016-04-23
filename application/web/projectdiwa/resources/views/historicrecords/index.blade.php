@extends('shelter_template')

@section('content')
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th></th>
            </tr>
            @foreach($historicrecords as $historicrecord)
                <tr>
                    <td>  <a href="/historicrecords/{{ $historicrecord->id }}"{{ $historicrecord->id }}>{{ $historicrecord->title }}</a></td>
                    <td>{{ $historicrecord->created_at }}</td>

                </tr>

            @endforeach
         
        </table>
    </div>
@stop