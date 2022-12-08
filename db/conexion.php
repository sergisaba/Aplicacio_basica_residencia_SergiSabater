<?php
// Conexión servidor
$server = "localhost";
$usr = "root";
$password = "";
$bbdd = "act5_residencia";
$conexion = mysqli_connect($server,$usr,$password,$bbdd);

if ($conexion === false) {
  die("Error en la conexión!".mysqli_connect_error());
}
?>
