@extends('admin_template')

@section('content')

    <hr/>

    {!! Form::open(['url' => 'region']) !!}

    <div class="form-group">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Type</th>
                    <th>No. of Families</th>
                </tr>

                @include('form')

                <tr>
                    <td>{!! Form::label('lifeboat', 'Life Boat:') !!}</td>
                    <td>{!! Form::input('number', 'lifeboat', null, ['class' => 'form-control']) !!}</td>
                </tr>

                <tr>
                    <td>{!! Form::label('ambulance', 'Ambulance:') !!}</td>
                    <td>{!! Form::input('number', 'ambulance', null, ['class' => 'form-control']) !!}</td>
                </tr>

                <tr>
                    <td>{!! Form::label('shovel', 'Shovel:') !!}</td>
                    <td>{!! Form::input('number', 'shovel', null, ['class' => 'form-control']) !!}</td>
                </tr>

                <tr>
                    <td>{!! Form::label('Amphibian', 'Amphibian:') !!}</td>
                    <td>{!! Form::input('number', 'Amphibian', null, ['class' => 'form-control']) !!}</td>
                </tr>

                <tr>
                    <td>{!! Form::label('remarks', 'Remarks:') !!}</td>
                    <td>{!! Form::textarea('remarks', null, ['class' => 'form-control', 'rows' => '4']) !!}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit('Request Needs', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
@stop