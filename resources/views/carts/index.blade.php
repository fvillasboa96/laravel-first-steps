@extends('layouts.app')
@section('content')
	<h1>Tu carrito</h1>
	@if($cart->productos->isEmpty())
		<div class="alert alert-danger">
			Tu carrito esta vacio
			<h1>Hola</h1>
		</div>
	@else
		<div class="row">
			
			@foreach($cart->productos as $producto)
				<div class="col-3">
					@include('components.products-card')
				</div>
			@endforeach
		</div>
	@endempty
@endsection