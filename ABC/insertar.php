<?php 
include "conexion.inc.php";
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$sql = "INSERT INTO alumno (id, nombre, paterno) VALUES ('$id', '$nombre', '$paterno')";
mysqli_query($con, $sql);
header("Location: index.php")
?>