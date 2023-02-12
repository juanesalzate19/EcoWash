<?php
$id = $_GET['id'];
include_once "conexion.php";
$sql = "SELECT * FROM citas WHERE id='$id'";
$query = mysqli_query($conexion,$sql);
$row=mysqli_fetch_assoc($query);
$usu = $row['documento'];
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
    <link rel="stylesheet" href="css/styleCalendario.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="IMG/logo.png" type="image/x-icon">
    <link href='fullcalendar/main.css' rel='stylesheet' />
    <script src='fullcalendar/main.js'></script>
    <link rel="stylesheet" href="js/bootstrap-datetimepicker.min.css">
</head>
<body>
<div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">EcoWash</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="admin.php">
                    <i class='uil-corner-up-left'></i>
                    <span class="links_name">Volver</span>
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
        <div class="container ">
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="datos1 form signup col-sm-8">
                    <div class="container">
                        <div class="form signup">
                            <div class="modal-header">
                                <span class="title modal-title">EDITAR CITA</span>
                            </div>
                            <form method="POST" action="update_cita.php?id=<?php echo $id ?>">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="input-field">
                                                <input type="date" name="fecha" placeholder="Fecha">
                                                <i class="uil uil-calendar-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="input-field">
                                                <select name="hora" class="text-center" style=" position: absolute;
                                                height: 100%;
                                                width: 100%;
                                                padding: 0 35px;
                                                border: none;
                                                outline: none;
                                                font-size: 16px;
                                                border-bottom: 2px solid #ccc;
                                                border-top: 2px solid transparent;
                                                transition: all 0.2s ease;">
                                                    <option value="00:00" selected>00:00</option>
                                                    <option value="08:00">08:00</option>
                                                    <option value="09:00">09:00</option>
                                                    <option value="10:00">10:00</option>
                                                    <option value="11:00">11:00</option>
                                                    <option value="12:00">12:00</option>
                                                    <option value="13:00">13:00</option>
                                                    <option value="14:00">14:00</option>
                                                    <option value="15:00">15:00</option>
                                                    <option value="16:00">16:00</option>
                                                    <option value="17:00">17:00</option>
                                                </select>
                                                <i class="uil uil-clock"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="input-field">
                                                <input type="text" name="documento" placeholder="Documento"
                                                    value="<?php echo $row['documento']; ?>" readonly>
                                                <i class="uil uil-postcard"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="input-field">
                                                <input type="text" class="text-uppercase" name="placa"
                                                value="<?php echo $row['placa']; ?>" placeholder="Placa">
                                                <i class="uil uil-credit-card"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="input-field">
                                                <input type="text" name="direccion" placeholder="Direccion"
                                                    value="<?php echo $row['direccion']; ?>">
                                                <i class="uil uil-map-pin-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="input-field">
                                                <select name="title" style=" position: absolute;
                                                height: 100%;
                                                width: 100%;
                                                padding: 0 35px;
                                                border: none;
                                                outline: none;
                                                font-size: 16px;
                                                border-bottom: 2px solid #ccc;
                                                border-top: 2px solid transparent;
                                                transition: all 0.2s ease;">
                                                    <option value="">Estado</option>
                                                    <option value="Realizado">Realizado</option>
                                                    <option value="Espera">Espera</option>
                                                    <option value="Cancelado">Cancelado</option>
                                                </select>
                                                <i class="uil-label"></i>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="input-field">
                                                <input type="number" class="text-uppercase" name="costo" id="" value="<?php echo $row['costo']; ?>">
                                                <i class="bx bx-money"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-field">
                                            <select name="codigo" class=" text-center" style=" position: absolute;
                                                height: 100%;
                                                width: 100%;
                                                padding: 0 35px;
                                                border: none;
                                                outline: none;
                                                font-size: 16px;
                                                border-bottom: 2px solid #ccc;
                                                border-top: 2px solid transparent;
                                                transition: all 0.2s ease;">
                                                <option value="" selected></option>
                                                <?php
                                            include ("conexion.php");
                                            $consult = "SELECT * FROM empleado";
                                            $resul = mysqli_query($conexion,$consult);
                                            while ($log=mysqli_fetch_assoc($resul)){
                                            echo "<option value=".$log['codigo'].">".$log['nombre_e']."</option>"; 
                                            }
                                        ?>
                                            </select>
                                            <i class="uil uil-hard-hat"></i>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="input-field button">
                                            <input type="submit" name="Agregar" value="AGENDAR">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <div class="col-sm-2">
            </div>
        </div>
    </div>
    <script>
    let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function () {
sidebar.classList.toggle("active");
if (sidebar.classList.contains("active")) {
    sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
}else{
sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
}
</script>
                <script src="javascript/scriptlogin.js"></script>
</body>
</html>