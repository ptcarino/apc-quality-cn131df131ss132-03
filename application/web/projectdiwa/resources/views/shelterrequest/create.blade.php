@extends('shelter_template')

@section('content')
    <h1>Request Material</h1>

    <hr/>

    {!! Form::open(['url' => 'shelterrequest']) !!}

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
                    <td>{!! Form::input('number', 'food', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::checkbox('water', 1) !!}
                        {!! Form::label('water', 'Water') !!}</td>
                    <td>{!! Form::input('number', 'water', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::checkbox('medicine', 1) !!}
                        {!! Form::label('medicine', 'Medicine') !!}</td>
                    <td>{!! Form::input('number', 'medicine', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::checkbox('clothing', 1) !!}
                        {!! Form::label('clothing', 'Clothing') !!}</td>
                    <td>{!! Form::input('number', 'clothing', null, ['class' => 'form-control']) !!}</td>
                </tr>
                <tr>
                    <td>{!! Form::checkbox('sleepingbag', 1) !!}
                        {!! Form::label('sleepingbag', 'Sleeping Bag') !!}</td>
                    <td>{!! Form::input('number', 'sleepingbag', null, ['class' => 'form-control']) !!}</td>
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
        {!! Form::submit('Request Materials', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
@stop