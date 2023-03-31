@extends('layouts.master')

@section('content')

	<h1>Crear producto</h1>
	<a class="btn btn-primary" href="{{ route('productos.create') }}">Crear</a>
	<form method="POST" action="{{ route('productos.store') }}">
		@csrf
		<div class="form-row">
			<label>Title</label>
			<input class="form-control" type="text" name="title" required>
		</div>
		<div class="form-row">
			<label>Descripcion</label>
			<input class="form-control" type="text" name="description" required>
		</div>
		<div class="form-row">
			<label>Price</label>
			<input class="form-control" type="number" min="1.00" step="0.01" name="price" required>
		</div>
		<div class="form-row">
			<label>Stock</label>
			<input class="form-control" type="number" min="0"  name="stock" required>
		</div>
		<div class="form-row">
			<label>Status</label>
			<select class="custom-select" name="status">
				<option value="" selected>Select...</option>
				<option value="available">Available</option>
				<option value="unavailable">Unavailable</option>
			</select>
		</div>

		<div class="form-row">
			<button type="submit" class="btn btn-primary btn-lg">Crear Producto</button>
		</div>
	</form>
@endsection