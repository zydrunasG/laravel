@extends('base')

@section('content')
    <h2>Aikštelė: {{ $court->title }}</h2>
    {{ $court->address }}, {{ $court->city->title }}
    <br><br>
    <p>{{ $court->descripttion }}</p>
    @stop