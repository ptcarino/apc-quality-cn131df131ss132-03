@extends('city_template')

@section('content')
    <h1>Request Materials</h1>

    <hr/>

    {!! Form::open(['url' => 'cityrequest']) !!}

    <div class="form-group">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Type</th>
                    <th>Quantity (No. of Units)</th>
                </tr>


                <tr>
                    <td>{!! Form::checkbox('food', 1) !!}
                        {!! Form::label('food', 'Food') !!}</td>
                    <td>{!! Form::input('number', 'foodqty', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::checkbox('water', 1) !!}
                        {!! Form::label('water', 'Water') !!}</td>
                    <td>{!! Form::input('number', 'waterqty', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::checkbox('medicine', 1) !!}
                        {!! Form::label('medicine', 'Medicine') !!}</td>
                    <td>{!! Form::input('number', 'medicineqty', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::checkbox('clothing', 1) !!}
                        {!! Form::label('clothing', 'Clothing') !!}</td>
                    <td>{!! Form::input('number', 'clothingqty', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::checkbox('sleepingbag', 1) !!}
                        {!! Form::label('sleepingbag', 'Sleeping Bag') !!}</td>
                    <td>{!! Form::input('number', 'sleepingbagqty', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::checkbox('food', 1) !!}
                        {!! Form::label('lifeboat', 'Lifeboat') !!}</td>
                    <td>{!! Form::input('number', 'lifeboat', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::checkbox('water', 1) !!}
                        {!! Form::label('ambulance', 'Ambulance') !!}</td>
                    <td>{!! Form::input('number', 'ambulance', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::checkbox('medicine', 1) !!}
                        {!! Form::label('shovel', 'Shovel') !!}</td>
                    <td>{!! Form::input('number', 'shovel', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::checkbox('amphibian', 1) !!}
                        {!! Form::label('amphibian', 'Amphibian') !!}</td>
                    <td>{!! Form::input('number', 'amphibian', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>


                       <td><h4>{!! Form::label('name', 'Remarks:') !!}</h4> </td>
                       <td> {!! Form::textarea('remarks', null, ['class' => 'form-control']) !!}
                    </td>
                </tr>

            </table>
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit('Add Shelter', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
@stop