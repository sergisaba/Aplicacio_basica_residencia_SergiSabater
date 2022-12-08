<?php
include ('../db/conexion.php');

if(isset($_POST['blog'])){

    $usuari = $_POST['usuari'];
    $password = $_POST['contrasenya'];


    if ($usuari != "admin") {//familiar

        $sql = "SELECT COUNT(*) as usr FROM `familiar` WHERE nom LIKE '$usuari' AND passwd LIKE '$password' ";
        $execute = $conexion->query($sql)->fetch_row();
    
            if ($execute[0] == 1) {
                    echo'<br>';
                    echo'<br>';
                    echo '<div class="col-md-6 container">
                    <h2> Usuari: '.$usuari.'</h2>
                    <br>
                    <h3>Dades del familiar</h3>';
                    
                    $sql = "SELECT r.nom as nomr, r.cognom1, r.cognom2, r.lat, r.longt, f.nom as nomf, f.telefon FROM resident r join familiar f ON r.id_familiar = f.id WHERE f.nom = '$usuari'";
                    $execute = mysqli_query($conexion, $sql);
                   
                   echo '<table class="table table-striped" style="margin-top:5px;">
                   <thead>
                       <tr class="active">
                           <th>Nombre</th>
                           <th>1r Apellido</th>
                           <th>2do Apellido</th>
                           <th>Latitud</th>
                           <th>Longitud</th>
                       </tr>
                   </thead>';
                   while($fila = mysqli_fetch_array($execute)){
                       echo'<tbody>
                           <td>'.$fila['nomr'].'</td>
                           <td>'.$fila['cognom1'].'</td>
                           <td>'.$fila['cognom2'].'</td>
                           <td>'.$fila['lat'].'</td>
                           <td>'.$fila['longt'].'</td>
                       </tbody>';
                   }
                   echo '</table>';

                   echo'
                   <br>
                   <h3>Envianos un mensaje</h3>
                   <form>
                    <div class="form-group">
                        <label for="">Asunto</label>
                        <input type="text" class="form-control" id="asunto" placeholder="Asunto">
                    </div>

                    <div class="form-group">
                        <label for="">Escribe tu mensaje</label>
                        <textarea class="form-control" rows="3" id="cuerpo" placeholder="Mensaje"></textarea>
                    </div>

                    </form>
                    <button id="mensaje" class="btn btn-success" onclick="enviarmensaje()">Enviar</button><br><br>
                   ';
                }else{
                echo '<div class="container">
                <p style="color: red; font-size: 20px;">Login incorrecte!</p>
                </div>';
            }
            
    }else
    {//admin
        
        $sql = "SELECT COUNT(*) as usr FROM `administrador` WHERE usuari LIKE '$usuari' AND passwd LIKE '$password'";
        $execute = $conexion->query($sql)->fetch_row();

        if ($execute[0] == 1) {
            echo'<br>';
            echo'<br>';
            echo '<div class="col-md-6 container">
            <h2> Usuari: '.$usuari.'</h2>
            <br><br>
            <button id="blog" class="btn btn-primary" onclick="mostrartodo()">Ver todos los datos</button><br><br>';
            echo '<button id="balta" class="btn btn-success" onclick="alta()">Dar de alta</button>';
            echo'</div>';
            echo '<div class="col-md-6" id="mostrar"></div>';
            echo'<div id ="pro"></div>';
        }else{
            echo '<div class="container">
            <p style="color: red; font-size: 20px;">Login incorrecte!</p>
            </div>';
        }
    }
}

?>