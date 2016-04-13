@extends('admin_template')

@section('content')

    <hr/>

    {!! Form::open(['url' => 'needs']) !!}

    <div class="form-group">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Type</th>
                    <th>Quantity (No. of Families)</th>
                </tr>
                <tr>
                    <td>{!! Form::label('food', 'Food') !!}</td>
                    <td>{!! Form::input('number', 'food', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('water', 'Water') !!}</td>
                    <td>{!! Form::input('number', 'water', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('medicine', 'Medicine') !!}</td>
                    <td>{!! Form::input('number', 'medicine', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('clothing', 'Clothing') !!}</td>
                    <td>{!! Form::input('number', 'clothing', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::label('sleeping_bag', 'Sleeping Bag') !!}</td>
                    <td>{!! Form::input('number', 'sleeping_bag', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <td>{!! Form::hidden('shelters_id', '1') !!}</td>
            </table>
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit('Request Needs', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
@stop