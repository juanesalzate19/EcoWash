<?php
$doc=$_GET['documento'];
include ("conexion.php");

$resultado="DELETE FROM cliente WHERE documento='$doc'";
$query=mysqli_query($conexion,$resultado);
if($query){
    echo "<script>alert('DATOS ELIMINADOS')</script>";
    header("refresh:0;url=admin.php");
}else{
    echo "<script>alert('ERROR AL ELIMINAR')</script>";
    header("refresh:0;url=admin.php"); 
}
?>