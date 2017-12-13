@extends('base')

@section('content')
<h2 class="page-header text-center">Naujas tipas</h2>

	@if($errors->any())
		@foreach($errors->all() as $error)
			{{ $error }}<br>
			@endforeach
		<br>
		@endif

	{!! Form::open(array('url' => 'admin/aiksteliu_tipai')) !!}
	<div class="form-group" style="font-size: larger;color: black">
	{!! Form::label('Pavadinimas') !!}
	{!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
	</div>
	{!! Form::submit('Saugoti', ['class' => 'btn btn-success']) !!}
	{!! Form::close() !!}
@stop

@section('js')
	<script>
        document.getElementById("li-home").classList.remove("active");
        document.getElementById("li-aiksteliu_tipai").classList.add("active");
	</script>
@stop