<?php
include("conexion.php");
echo 
'
    <table class="table table-hover">
        <tr>
            <th scope="col">PLACA</th>
            <th scope="col">DIRECCION</th>
            <th scope="col">COSTO</th>
            <th scope="col">ESTADO</th>
            <th scope="col">FECHA</th>
            <th scope="col">EMPLEADO</th>
            <th scope="col">CLIENTE</th>
            <th scope="col">MODIFICAR</th>
        </tr>

';
$mi_busqueda = $_POST['mi_busqueda'];
$result=mysqli_query($conexion,"SELECT *,cliente.documento,citas.direccion FROM citas,cliente,empleado WHERE citas.documento=cliente.documento AND citas.c_empleado=empleado.codigo AND title='realizado' AND start LIKE '%$mi_busqueda%'");while($consulta=mysqli_fetch_array($result)){
    echo 
        '
        <tr  style="color:black;">
            <td>'.$consulta['placa'].'</td>
            <td>'.$consulta['direccion'].'</td>
            <td>'.$consulta['costo'].'</td>
            <td>'.$consulta['title'].'</td>
            <td>'.$consulta['start'].'</td>
            <td>'.$consulta['nombre_e'].'</td>
            <td>'.$consulta['nombre'].'</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="eliminar_realizadas.php?id='.$consulta['id'].'"><img src="IMG/eliminar.jpeg" width="20px" height="20px"></a>||<a href="eliminar_realizadas.php?id='.$consulta['id'].'"><img src="IMG/editar.jpeg" width="20px" height="20px"></a></td>
        </tr>
    ';
}


?>