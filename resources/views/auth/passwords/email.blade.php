@extends('base')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Reset Password
        </div>
        <div class="panel-body">
            {!! Form::open(['url' => 'password/email']) !!}
            {!! Form::label('email', 'Email Address:') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
            <p></p>
            {!! Form::submit('Reset Password', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

    @stop