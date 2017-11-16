<h2>Registracija</h2>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
    </ul>
    @endif


    {!! Form::open(['url' => 'register']) !!}
    Vardas:
    <br>
    {!! Form::text('name', old('name')) !!}
    <br><br>
    El.pašto adresas
    <br>
    {!! Form::email('email', old('email')) !!}
    <br><br>
    Slaptažodis:
    <br>
    {!! Form::password('password') !!}
    <br><br>
    Pakartokite slaptažodį:
    <br>
    {!! Form::password('password_confirmation') !!}
    <br><br>
    <button type="submit">Registruotis</button>
    {!! Form::close() !!}