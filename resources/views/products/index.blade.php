@extends('layouts.master')

@section('content')

	<h1>Lista de Productos</h1>

	@empty($products)
		<div class="alert alert-warning">
			El elemento esta vacio
		</div>
	@else
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
					</tr>		
				@endforeach	
			</tbody>
		</table>
		</div>
	@endempty

@endsection
