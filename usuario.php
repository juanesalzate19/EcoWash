<?php
include_once "conexion.php";
session_start();
$doc = $_SESSION['doc'];
$sql = "SELECT * FROM cliente WHERE documento='$doc'";
$query = mysqli_query($conexion,$sql);
$row=mysqli_fetch_assoc($query);
$usu = $row['documento'];
$fechaActual = date ( 'Y-m-d' ); 
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
                <a href="usuario.php?documento=<?php echo $doc; ?>" class="active">
                    <i class='bx bx-calendar'></i>
                    <span class="links_name">Calendario</span>
                </a>
            </li>
            <li>
                <a href="citasagendadas.php?documento=<?php echo $doc; ?>">
                    <i class='bx bx-been-here'></i>
                    <span class="links_name">Citas Agendadas</span>
                </a>
            </li>
            <li>
                <a href="actuser.php?documento=<?php echo $doc; ?>">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Usuario</span>
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
                <span>
                    <?php echo $row['usuario']; ?>
                </span>
            </div>
            <div class="sidebar-button">
                <input type="button" class="act" data-toggle="modal" data-target="#modaleventos" value="+ AGENDAR CITA">
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
                    eventLimit: true, // for all non-agenda views
                    header: {
                        left: 'prev',
                        center: 'title',
                        right: 'next',
                    },

                    events: 'http://localhost/ecowash/calendar.php',
                    eventClick: function (calEvent, jsEvent, view) {
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modaleventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="container">
                        <div class="form signup">
                            <div class="modal-header">
                                <span class="title modal-title">AGENDAR CITA</span>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="input-field">
                                            <input type="date" name="fecha" min="<?php echo $fechaActual ?>" placeholder="Fecha">
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
                                                    placeholder="Placa" minlength="6" maxlength="6">
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
                                    <div class="col-sm-12">
                                        <div class="input-field">
                                            <select name="codigo" class="form-control text-center">
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
            </div>
        </div>
    </section>
    <?php
        include("conexion.php");
        $placa="";
        $direccion=""; 
        $fecha=""; 
        $hora=""; 
        $codigo="";
        $documento ="";
        $start ="";
        if(isset($_POST["Agregar"])){
            $placa=$_POST["placa"];
            $direccion=$_POST ["direccion"];
            $fecha=$_POST ["fecha"];
            $codigo=$_POST ["codigo"];
            $documento=$_POST ["documento"];
            $fecha= $_POST['fecha'];
            $hora = $_POST['hora'];
            $date = $fecha.' '.$hora.':00';
            if($placa=="" || $direccion=="" || $fecha=="" || $codigo==""|| $documento=="" || $hora=="00:00"){
                echo "<script>swal( 'CAMPOS OBLIGATORIOS','RELLENE TODOS LOS CAMPOS' ,'error')</script>";  
            }else{
                    $consult="SELECT*FROM citas WHERE start='$date'";
                    $resultado=mysqli_query($conexion,$consult);
                    while($log=mysqli_fetch_assoc($resultado)){
                        $start=$log['start'];                   
                    }if($date==$start){
                        echo"<script> swal('HORARIO OCUPADO', 'SELECCIONE OTRA HORA PARA SU CITA', 'error');  </script>";                      
            }else{
                $res= $conexion ->prepare("INSERT INTO citas(placa,direccion,costo,title,start,c_empleado,documento)values(?,?,1000,'Espera',?,?,?)");
                $res->bind_param("sssii",$placa,$direccion,$date,$codigo,$documento);
                $res->execute();
                echo"<script> swal('CITA AGENDADA', 'SU CITA FUE AGENDADA  PARA EL: $date', 'success');  </script>"; 
        
            }
        }
    }
?>
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