@extends('base')

@section('content')
<h2 class="text-center page-header">Miesto redagavimas</h2>


	@if($errors->any())
		@foreach($errors->all() as $error)
			{{ $error }}<br>
			@endforeach
		<br>
		@endif

	{!! Form::open(array('url' =>'admin/miestai/' . $city->id, 'method' => 'put')) !!}

	<div class="form-group" style="font-size: larger;color: black">
		{!! Form::label('Pavadinimas') !!}
		{!! Form::text('title',$city->title, ['class' => 'form-control']) !!}
	</div>

	{!! Form::submit('Saugoti', ['class' => 'btn btn-success']) !!}
	{!! Form::close() !!}
@stop


@section('js')
	<script>
        document.getElementById("li-home").classList.remove("active");
        document.getElementById("li-miestai").classList.add("active");
	</script>
@stop