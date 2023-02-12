<?php
$fecha = $_GET['start'];
include "conexion.php";
$new="Cancelado";
$sql="UPDATE citas SET title='$new' WHERE start='$fecha'" ;
$query=mysqli_query($conexion,$sql);
if($query){
  echo "<script> alert('Cita cancelada correctamente')</script>";
    header("refresh:0;url=citasagendadas.php");
}
?>