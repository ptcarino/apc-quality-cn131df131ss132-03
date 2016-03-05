@extends('admin_template')

@section('content')
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>City</th>
            </tr>
            @foreach($shelters as $shelter)
                <tr>
                    <td>{{ $shelter->id }}</td>
                    <td>{{ $shelter->name }}</td>
                    <td>{{ $shelter->cities_name }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@stop