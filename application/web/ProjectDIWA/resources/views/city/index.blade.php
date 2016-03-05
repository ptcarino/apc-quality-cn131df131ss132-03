@extends('admin_template')

@section('content')
    <div class="table-responsive">
        <table class="table">
            <tr>

                <th>Name</th>
                <th>Province</th>
                <th></th>
            </tr>
            @foreach($cities as $city)
                <tr>
                    <td>{{ $city->name }}</td>
                    <td>{{ $city->provinces_name }}</td>
                    <td><a href="/cities/{{ $city->id}}/edit" {{ $city->name}}>Edit/Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@stop