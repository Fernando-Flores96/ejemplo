<?php 
include "conexion.inc.php";
$sql="select * from alumno";
$resultado=mysqli_query($con, $sql);
?>
<html>
<head>
	<title>Mi Pagina</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="miestilo.css">
</head>
<body>
    <header>
        <h1>Mi Página de Ejemplo</h1>
    </header>
	
	<nav>
		<ul>
			<li><a href="index.php">Alumno</a></li>
			<li><a href="docente.php">Docente</a></li>
			<li><a href="materia.php">Materia</a></li>
		</ul>
    </nav>
	
	<main>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<h1>Alumno</h1>
		<table class="table table-striped">
			<thead>
			<tr>	
				<th scope="col">id</th>
				<th scope="col">nombre</th>
				<th scope="col">paterno</th>
				<th scope="col">Operaciones</th>
			</tr>
			</thead>
			<tbody class="table-group-divider">
			<?php
			while($fila=mysqli_fetch_array($resultado))
			{
				echo "<tr>";
				echo "<td scope='row'>$fila[id]</td>";
				echo "<td scope='row'>$fila[nombre]</td>";
				echo "<td scope='row'>$fila[paterno]</td>";
				echo "<td scope='row'>";
				echo "<a class='btn btn-secondary' href='editar.php?id=$fila[id]'>Editar</a>";
				echo "<a class='btn btn-danger' href='eliminar.php?id=$fila[id]'>Eliminar</a>";
				echo "</td>";
				echo "</tr>";
			}
			?>
			</tbody>
		</table>
		<a class="btn btn-primary" href='nuevo.php'>Nuevo</a>
	</main>
</body>
</html>