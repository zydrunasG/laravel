@extends('base')

@section('content')
<h2 class="page-header text-center">Naujas miestas</h2>

@if($errors->any())
	@foreach($errors->all() as $error)
	{{ $error }}<br>
	@endforeach
	<br>
	@endif

	{!! Form::open(array('url' => 'admin/miestai')) !!}

    <div class="form-group"style="color: black;font-size: larger">
		{!! Form::label('Pavadinimas') !!}
		{!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
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