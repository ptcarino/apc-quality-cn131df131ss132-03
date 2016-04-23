@extends('city_template')

@section('content')
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Shelter Name</th>
                <th>City</th>
                <th></th>
            </tr>
            @foreach($shelterrequest as $sr)
                <tr>
                    <td>  <a href="/shelterrequest/{{ $sr->id }}"{{ $sr->id }}>Asia Pacific College</a></td>
                    <td>{{ $sr->created_at }}</td>
                </tr>
            @endforeach


            <tr>

                <td><a href="shelterrequest/1">Bangkal Elementary School</a>
                <td>2016-04-22 01:58:34</td>
            </tr>

            <tr>

                <td><a href="shelterrequest/1">Makati Science High School</a></td>
                <td>2016-04-22 02:30:11</td>
            </tr>
            <tr>

                <td><a href="shelterrequest/1">Bangkal Elementary School</a>
                <td>2016-04-22 01:58:34</td>
            </tr>

            <tr>

                <td><a href="shelterrequest/1">Makati Science High School</a></td>
                <td>2016-04-22 02:30:11</td>
            <select>
                        <option value="volvo">Earthquake</option>
                        <option value="saab">Flood</option>
                <option value="saab">All</option>
                    </select><input type="submit" value="Next>>"
                                        onclick="window.location='/earth/';" />   </td></tr>
        </table>
    </div>
@stop