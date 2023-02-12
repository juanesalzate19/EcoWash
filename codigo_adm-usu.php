<?php
include("conexion.php");
    echo 
        '
            <table class="table table-hover">
            <tr>
            <th scope="col">DOCUMENTO</th>
            <th scope="col">USUARIO</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">CORREO</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">DIRECCION</th>
            <th scope="col">CONTRASEÑA</th>
            <th scope="col">MODIFICAR</th>
            </tr>

            ';
    $mi_busqueda = $_POST['mi_busqueda'];
    $result=mysqli_query($conexion,"SELECT * FROM cliente WHERE documento LIKE '%$mi_busqueda%'");
    while($consulta=mysqli_fetch_array($result)){
    echo
        '
        <tr>
        <td>'.$consulta["documento"].'</td>
        <td>'.$consulta["usuario"].'</td>
        <td>'.$consulta["nombre"].'</td>
        <td>'.$consulta["correo"].'</td>
        <td>'.$consulta["telefono"].'</td>
        <td>'.$consulta["direccion"].'</td>
        <td>'.$consulta["contrasena"].'</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="eliminar_usuario.php?documento='.$consulta['documento'].'"><img src="IMG/eliminar.jpeg" width="20px" height="20px"></a>||<a href="eliminar_usuario.php?documento='.$consulta['documento'].'"><img src="IMG/editar.jpeg" width="20px" height="20px"></a></td>
        </tr>
        ';
    }


?>