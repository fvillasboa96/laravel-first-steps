<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hola</title>
</head>
<body>
<h1>Encabezado</h1>
@if(empty($producto))
<div>
	VACIO
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
</body>
</html>