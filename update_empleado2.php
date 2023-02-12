<?php
$cod = $_POST['codigo'];
$doc = $_POST['documento'];
$nom = $_POST['nombre_e'];
$cor = $_POST['correo'];
$tel = $_POST['telefono'];
$dir = $_POST['direccion'];
$cont = $_POST['contrasena'];
$confi = $_POST['confirmar'];

if($cod=="" || $doc=="" || $nom=="" || $cor=="" || $tel=="" || $dir=="" || $cont=="" || $confi==""){
    echo"<script> alert('CAMPOS VACIOS')</script>";
    header('refresh:0;url=editar_empleado.php?documento='.$doc.'');
}else{ 
  echo"
$cod
$doc
$nom 
$cor 
$tel 
$dir 
$cont 
";
    if($cont==$confi){
      include ("conexion.php");
      $sql="UPDATE empleado SET codigo='$cod', documento='$doc', nombre_e='$nom',  correo='$cor', telefono='$tel' , direccion='$dir', contrasena='$cont' WHERE documento='$doc'";
      $query=mysqli_query($conexion,$sql);
      if($query){
        echo "<script> alert('datos guardados')</script>";
        header('refresh:0;url=admin.php');
        }else{
          echo"<script> alert('CONTRASEÑAS DIFERENTES')</script>";
          header('refresh:0;url=editar_empleado.php?documento='.$doc.'');
        }
    }
}
?>