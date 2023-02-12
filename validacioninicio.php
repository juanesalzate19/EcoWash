<?php 
 include("conexion.php");
 session_start();
 $usuario = "";
 $contrasena = "";
 $codigo = "";
 $nom = "";
 if(isset($_POST['btn-enviar'])){
    $usuario1 = $_POST['usuario'];
    $contrasena1 = $_POST['contrasena'];

    $consulta = "SELECT * FROM cliente WHERE  usuario ='$usuario1' AND contrasena = '$contrasena1'";

    $resultado = mysqli_query($conexion,$consulta);
    if ($usuario1 == "" || $contrasena1 == ""){
        echo "<script>alert('ASEGURATE DE LLENAR TODOS LOS CAMPOS');</script>"; 
        header ('refresh:0;url=login.php');
        return;
    }
    while($login = mysqli_fetch_assoc($resultado)){ 
    $usuario = $login['usuario'];
    $documento = $login['documento'];
    $contrasena = $login['contrasena'];
    $_SESSION['user'] = $login['usuario'];
    $_SESSION['doc'] = $login['documento'];
    $_SESSION['pass'] = $login['contrasena'];
}

if ( $usuario == $usuario1 && $contrasena == $contrasena1){
    echo "<script>alert( 'SESION INICIADA, BIENVENIDO ".$usuario."');</script>"; 
    header ('refresh:0;url=usuario.php?documento='.$_SESSION['doc'].'');
}else if($usuario1=="admin" && $contrasena1=="123" ){
    echo "<script>alert('SESION INICIADA,BIENVENIDO ADMINISTRADOR')</script>";
    header ('refresh:0;url=admin.php');
}else if($usuario <> $usuario1 || $contrasena <> $contrasena1){
    $consulta2 = "SELECT * FROM empleado WHERE  codigo ='$usuario1' AND contrasena = '$contrasena1'";
    $resultado2 = mysqli_query($conexion,$consulta2);
    while($login = mysqli_fetch_assoc($resultado2)){
        $nom = $login['nombre_e'];
        $codigo = $login['codigo'];    
        $contrasena = $login['contrasena'];
        $_SESSION['code'] = $login['codigo'];
        $_SESSION['pass'] = $login['contrasena'];
    }
    if ($usuario1 == $codigo && $contrasena == $contrasena){
        echo "<script>alert( 'SESION INICIADA, BIENVENIDO EMPLEADO ".$nom."');</script>"; 
        header ('refresh:0;url=calendarioEm.php?'.$_SESSION['code'].'');
    }else{
        echo "<script>alert('USUARIO O CONTRASEÑA INCORRECTA');</script>"; 
        header ('refresh:0;url=login.php');
    }
 }
}   

?>

