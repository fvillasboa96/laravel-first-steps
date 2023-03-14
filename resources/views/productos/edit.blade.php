@extends('layouts.master')

@section('content')

	<h1>Editar producto</h1>
	<form method="POST" action="{{ route('productos.update', ['producto' => $producto->id]) }}">
		@csrf
		@method('PUT')
		<div class="form-row">
			<label>Title</label>
			<input class="form-control" type="text" name="title" value="{{ $producto->title }}" required>
		</div>
		<div class="form-row">
			<label>Descripcion</label>
			<input class="form-control" type="text" name="description" value="{{ $producto->description }}" required>
		</div>
		<div class="form-row">
			<label>Price</label>
			<input class="form-control" type="number" min="1.00" step="0.01" name="price" value="{{ $producto->price }}" required>
		</div>
		<div class="form-row">
			<label>Stock</label>
			<input class="form-control" type="number" min="0"  name="stock" value="{{ $producto->stock }}" required>
		</div>
		<div class="form-row">
			<label>Status</label>
			<select class="custom-select" name="status">
				<option {{ $producto->status == 'available' ? 'selected' : '' }} value="available">Available</option>
				<option {{ $producto->status == 'unavailable' ? 'selected' : '' }} value="unavailable">Unavailable</option>
			</select>
		</div>

		<div class="form-row">
			<button type="submit" class="btn btn-primary btn-lg">Editar Producto</button>
		</div>
	</form>
@endsection