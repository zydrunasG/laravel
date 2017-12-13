@extends('base')


@section('content')
<h2 class="page-header text-center">Registracija</h2>

@if($errors->any())

        @foreach($errors->all() as $error)
            <p class="bg-danger">{{ $error }}</p>
            @endforeach

    @endif


    {!! Form::open(['url' => 'register']) !!}
<div style="color: black;font-size: larger">
    <div class="form-group">
        {!! Form::label('name', 'Vardas:') !!}
        {!! Form::text('name', old('name'), array('class' => 'form-control', 'placeholder' => 'Vardenis')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'El. pašto adresas:') !!}
        {!! Form::email('email', old('email'), array('class' => 'form-control', 'placeholder' => 'example@site.com')) !!}
    </div>

    <div class="form-group">
    {!! Form::label('password', 'Slaptažodis:') !!}
    {!! Form::password('password', array('class' => 'form-control', 'placeholder' => '•••••••')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Pakartokite slaptažodį:') !!}
        {!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => '•••••••')) !!}
    </div>
</div>

    {!! Form::submit('Registruotis', array('class' => 'btn btn-success')) !!}
    {!! Form::close() !!}


    @stop



@section('js')
    <script>
        document.getElementById("li-home").classList.remove("active");
        document.getElementById("li-register").classList.add("active");
    </script>
@stop