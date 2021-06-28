@extends('layouts.main')

@section('content')

<h1>My movie database</h1>

<div id="app"></div>

<script src="{{ mix('js/random-movie.js') }}"></script>

@endsection