@extends('layouts.app')

@section('content')

	<h1>Crear producto</h1>
	<a class="btn btn-primary" href="{{ route('productos.create') }}">Crear</a>
	<form method="POST" action="{{ route('productos.store') }}">
		@csrf
		<div class="form-row">
			<label>Title</label>
			<input class="form-control" type="text" name="title" value="{{ old('title') }}" required>
		</div>
		<div class="form-row">
			<label>Descripcion</label>
			<input class="form-control" type="text" name="description" value="{{ old('description') }}" required>
		</div>
		<div class="form-row">
			<label>Price</label>
			<input class="form-control" type="number" min="1.00" step="0.01" name="price" value="{{ old('price') }}" required>
		</div>
		<div class="form-row">
			<label>Stock</label>
			<input class="form-control" type="number" min="0"  name="stock" value="{{ old('stock') }}" required>
		</div>
		<div class="form-row">
			<label>Status</label>
			<select class="custom-select" name="status" required>
				<option value="" selected>Select...</option>
				<option {{ old('status') == 'available' ? 'selected' : '' }} value="available" >Available</option>
				<option {{ old('status') == 'unavailable' ? 'selected' : '' }} value="unavailable">Unavailable</option>
			</select>
		</div>

		<div class="form-row">
			<button type="submit" class="btn btn-primary btn-lg">Crear Producto</button>
		</div>
	</form>
@endsection