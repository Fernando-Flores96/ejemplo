<?php 
include "conexion.inc.php";
$id=$_GET["id"];
$sql="select * from alumno where id=$id";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
$id=$fila["id"];
$nombre=$fila["nombre"];
$paterno=$fila["paterno"];

$resultadoD=mysqli_query($con, "select * from par_departamento");
$filaD=mysqli_fetch_array($resultadoD);
//header("Location: index.php")
?>
<html>
<head>
	<title>Mi Pagina</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<h1>Editar Alumno</h1>
	<form action="guardaeditar.php" method="GET">
		 <div class="mb-3">
			<label for="id" class="form-label">Id</label>
			<input type="text" class="form-control" id="id" name="id" value="<?php echo $id; ?>"  readonly>
		</div>
		 <div class="mb-3">
			<label for="nombre" class="form-label">Nombre</label>
			<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
		</div>
		<div class="mb-3">
			<label for="paterno" class="form-label">Paterno</label>
			<input type="text" class="form-control" id="paterno" name="paterno" value="<?php echo $paterno; ?>">
		</div>
		<div class="mb-3">
			<label for="fecnac" class="form-label">Fecha de Nacimiento</label>
			<input type="date" class="form-control" id="fecnac" name="fecnac" value="">
		</div>
		<div class="mb-3">
			<label for="depto" class="form-select">depto</label>
			<select name="depto">
				<?php 
				while($filaD=mysqli_fetch_array($resultadoD))
				{
					echo '<option value="'.$filaD["codigo"].'">'.$filaD["descripcion"].'</option>';
				}
				?>
			</select>
		</div>
		<input type="submit" name="Aceptar" value="Aceptar" class='btn btn-secondary'/>
		<input type="submit" name="Cancelar" value="Cancelar" class='btn btn-danger'"/>
	</form>
</body>
<html>