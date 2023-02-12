<?php
 include("conexion.php");
session_start();
$code=$_SESSION['code'];
$consult="SELECT * FROM empleado WHERE codigo='$code'";
$query=mysqli_query($conexion,$consult);
$row=mysqli_fetch_assoc($query);

?>
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

    <style>
    <?php include "css/styleCalendario.css"?>
    </style>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="IMG/logo.png" type="image/x-icon">


    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="IMG/logo.png" type="image/x-icon">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
  
<div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">EcoWash</span>
        </div>
        <ul class="nav-links">
        <li>
                <a href="calendarioEm.php?codigo=<?php echo $code?>" >
                    <i class='bx bx-been-here'></i>
                    <span class="links_name">Calendario</span>
                </a>
            </li>
            <li>
                <a href="emp-citasagendadas.php?codigo=<?php echo $code?>" >
                    <i class='bx bx-been-here'></i>
                    <span class="links_name">Citas Agendadas</span>
                </a>
            </li>
            <li>
                <a href="actuempleado.php?codigo=<?php echo $code?>" class="active">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Empleado</span>
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
                <span class="dashboard">Bienvenido </span>&nbsp;&nbsp;  
                <span class="dashboard"> <?php echo $row['nombre_e'];?></span>
             </div>
               
    
        </nav>
        <br><br><br><br><br>

    <div class="container ">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="datos1 form signup col-sm-6">
                <center><img src="IMG/usuario.png" alt=""></center>
                <form action="update_empleado.php" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="text" name="codigo" placeholder="codigo" value="<?php echo $row['codigo']; ?>" readonly >
                                <i class="bx bx-key"></i>
                            </div>
                        </div>
                   
                    
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="text" name="documento" placeholder="documento" value="<?php echo $row['documento']; ?>" minlength="10" maxlength="10">
                                <i class="uil uil-postcard"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-field">
                                <input type="text" name="nombre_e" placeholder="Nombre Completo" value="<?php echo $row['nombre_e']; ?>" minlength="10" maxlength="30">
                                <i class="uil uil-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-field">
                                <input type="text" name="correo" placeholder="Correo" value="<?php echo $row['correo']; ?>" minlength="10" maxlength="30">
                                <i class="uil uil-at"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="text" name="telefono" placeholder="Teléfono" value="<?php echo $row['telefono']; ?>" minlength="10" maxlength="10">
                                <i class="uil uil-phone"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="text" name="direccion" placeholder="Dirección" value="<?php echo $row['direccion']; ?>" minlength="10" maxlength="30">
                                <i class="uil uil-map-pin-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="password" name="contrasena" class="password" placeholder="Crear contraseña" value="<?php echo $row['contrasena']; ?>" minlength="6" maxlength="10">
                                <i class="uil uil-lock icon"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="password" class="password" name="confirmar" placeholder="Confirmar contraseña" minlength="6" maxlength="10">
                                <i class="uil uil-lock icon"></i>
                                <i class="uil uil-eye-slash showHidePw"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-field button">
                        <input type="submit" name="btn-enviar" value="Actualizar">
                    </div>
                </form>

                <script src="javascript/scriptlogin.js"></script>
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

    var nuevoevento;
    $('#btnagregar').click(function () {
        RecolectarDatosGUI();
        EviarInformacion('agregar', nuevoevento);

    });
    
</script>


</body>

</html>


