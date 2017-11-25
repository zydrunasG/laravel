@extends('base')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Reset Password
        </div>
        <div class="panel-body">
            {!! Form::open(['url' => 'password/reset']) !!}
            {!! Form::hidden('token', $token) !!}
            {!! Form::label('email', 'Email Address:') !!}
            {!! Form::email('email', $email, ['class' => 'form-control']) !!}

            {!! Form::label('password', 'New Password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}

            {!! Form::label('password_confirmation', 'Confirm New Password') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}


            {!! Form::submit('Change Password', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop