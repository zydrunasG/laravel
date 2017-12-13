@extends('base')

@section('content')
<h2 class="page-header text-center">Aikštelės redagavimas</h2>
	@if($errors->any())
		@foreach ($errors->all() as $error)
			{{ $error }}<br>
		@endforeach
		<br>
	@endif
<div style="color: black;font-size: larger">
	{!! Form::open(array('url' =>'admin/aiksteles/'. $court->id, 'method' => 'put')) !!}
	<div class="form-group">
	{!! Form::label('Pavadinimas:') !!}
	{!! Form::text('title', $court->title, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('Adresas:') !!}
	{!! Form::text('address', $court->address, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('Aprašymas:') !!}
	{!! Form::textarea('description', $court->description, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('Tipas:') !!}
	{!! Form::select('type_id', $types->pluck('title', 'id'), $court->type_id,  ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('Miestas:') !!}
	{!! Form::select('city_id', $cities->pluck('title', 'id'), $court->city_id,  ['class' => 'form-control']) !!}
	</div>
	{!! Form::submit('Saugoti', ['class' => 'btn btn-success']) !!}

	{!! Form::close() !!}
	</div>
@stop

@section('js')
	<script>
        document.getElementById("li-home").classList.remove("active");
        document.getElementById("li-aiksteles").classList.add("active");
	</script>
@stop