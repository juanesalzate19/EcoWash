<?php
$host="localhost";
$usuario="root";
$pass="";
$base_datos="ecowash";


$tabla_db1 = "citas"; 	   			
$tabla_db2 = "cliente"; 
$tabla_db3 = "empleado";


$conexion=new mysqli($host,$usuario,$pass,$base_datos);
if($conexion->connect_error){
    echo"error en conexion";
    exit();
}
?>