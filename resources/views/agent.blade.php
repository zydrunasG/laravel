@extends('base')

@section('content')
    <h2>Agent test</h2>
    @foreach($val as $v)
        {{ $v }}
        <br>
    @endforeach
    @stop