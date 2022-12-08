<?php
include ('../db/conexion.php');
 $sql = "SELECT r.nom as nomr, r.cognom1, r.cognom2, r.lat, r.longt, f.nom as nomf, f.telefon FROM resident r join familiar f ON r.id_familiar = f.id";
 $execute = mysqli_query($conexion, $sql);

echo'<h3>Residentes</h3>';
echo '<table class="table table-striped" style="margin-top:5px;">
<thead>
    <tr class="active">
        <th>Nombre</th>
        <th>1r Apellido</th>
        <th>2do Apellido</th>
        <th>Latitud</th>
        <th>Longitud</th>
        <th>Nombre familiar</th>
        <th>Contacto</th>
    </tr>
</thead>';
while($fila = mysqli_fetch_array($execute)){
    echo'<tbody>
        <td>'.$fila['nomr'].'</td>
        <td>'.$fila['cognom1'].'</td>
        <td>'.$fila['cognom2'].'</td>
        <td>'.$fila['lat'].'</td>
        <td>'.$fila['longt'].'</td>
        <td>'.$fila['nomf'].'</td>
        <td>'.$fila['telefon'].'</td>
    </tbody>';
}

?>