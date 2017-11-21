@extends('base')

@section('content')

    @if($errors->any())

        @foreach($errors->all() as $error)
            <p class="bg-danger">{{ $error }}</p>
        @endforeach

    @endif

<h2 class="page-header text-center">Prisijungimas</h2>

{!! Form::open(['url' => 'login']) !!}


<div class="form-group">
    {!! Form::label('email', 'El. pašto adresas:') !!}
    {!! Form::email('email', old('email'), array('placeholder' => 'example@site.com', 'class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Slaptažodis:') !!}
    {!! Form::password('password', array('placeholder' => '•••••••', 'class' => 'form-control')) !!}
</div>

{!! Form::submit('Prisijungti', array('class' => 'btn btn-default')) !!}
{!! Form::close() !!}

@stop