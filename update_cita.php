<?php

$id=$_GET["id"];
$placa=$_POST["placa"];
$direccion=$_POST ["direccion"];
$fecha=$_POST ["fecha"];
$codigo=$_POST ["codigo"];
$documento=$_POST ["documento"];
$hora = $_POST['hora'];
$costo=$_POST['costo'];
$title = $_POST['title'];
$date = $fecha.' '.$hora.':00';


if($placa=="" || $direccion=="" || $fecha=="" || $codigo==""|| $documento=="" || $hora=="00:00" || $title==""){
    echo"<script> alert('CAMPOS VACIOS')</script>";
    header('refresh:0;url=editar_cita.php?id='.$id.''); 
}else{
    include ("conexion.php");
    $consult="SELECT*FROM citas WHERE start='$date'";
    $resultado=mysqli_query($conexion,$consult);
    while($log=mysqli_fetch_assoc($resultado)){
        $start=$log['start'];                   
    }if($date==$start){
        echo"<script> alert('HORARIO OCUPADO')</script>";
        header('refresh:0;url=editar_cita.php?id='.$id.'');                     
}else{
    echo"
$id
$placa
$direccion
$fecha
$codigo
$documento
$hora
$date 

";
$sql="UPDATE citas SET placa='$placa', documento='$documento', direccion='$direccion', c_empleado='$codigo' ,start='$date',title='$title',costo='$costo' WHERE id='$id'";
$query=mysqli_query($conexion,$sql);
if($query){
    echo "<script> alert('datos guardados')</script>";
    header('refresh:0;url=admin.php');
        }

    }
}
 
      
     

?>