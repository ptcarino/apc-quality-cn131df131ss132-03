@extends('admin_template')

@section('content')
    <h1>Add a Shelter</h1>

    <hr/>

    {!! Form::open(['url' => 'shelters']) !!}

    <div class="form-group">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Type</th>
                    <th>Quantity (No. of Families)</th>
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
                    <td>{!! Form::label('barangays_id', 'Barangays') !!}</td>
                    <td>{!! Form::select('barangays_id', $barangay, null, ['class' => 'form-control']) !!}</td>
            </table>
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit('Add Shelter', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
@stop