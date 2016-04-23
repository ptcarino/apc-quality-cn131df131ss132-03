@extends('shelter_template')

@section('content')

    <h1>Title:{{ $tickets ->title }}</h1>

    <article>
        <h4>

            {{$tickets ->body }}
        </h4>
    </article>
            <div class="table-responsive">
                <table class="table">
                 <th>Item Name</th>
                <th>Status</th>

    <tr>

        <td>Food</td><td>Approved</td>
    </tr>

                    <tr>

                        <td>Water</td><td>Approved</td>
                    </tr>


                    <tr>

                        <td>Medicine</td><td>Denied</td>
                    </tr>

                    <tr>

                        <td>Clothing</td><td>Denied</td>
                    </tr>

                    <tr>

                        <td>Sleeping Bag</td><td>Pending</td>
                    </tr>



                </table>

    </div>


@stop