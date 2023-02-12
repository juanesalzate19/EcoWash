<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOWASH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>
    <script src="js/moment.min.js"></script>
    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/es.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="js/bootstrap-clockpicker.js"></script>
    <link rel="stylesheet" href="css/bootstrap-clockpicker.css">
    <link rel="stylesheet" href="css/styleRegistro.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="IMG/logo.png" type="image/x-icon">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<?php
function codigo($Length = 6){
    return substr(str_shuffle("1234567890"),0,$Length);
}
    $micodigo= codigo();
?> 
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">EcoWash</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="admin.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Administrador</span>
                </a>
            </li>
            <li>
                <a href="registroEmpleado.php" class="active">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Registro Empleado</span>
                </a>
            </li>
            <li class="log_out">
                <a href="index.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Cerrar sesión</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Bienvenido Administrador</span>
            </div>
        </nav>
        <br><br><br><br>
        <!-- Formulario de registro -->
        <div class="container ">
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="datos1 form signup col-sm-8">
                    <center><span class="title">Registro Empleado </span></center>
                    <form method="POST">
                        <div class="row">
                            <div class="col-sm-12">
                            <div class="input-field">
                                    <input type="text" name="codigo" placeholder="CODIGO" value="<?php echo $micodigo?>" readonly>
                                    <i class="bx bx-key" minlength="6" maxlength="10"></i>
                                </div>
                                <div class="input-field">
                                    <input type="text" name="documento" placeholder="Documento">
                                    <i class="uil uil-postcard" minlength="10" maxlength="30"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-field">
                                    <input type="text" name="nombre_e" placeholder="Nombre Completo">
                                    <i class="uil uil-user" minlength="10" maxlength="30"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-field">
                                    <input type="text" name="correo" placeholder="Correo">
                                    <i class="uil uil-at" minlength="10" maxlength="30"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-field">
                                    <input type="text" name="telefono" placeholder="Teléfono">
                                    <i class="uil uil-phone" minlength="10" maxlength="20"></i>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-field">
                                    <input type="text" name="direccion" placeholder="Dirección">
                                    <i class="uil uil-map-pin-alt" minlength="10" maxlength="30"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-field">
                                    <input type="password" name="contrasena" class="password"
                                        placeholder="Crear contraseña" minlength="6" maxlength="10">
                                    <i class="uil uil-lock icon"></i>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-field">
                                    <input type="password" class="password" name="confirmar"
                                        placeholder="Confirmar contraseña" minlength="6" maxlength="10">
                                    <i class="uil uil-lock icon"></i>
                                    <i class="uil uil-eye-slash showHidePw"></i>
                                </div>
                            </div>
                        </div>
                        <div class="input-field button">
                            <input type="submit" name="btn-enviar" value="Registrar">
                        </div>
                    </form>
                </div>
                <div class="col-sm-2">
                </div>
            </div>
        </div>
        <br><br>
    </section>
    <?php
    include("conexion.php");
    $documento="";    
    $nombre_e=""; 
    $correo="";
    $telefono="";
    $direccion="";
    $contrasena="";
    $confirmar ="";
    if(isset($_POST["btn-enviar"])){
        $codigo=$_POST["codigo"];
        $documento=$_POST["documento"];
        $nombre_e=$_POST ["nombre_e"];
        $correo=$_POST ["correo"];
        $telefono=$_POST ["telefono"];
        $direccion=$_POST ["direccion"];
        $contrasena=$_POST ["contrasena"];
        $confirmar = $_POST['confirmar'];

        if($codigo=="" || $documento=="" || $nombre_e=="" || $correo==""|| $telefono==""|| $direccion==""|| $contrasena==""||$confirmar==""){
            echo "<script>swal( 'CAMPOS OBLIGATORIOS','RELLENE TODOS LOS CAMPOS' ,'error')</script>";  
        }else{   
            if($contrasena==$confirmar){
                $consult="SELECT*FROM empleado WHERE documento='$documento'";
                $resultado=mysqli_query($conexion,$consult);
                while($log=mysqli_fetch_assoc($resultado)){
                $doc=$log['documento'];  
                }
                if($documento==$doc){
                    echo "<script>swal('DOCUMENTO YA INGRESADO ANTERIORMENTE','ESTE DOCUMENTO YA SE ENCUENTRA REGISTRADO' ,'error' )</script>"; 
                }else{
                    $res= $conexion ->prepare("insert into empleado(codigo,documento,nombre_e,correo,telefono,direccion,contrasena)values(?,?,?,?,?,?,?)");
                    $res->bind_param("iississ",$codigo,$documento,$nombre_e,$correo,$telefono,$direccion,$contrasena);
                    $res->execute();
                    echo "<script>swal( 'REGISTRO EXITOSO' ,'TUS DATOS HAN SIDO ALMACENADOS EN LA BASE DE DATOS' ,'success' )</script>"; 
            }   
    }else{
        echo "<script>swal( 'CONTRASEÑAS DIFERENTES','CONTRASEÑAS DIFERENTES VUELVA A INGRESARLAS Y ASEGÚRESE DE QUE SEAN LAS MISMAS' ,'error' )</script>";   
    }
    }
}
            ?> 
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>
    <script src="javascript/scriptlogin.js"></script>
 
    
</body>

</html>

