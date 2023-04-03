@extends('layouts.app')
@section('content')

	<h1>Encabezado</h1>
	<a class="btn btn-primary" href="{{ route('productos.create') }}">Crear</a>
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
					<td>Acciones</td>
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
						<td>
							<a class="btn btn-primary" href="{{ route('productos.show', ['producto'=> $producto->id]) }}">Mostrar</a>
							<a class="btn btn-primary" href="{{ route('productos.edit', ['producto'=> $producto->id]) }}">Editar</a>

							<form method="POST" action="{{ route('productos.destroy', ['producto' => $producto->id]) }}">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger">ELIMINAR</button>
							</form>

						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@endempty
@endsection