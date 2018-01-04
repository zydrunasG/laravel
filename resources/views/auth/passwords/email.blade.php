@extends('base')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Slaptažodžio atkūrimas
        </div>
        <div class="panel-body">
            {!!  Form::open(['url' => 'password/email']) !!}

            {!! Form::label('email', 'El. pašto adresas:') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
            <p></p>
            {!! Form::submit('Sugražinti slaptažodį', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
    </div>

    @stop