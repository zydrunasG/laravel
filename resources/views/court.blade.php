@extends('base')

@section('content')
    <h2 class="text-center page-header">Aikštelė: {{ $court->title }}</h2>

    <ul class="list-group">
        <li class="list-group-item list-group-item-heading list-group-item-info"><h3>Adresas</h3></li>
        <li class="list-group-item">{{ $court->address }}, {{ $court->city->title }}</li>
        <p></p>
        <li class="list-group-item list-group-item-heading list-group-item-info"><h3>Aprašymas</h3></li>
        <li class="list-group-item">{{ $court->description}}</li>
    </ul>

    <br><br>
    <p>{{ $court->descripttion }}</p>
    @stop