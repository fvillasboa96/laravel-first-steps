@extends('layouts.app')

@section('content')

	<h1>Formulario de Registro</h1>

	<form method="POST" action="{{ route('products.store') }}">
		@csrf
		<div class="form-row">
			<label>Titulo</label>
			<input class="form-control" type="text" name="title" value="{{ old('title') }}">
		</div>
		<div class="form-row">
			<label>Descripcion</label>
			<input class="form-control" type="text" name="description" value="{{ old('description') }}">
		</div>
		<div class="form-row">
			<label>Price</label>
			<input class="form-control" type="number" min="1.00" step="0.01" name="price" value="{{ old('price') }}">
		</div>

		<div class="form-row">
			<label>Stock</label>
			<input class="form-control" type="number" min="0" name="stock" value="{{ old('stock') }}">
		</div>
		<div class="form-row">
			<label>Status</label>
			<select class="custom-select" name="status">
				<option value="" selected>Seleccionar</option>
				<option {{old('status') == 'available' ? 'selected' : ''}} value="available" selected>Available</option>
				<option {{old('status') == 'available' ? 'selected' : ''}} value="unavailable" selected>Unavailable</option>
			</select>
		</div>
		<div class="form-row">
			<button type="submit" class="btn btn-primary btn-lg">Crear Producto</button>
		</div>
	</form>

@endsection