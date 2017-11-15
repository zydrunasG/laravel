@extends('base')

@section('content')
<h2>Aikštelės redagavimas</h2>
	@if($errors->any())
		@foreach ($errors->all() as $error)
			{{ $error }}<br>
		@endforeach
		<br>
	@endif

	{!! Form::open(array('url' =>'admin/aiksteles/'. $court->id, 'method' => 'put')) !!}
	Pavadinimas:
	<br>
	{!! Form::text('title', $court->title) !!}
	<br><br>
	Adresas:
	<br>
	{!! Form::text('address', $court->address) !!}
	<br><br>
	Aprašymas:
	<br>
	{!! Form::textarea('description', $court->description) !!}
	<br><br>
	Tipas:
	<br>
	{!! Form::select('type_id', $types->pluck('title', 'id'), $court->type_id) !!}
	<br><br>
	Miestas:
	<br>
	{!! Form::select('city_id', $cities->pluck('title', 'id'), $court->city_id) !!}
	<br><br>
	{!! Form::submit('Saugoti') !!}

	{!! Form::close() !!}
@stop