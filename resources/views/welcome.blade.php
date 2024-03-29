@extends('layouts.app')
@section('content')
	<h1>Welcome</h1>
	@empty($productos)
		<div class="alert alert-danger">
			No hay Productos
			<h1>Hola</h1>
		</div>
	@else
		<div class="row">
			
			@foreach($productos as $producto)
				<div class="col-3">
					@include('components.products-card')
				</div>
			@endforeach
		</div>
	@endempty
@endsection