<div class="card">

	<div class="card-body">
		<h5 class="text-right"><strong>{{ $producto->price }}</strong></h5>
		<h5 class="card-title"><strong>{{ $producto->title }}</strong></h5>
		<h5 class="card-text"><strong>{{ $producto->description }}</strong></h5>
		<h5 class="card-text"><strong>{{ $producto->stock }}</strong></h5>
		<form class="d-inline" 
			method="POST" 
			action="{{ route('productos.carts.store', ['producto' => $producto->id]) }}">
			
			@csrf
			<button type="submit" class="btn btn-primary">Agregar al carrito</button>

		</form>
	</div>
</div>