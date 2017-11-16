<h2>Prisijungimas</h2>
<br><br>
{!! Form::open(['url' => 'login']) !!}
El.pašto adresas:
<br>
{!! Form::email('email', old('email')) !!}
<br><br>
SlaptažodisL
<br>
{!! Form::password('password') !!}
<br><br>
<button type="submit">Prisijungti</button>
{!! Form::close() !!}