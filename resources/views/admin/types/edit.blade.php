@extends('base')

@section('content')
<h2 class="text-center page-header">Tipo redagavimas</h2>

	@if($errors->any())
	@foreach($errors->all() as $error)
		{{ $error }}<br>
	@endforeach
	@endif

	{!! Form::open(array('url' => 'admin/aiksteliu_tipai/'. $type->id, 'method' => 'put'))  !!}

	<div class="form-group">
		{!! Form::label('Pavadinimas') !!}
		{!! Form::text('title', $type->title, ['class' => 'form-control']) !!}
	</div>
	<br>
	{!! Form::submit('Saugoti', ['class' => 'btn btn-success']) !!}
	{!! Form::close() !!}
@stop

@section('js')
	<script>
        document.getElementById("li-home").classList.remove("active");
        document.getElementById("li-aiksteliu_tipai").classList.add("active");
	</script>
@stop