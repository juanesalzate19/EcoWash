<?php
	include("conexion.php");

	echo 
	'
	<table class="table table-hover"  style="color:black;">
	<tr>
	  <th scope="col">DOCUMENTO</th>
	  <th scope="col">PLACA</th>
	  <th scope="col">DIRECCION</th>
	  <th scope="col">COSTO</th>
	  <th scope="col">ESTADO</th>
	  <th scope="col">FECHA</th>
	  <th scope="col">EMPLEADO</th>
	  <th scope="col">CLIENTE</th>
	</tr>
	';
	$mi_busqueda = $_POST['mi_busqueda'];
	$doc = $_POST['documento'];
	$resultados = mysqli_query($conexion,"SELECT *,cliente.documento,citas.direccion FROM citas,cliente,empleado WHERE citas.documento=cliente.documento AND citas.c_empleado=empleado.codigo AND citas.documento='$doc' AND start LIKE '%$mi_busqueda%'");
	while($consulta = mysqli_fetch_array($resultados))
	{
		echo 
        '
        <tr  style="color:black;">
        <td>'.$consulta['documento'].'</td>
        <td>'.$consulta['placa'].'</td>
        <td>'.$consulta['direccion'].'</td>
        <td>'.$consulta['costo'].'</td>
        <td>'.$consulta['title'].'</td>
        <td>'.$consulta['start'].'</td>
        <td>'.$consulta['nombre_e'].'</td>
        <td>'.$consulta['nombre'].'</td>
          </tr>
        ';
	}	
  echo '</table>';
?>