@extends('base')

@section('content')
    <h2 class="page-header text-center">Apie projektą puslapis</h2>
    @stop


@section('js')
    <script>
        document.getElementById("li-home").classList.remove("active");
        document.getElementById("li-apie").classList.add("active");
    </script>
    @stop