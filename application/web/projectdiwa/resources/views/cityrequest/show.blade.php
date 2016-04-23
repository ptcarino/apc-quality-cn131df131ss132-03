@extends('region_template')

@section('content')
    <div class="table-responsive">


           <h1>Shelter Name:Asia Pacific College</h1>

        <article>

            <table class="table">
    <th>Item</th><th>Quantity</th><th>Action</th>
        <tr>
                 <td>  <h4> Food</td><td>  <h4> {{$cityrequest ->food }} </td>
                    <td>

                        <select>
                            <option value="Approve"> Approve</option>
                            <option value="Deny">Deny</option>
                            <option value="Hold">Hold</option>
                        </select>

                    </td>

                </tr>

                <tr>
                    <td><h4>Water</td><td><h4>{{$cityrequest ->water }} </td>
                    <td>

                        <select>
                            <option value="volvo">Approve</option>
                            <option value="saab">Deny</option>
                            <option value="mercedes">Hold</option>
                        </select>

                    </td>

                </tr>

                <tr>
                    <td><h4>Medicine</td><td><h4>{{$cityrequest ->medicine }} </td>
                    <td>

                        <select>
                            <option value="Approve">Approve</option>
                            <option value="Deny">Deny</option>
                            <option value="Hold">Hold</option>
                        </select>

                    </td>

                </tr>

                <tr>
                    <td><h4>Clothing</td><td><h4>{{$cityrequest ->clothing}} </td>
                    <td>

                        <select>
                            <option value="Approve">Approve</option>
                            <option value="Deny">Deny</option>
                            <option value="Hold">Hold</option>
                        </select>

                    </td>

                </tr>

                <tr>
                    <td><h4>Sleeping Bag</td><td><h4>{{$cityrequest ->sleeping_bag}} </td>
                    <td>

                        <select>
                            <option value="Approve">Approve</option>
                            <option value="Deny">Deny</option>
                            <option value="Hold">Hold</option>
                        </select>

                    </td>

                </tr>
                <tr>
                    <td><h4>Remarks:</td><td><h4>{{$cityrequest ->remarks}} </td>
                    <td>



                    </td>

                </tr>
                <tr><td><td></td><td><input type="submit" value="Next>>"
                                        onclick="window.location='/tickets/create';" />   </td></tr>

                <tr><td></td><td></td><td>    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['cityrequest.destroy', $cityrequest->id]
    ]) !!}
                        {!! Form::submit('Delete this task?', ['class' => 'btn btn-danger']) !!}</td></tr>
    </table>

    </h3>
        </article>


    </div>
@stop