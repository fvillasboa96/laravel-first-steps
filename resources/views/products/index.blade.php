@extends('layouts.app')

@section('content')

	<h1>Lista de Productos</h1>

	@empty($products)
		<div class="alert alert-warning">
			El elemento esta vacio
		</div>
	@else
		<a class="btn btn-success" href="{{ route('products.create') }}">Crear</a>
		<div class="table-responsive">
			<table class="table table-bordered">
			<thead class="thead-light">
				<tr>
					<th>ID</th>
					<th>Titulo</th>
					<th>Descricion</th>
					<th>Precio</th>
					<th>Stock</th>
					<th>Status</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)	
					<tr>
						<td>{{$product -> id}}</td>
						<td>{{$product -> title}}</td>
						<td>{{$product -> description}}</td>
						<td>{{$product -> price}}</td>
						<td>{{$product -> stock}}</td>
						<td>{{$product -> stock}}</td>
						<td>
							
							<a href="{{ route('products.show', ['product' => $product->id]) }}">Show</a>
							
							<a href="{{ route('products.edit', ['product' => $product->id]) }}">Edit</a>

							<form method="POST" action="{{ route('products.destroy', ['product'=> $product->id]) }}">
								
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-link" onclick="alert('Hola');">Delete</button>
							</form>

						</td>
					</tr>		
				@endforeach	
			</tbody>
		</table>
		</div>
	@endempty

@endsection
