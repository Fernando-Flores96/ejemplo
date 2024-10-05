<html>
<head>
	<title>Mi Pagina</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<h1>Insertar Alumno</h1>
	<form action="insertar.php" method="post">
		<div class="form-group">
			<label for="id">ID:</label>
			<input type="number" class="form-control" name="id" required>
		</div>
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" class="form-control" name="nombre" required>
		</div>
		<div class="form-group">
			<label for="paterno">Apellido Paterno:</label>
			<input type="text" class="form-control" name="paterno" required>
		</div>
		<button type="submit" class="btn btn-primary">Insertar</button>
	</form>
</body>
</html>
	