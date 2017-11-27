@extends('base')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Pakeisti slaptažodį
        </div>
        <div class="panel-body">
            {!! Form::open(['route' => 'password.request']) !!}
            {!! Form::hidden('token', $token) !!}

            {!! Form::label('email', 'El. pašto adresas:') !!}
            {!! Form::email('email', $email, ['class' => 'form-control']) !!}

            {!! Form::label('password', 'Naujas slaptažodis') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}

            {!! Form::label('password-confirm', 'Pakartokite naują slaptažodį') !!}
            {!! Form::password('password-confirm', ['class' => 'form-control']) !!}


            {!! Form::submit('Pakeisti slaptažodį', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@stop