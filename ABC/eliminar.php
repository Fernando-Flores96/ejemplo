<?php 
include "conexion.inc.php";
$id=$_GET["id"];
$sql="delete from alumno where id=$id";
mysqli_query($con, $sql);
header("Location: index.php")
?>