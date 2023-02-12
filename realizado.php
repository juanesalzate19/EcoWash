<?php
$fecha = $_GET['start'];
include "conexion.php";
$new="Realizado";
$sql="UPDATE citas SET title='$new' WHERE start='$fecha'" ;
$query=mysqli_query($conexion,$sql);
if($query){
  echo "<script> alert('Cita Actualizada Correctamente')</script>";
    header("refresh:0;url=emp-citasagendadas.php");
}
?>