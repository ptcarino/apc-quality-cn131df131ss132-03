@extends('admin_template')

@section('content')
    <div class="table-responsive">
        <table class="table">
            <tr>

                <th>Name</th>
                <th>Telephone Number</th>
                <th></th>
            </tr>
            @foreach($helplines as $helpline)
                <tr>
                    <td>{{ $helpline->name }}</td>
                    <td>{{ $helpline->telnumber }}</td>

                    <td><a href="/helplines/{{ $helpline->id}}/edit" {{ $helpline->name}}>Edit/Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@stop