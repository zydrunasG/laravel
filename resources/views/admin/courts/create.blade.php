@extends('base')

@section('content')
<h2 class="page-header text-center">Nauja aikštelė</h2>


	@if($errors->any())
		@foreach($errors->all() as $error)
		{{ $error }}<br>
		@endforeach
	<br>
	@endif

	{!! Form::open(array('url' => 'admin/aiksteles')) !!}
	<div class="form-group">
	{!! Form::label('Pavadinimas') !!}
	{!! Form::text('title', null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('Aresas:') !!}
	{!! Form::text('address', null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('Aprašymas:') !!}
	{!! Form::textarea('description', null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('Tipas:') !!}
	{!! Form::select('type_id', $types->pluck('title', 'id'), old('type_id'), ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('Miestas:') !!}
	{!! Form::select('city_id', $cities->pluck('title', 'id'), old('city_id'), ['class' => 'form-control']) !!}
	</div>


	{!! Form::submit('Saugoti', ['class' => 'btn btn-success']) !!}

	{!! Form::close() !!}

@stop