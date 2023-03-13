@extends('layouts.master')
@section('content')

	<h1>Encabezado</h1>
	@empty($productos)
	<div>
		<p>Vino Vacio</p>
	</div>
	@else
		<table>
			<thead>
				<tr>
					<td>title</td>
					<td>description</td>
					<td>price</td>
					<td>stock</td>
					<td>status</td>
				</tr>
			</thead>
			<tbody>
				@foreach ($productos as $producto)
					<tr>
						<td>{{ $producto->id }}</td>
						<td>{{ $producto->title }}</td>
						<td>{{ $producto->description }}</td>
						<td>{{ $producto->price }}</td>
						<td>{{ $producto->stock }}</td>
						<td>{{ $producto->status }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@endempty
@endsection