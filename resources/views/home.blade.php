@extends('base')

@section('content')
    <h1>Naujausios 10 aikštelių</h1>
    @foreach($newest_courts as $court)
        <a href="{{ url('aikstele/'. $court->id) }}"><h4>{{ $court->title }}</h4></a>
        {{ $court->address }}, {{ $court->city->title }}
    @endforeach
@stop