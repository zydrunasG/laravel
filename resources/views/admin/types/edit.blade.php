@extends('base')

@section('content')
<h2>Tipo redagavimas</h2>

	@if($errors->any())
	@foreach($errors->all() as $error)
		{{ $error }}<br>
	@endforeach
	@endif
	<br>
	{!! Form::open(array('url' => 'admin/aiksteliu_tipai/'. $type->id, 'method' => 'put'))  !!}
	Pavadinimas:
	<br>
	{!! Form::text('title', $type->title) !!}
	<br>
	{!! Form::submit('Saugoti') !!}
	{!! Form::close() !!}
@stop