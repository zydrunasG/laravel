@extends('base')

@section('content')

    @if($errors->any())

        @foreach($errors->all() as $error)
            <p class="bg-danger text-center">{{ $error }}</p>
        @endforeach

    @endif

    @if(session('status'))
     <p class="bg-success text-center">{{  session('status') }}</p>
     @endif
<h2 class="page-header text-center">Prisijungimas</h2>

{!! Form::open(['url' => 'login']) !!}

<div style="color: black;font-size: larger">
<div class="form-group">
    {!! Form::label('email', 'El. pašto adresas:') !!}
    {!! Form::email('email', old('email'), array('placeholder' => 'example@site.com', 'class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Slaptažodis:') !!}
    {!! Form::password('password', array('placeholder' => '•••••••', 'class' => 'form-control')) !!}
</div>

{!! Form::submit('Prisijungti', array('class' => 'btn btn-info ')) !!}
    <a class="btn btn-link" href="{{ route('password.request') }}">
        Pamiršote slaptažodį?
    </a>
{!! Form::close() !!}
</div>
    @stop


@section('js')
    <script>
        document.getElementById("li-home").classList.remove("active");
        document.getElementById("li-login").classList.add("active");
    </script>
@stop