@extends('layouts.app')

@section('content')

<h1>Encabezado</h1>
<!--Se puede añadir un empty directo en vez de un if-->
	@if(empty($producto))
		<div>
			<p>Vino Vacio</p>
		</div>
	@else
		<table>
			<thead>
				<tr>
					<td>id</td>
					<td>title</td>
					<td>description</td>
					<td>price</td>
					<td>stock</td>
					<td>status</td>
				</tr>
			</thead>
			<tbody>
					<tr>
						<td>{{ $producto->id }}</td>
						<td>{{ $producto->title }}</td>
						<td>{{ $producto->description }}</td>
						<td>{{ $producto->price }}</td>
						<td>{{ $producto->stock }}</td>
						<td>{{ $producto->status }}</td>
					</tr>
			</tbody>
		</table>
	@endif
@endsection