<?php
  $doc = $_POST['documento'];
  $usu = $_POST['usuario'];
  $nom = $_POST['nombre'];
  $cor= $_POST['correo'];
  $tel = $_POST['telefono'];
  $dir = $_POST['direccion'];
  $cont = $_POST['contrasena'];
  $confi = $_POST['confirmar'];

  if($usu=="" || $doc=="" || $nom=="" || $cor=="" || $tel=="" || $dir=="" || $cont=="" || $confi==""){
    echo"<script> alert('CAMPOS VACIOS')</script>";
    header('refresh:0;url=actuser.php');
}else{
    if($cont==$confi){
        include "conexion.php";
        $sql="UPDATE cliente SET documento='$doc', usuario='$usu', nombre='$nom', correo='$cor', telefono='$tel' , direccion='$dir', contrasena='$cont' WHERE documento=$doc";
        $query=mysqli_query($conexion,$sql);
        if($query){
            echo "<script> alert('datos guardados')</script>";
            header('refresh:0;url=actuser.php');
        }
    }else{
        echo"<script> alert('CONTRASEÑAS DIFERENTES')</script>";
        header('refresh:0;url=actuser.php');
      }
}

?>


