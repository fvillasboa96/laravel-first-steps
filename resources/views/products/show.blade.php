@extends('layouts.master')

@section('content')

	<h1>Lista de Productos</h1>

	<h2>{{$product -> id}}</h2>
	<h2>{{$product -> title}}</h2>
	<h2>{{$product -> description}}</h2>
	<h2>{{$product -> price}}</h2>
	<h2>{{$product -> stock}}</h2>
	<h2>{{$product -> status}}</h2>

@endsection