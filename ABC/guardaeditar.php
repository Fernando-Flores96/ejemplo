<?php 
include "conexion.inc.php";
$id=$_GET["id"];
$nombre=$_GET["nombre"];
$paterno=$_GET["paterno"];
$sql="update alumno set nombre='$nombre', paterno='$paterno' where id=$id";
mysqli_query($con, $sql);
header("Location: index.php")
?>