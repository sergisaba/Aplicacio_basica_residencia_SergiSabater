<?php

include ('../db/conexion.php');

echo '
<br>
<h3>Alta residente asignada al familiar</h3>
<form>
  <div class="form-group">
    <label for="">Nombre residente</label>
    <input type="text" class="form-control" id="nombrer" placeholder="Nombre resindete">
  </div>

    <div class="form-group">
    <label for="">Primer apellido del residente</label>
    <input type="text" class="form-control" id="apellido1" placeholder="Primer apellido del residente">
    </div>

    <div class="form-group">
    <label for="">Segundo apellido del residente</label>
    <input type="text" class="form-control" id="apellido2" placeholder="Segundo apellido del residente">
    </div>

</form>
<button id="Baltaresidente" class="btn btn-success" onclick="altaresidente()">Enviar</button> 

';

include ('../db/conexion.php');

if (isset($_POST['Baltafamiliar'])) {
    
    $nombre = $_POST['nombref'];
    $pass = $_POST['passf'];
    $telef = $_POST['telef'];
  
    $sql = "INSERT INTO `familiar`(`nom`, `passwd`, `telefon`) 
    VALUES ('$nombre','$pass','$telef')";
    $execute = mysqli_query($conexion, $sql);
  
}

if (isset($_POST['Baltaresidente'])) {

    $nombre_r = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $lat = $_POST['lat'];
    $long = $_POST['long'];

    $sql = "SELECT MAX(id) as maximo from familiar";
    $execute = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_array($execute);
    $id = $fila['maximo'];

    $sql = "INSERT INTO `resident`(`nom`, `cognom1`, `cognom2`, `lat`, `longt`, `id_familiar`) 
    VALUES ('$nombre_r','$apellido1','$apellido2','$lat','$long','$id')";
    $execute = mysqli_query($conexion, $sql);
}

if(isset($_POST['Bmensaje'])){
  $asunto = $_POST['asunto'];
  $cuerpo = $_POST['cuerpo'];
  $usuario = $_POST['usuario'];

  $sql = "INSERT INTO `mensajes`(`asunto`, `cuerpo`, `usuario`) 
  VALUES ('$asunto','$cuerpo','$usuario')";
  $execute = mysqli_query($conexion, $sql);
}
?>
