<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sdf REC</title>
</head>
<body>
	<!-- @dump($errors) -->
	<!-- Muestra el error almacenado en la sesion -->
	<!-- @if(session()->has('error'))
		<div class="alert alert-danger">
			{{ session()->get('error') }}
		</div>
	@endif -->

	@if(session()->has('success'))
		<div class="alert alert-success">
			{{ session()->get('success') }}
		</div>
	@endif

	<!-- Muestra la lista de errores de validacion en formato lista -->	
	@if(isset($errors) && $errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	@yield('content')
</body>
</html>