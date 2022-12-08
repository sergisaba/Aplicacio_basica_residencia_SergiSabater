<?php
include ('../db/conexion.php');

echo '
<br>
<h3>Dar de alta el familiar</h3>
<form>
  <div class="form-group">
    <label for="">Nombre familiar</label>
    <input type="text" class="form-control" id="nombref" placeholder="Nombre familiar">
  </div>

  <div class="form-group">
    <label for="">Contreseña familiar</label>
    <input type="password" class="form-control" id="passf" placeholder="Contraseña">
  </div>

<div class="form-group">
  <label for="">Teléfono familiar</label>
  <input type="text" class="form-control" id="telefonof" placeholder="Teléfono">
</div>

</form>
<button id="altafamiliar" class="btn btn-success" onclick="altafamilar()">Enviar</button> 
';
?>