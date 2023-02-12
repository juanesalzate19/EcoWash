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
    <link rel="stylesheet" href="css/styleCalendario.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="IMG/logo.png" type="image/x-icon">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">EcoWash</span>
        </div>
        <ul class="nav-links">
        <li>
                <a href="calendarioEm.php?codigo=<?php echo $code?>" class="active">
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
                <a href="actuempleado.php?codigo=<?php echo $code?>" >
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
                <span class="dashboard">Bienvenido</span>
                &nbsp;&nbsp;
               <span><?php echo $row['nombre_e']; ?></span>
            </div>
            
        </nav>
        <br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div id="CalendarioWeb"></div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $('#CalendarioWeb').fullCalendar({
                    eventLimit: true,
                    header: {
                        left: 'prev',
                        center: 'title',
                        right: 'next'
                    },

            
                    events: 'http://localhost/pruebaphp/calendar.php',
                    eventClick: function (calEvent, jsEvent, view) {
                        $('#ID1').val(calEvent.id);
                        $('#PLACA1').val(calEvent.placa);
                        $('#DIRECCION1').val(calEvent.direccion);
                        $('#COSTO1').val(calEvent.costo);
                        $('#ESTADO1').val(calEvent.estado);
                        FechaHora = calEvent.start._i.split(" ");
                        $('#FECHA1').val(FechaHora[0]);
                        $('#HORA1').val(FechaHora[1]);
                        $('#CODIGO1').val(calEvent.c_empleado);
                        $('#DOCUMENTO1').val(calEvent.documento);
                        $("#modaleventos1").modal();
                    }
                });
            })
        </script>

        <div class="modal fade" id="modaleventos1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="container">
                        <div class="form signup">
                            <div class="modal-header">
                                <span class="title modal-title">CITA AGENDADA</span>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-field">
                                            <input type="text" id="FECHA1" placeholder="Fecha1" readonly>
                                            <i class="uil uil-calendar-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-field" data-autoclose="true">
                                            <input type="text" id="HORA1" placeholder="Hora1" readonly>
                                            <i class="uil uil-clock"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-field">
                                            <input type="text" id="DOCUMENTO1" name="documento1" placeholder="Documento"
                                                readonly>
                                            <i class="uil uil-postcard"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-field">
                                            <input type="text" class="text-uppercase" id="PLACA1" name="placa1"
                                                placeholder="Placa" readonly>
                                            <i class="uil uil-credit-card"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-field">
                                            <input type="text" id="DIRECCION1" class="text-capitalize" name="direccion1"
                                                placeholder="Direccion" readonly>
                                            <i class="uil uil-map-pin-alt"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-field">
                                        <input type="text" value='<?php echo $row['nombre_e']; ?>' readonly>
                                            <i class="uil uil-map-pin-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
        
</body>

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
</html>