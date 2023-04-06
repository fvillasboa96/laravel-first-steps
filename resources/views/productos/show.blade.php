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
						@include('components.products-card')
					</tr>
			</tbody>
		</table>
	@endif
@endsection