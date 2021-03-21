@extends('layout.main')
@section('content')
<img src="http://localhost/nd/nd_10calc/calculator/public/img/download.png">
<h1>Atsakymas</h1>
<h1> {{ $number1 / $number2 }} </h1>
@endsection
@section('title') Calculator @endsection