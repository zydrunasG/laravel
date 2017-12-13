@extends('base')

@section('content')
<h2 class="text-center page-header">Miestai</h2>

<table class="table">
<tr>
	<th>Miestas</th>
	<th>Veiksmai</th>
</tr>
@if ($cities->count() > 0)
	@foreach ($cities as $city)
	<tr>
		<td>{{ $city->title }}</td>
		<td>
			<a href="{{ url('admin/miestai/' . $city->id . '/edit') }}"><button class="btn btn-primary">Redaguoti</button></a>
			<form style="display:inline" 
				action="{{ url('admin/miestai/' . $city->id) }}" method="post" 
				onsubmit="return confirm('Ar tikrai?')">
				<input type="hidden" name="_method" value="DELETE" />
				{{ csrf_field() }}
				<input type="submit" value="Trinti" class="btn btn-danger"/>
			</form>
		</td>
	</tr>
	@endforeach
@else
<tr>
	<td colspan="2" class="align-center">Duomenų nėra.</td>
</tr>
@endif
</table>
<br />
<a href="{{ url('admin/miestai/create') }}"><button class="btn btn-success">Naujas Miestas</button></a>
@stop


@section('js')
	<script>
        document.getElementById("li-home").classList.remove("active");
        document.getElementById("li-miestai").classList.add("active");
	</script>
@stop