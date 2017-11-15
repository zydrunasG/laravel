@extends('base')

@section('content')
<h2>Nauja aikštelė</h2>


	@if($errors->any())
		@foreach($errors->all() as $error)
		{{ $error }}<br>
		@endforeach
	<br>
	@endif

	{!! Form::open(array('url' => 'admin/aiksteles')) !!}
	Pavadinimas:
	<br>
	{!! Form::text('title') !!}
	<br><br>
	Adresas:
	<br>
	{!! Form::text('address') !!}
	<br><br>
	Aprašymas:
	{!! Form::textarea('description') !!}
	<br><br>
	Tipas:
	<br>
	{!! Form::select('type_id', $types->pluck('title', 'id'), old('type_id')) !!}

	<br><br>
	Miestas:
	<br>
	{!! Form::select('city_id', $cities->pluck('title', 'id'), old('city_id')) !!}
	<br><br>
	{!! Form::submit('Saugoti') !!}

	{!! Form::close() !!}

@stop