@extends('base')

@section('content')
<h2>Aikštelių tipai</h2>

<table class="table table-striped
">
<tr>
	<th>Tipas</th>
	<th>Veiksmai</th>
</tr>
@if ($types->count() > 0)
	@foreach ($types as $type)
	<tr>
		<td>{{ $type->title }}</td>
		<td>
			<a href="{{ url('admin/aiksteliu_tipai/' . $type->id . '/edit') }}"><button class="btn btn-primary">Regaduoti</button></a>
			<form style="display:inline" 
				action="{{ url('admin/aiksteliu_tipai/' . $type->id) }}" method="post" 
				onsubmit="return confirm('Ar tikrai?')">
				<input type="hidden" name="_method" value="DELETE" />
				{{ csrf_field() }}
				<input type="submit" value="Trinti" class="btn btn-danger" />
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
<a href="{{ url('admin/aiksteliu_tipai/create') }}"><button class="btn btn-success">Naujas Tipas</button></a>
@stop