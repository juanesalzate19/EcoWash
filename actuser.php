<?php
include_once "conexion.php";
session_start();
$doc=$_SESSION['doc'];
$consult="SELECT * FROM cliente WHERE documento='$doc'";
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
                <a href="usuario.php??documento=<?php echo $doc; ?>" >
                    <i class='bx bx-calendar'></i>
                    <span class="links_name">Calendario</span>
                </a>
            </li>
            <li>
                <a href="citasagendadas.php??documento=<?php echo $doc; ?>">
                    <i class='bx bx-been-here'></i>
                    <span class="links_name" >Citas Agendadas</span>
                </a>
            </li>
            <li>
                <a href="actuser.php??documento=<?php echo $doc; ?>" class="active">
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
               <span><?php echo $row['usuario']; ?></span>
            </div>
            <div class="sidebar-button">
                <input type="button" class="act" id="btn_act" name="btn-enviar"  value="Actualizar Datos">
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




    <div class="container ">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="datos1 form signup col-sm-6">
            <center><img src="IMG/usuario.png" alt=""></center>
                <form action="update.php" method="POST">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-field">
                                <input type="text" id="documento" name="documento" placeholder="Documento" value="<?php echo $row['documento']; ?>" readonly minlength="10" maxlength="10">
                                <i class="uil uil-postcard"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-field">
                                <input type="text" id="usuario" name="usuario"  placeholder="Usuario" value="<?php echo $row['usuario']; ?>" readonly minlength="8" maxlength="20">
                                <i class="uil uil-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-field">
                                <input type="text" id="nombre" name="nombre" placeholder="Nombre Completo" value="<?php echo $row['nombre']; ?>" readonly minlength="10" maxlength="40">
                                <i class="uil uil-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-field">
                                <input type="text" id="correo" name="correo" placeholder="Correo" value="<?php echo $row['correo']; ?>" readonly minlength="10" maxlength="30">
                                <i class="uil uil-at"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="text" id="telefono" name="telefono" placeholder="Teléfono" value="<?php echo $row['telefono']; ?>" readonly minlength="10" maxlength="10">
                                <i class="uil uil-phone"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="text" id="direccion" name="direccion" placeholder="Dirección" value="<?php echo $row['direccion']; ?>" readonly minlength="10" maxlength="30">
                                <i class="uil uil-map-pin-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-field">
                                <input type="password" id="password" name="contrasena" class="password" placeholder="Crear contraseña" value="<?php echo $row['contrasena']; ?>" readonly minlength="6" maxlength="10">
                                <i class="uil uil-lock icon"></i>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-12">
                            <div class="input-field" id="text_password" hidden>
                                <input type="password" id="confirmar" name="confirmar" class="password" placeholder="Confirmar contraseña" readonly minlength="6" maxlength="10">
                                <i class="uil uil-lock icon"></i>
                                <i class="uil uil-eye-slash showHidePw"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="input-field button">
                        <input type="submit" id="btn_enviar" name="btn-enviar" value="Actualizar" hidden>
                    </div>
                </form>

                <script src="javascript/scriptlogin.js"></script>


<script>
    const btn_act = document.getElementById('btn_act');
    const btn_enviar = document.getElementById('btn_enviar');
    let doc = document.getElementById('documento');
    let usu = document.getElementById('usuario');
    let nom = document.getElementById('nombre');
    let cor = document.getElementById('correo');
    let tel = document.getElementById('telefono');
    let dir = document.getElementById('direccion');
    let pas = document.getElementById('password');
    let con = document.getElementById('confirmar');
    let text = document.getElementById('text_password');
    btn_act.addEventListener("click",()=>{
        btn_enviar.removeAttribute('hidden');
        text.removeAttribute("hidden");
        usu.removeAttribute("readonly");
        nom.removeAttribute("readonly");
        cor.removeAttribute("readonly");
        tel.removeAttribute("readonly");
        dir.removeAttribute("readonly");
        pas.removeAttribute("readonly");
        con.removeAttribute("readonly");
    });



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
<script>

  //busqueda de usuarios 
    	function mi_busqueda1()
    { 
    	buscar = document.getElementById('buscador_usuario').value;
      var parametros = 
      {
        "mi_busqueda" : buscar,
        "documento" : "<?php echo $doc?>"
      };

      $.ajax({
        data: parametros,
        url: 'codigo_usuario.php',
        type: 'POST',
        
        beforesend: function()
        {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mostrar_mensaje').html(mensaje);
        }
      });
    }
      //busqueda de empleados
    function mi_busqueda2()
    { 
    	buscar = document.getElementById('buscador_usuario').value;
      var parametros = 
      {
        "mi_busqueda" : buscar,
        "documento" : "<?php echo $doc?>"
      };

      $.ajax({
        data: parametros,
        url: 'codigo_usuario.php',
        type: 'POST',
        
        beforesend: function()
        {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mostrar_mensaje').html(mensaje);
        }
      });
    }
      //busqueda de realizadas 
    function mi_busqueda3()
    { 
    	buscar = document.getElementById('buscador_usuario').value;
      var parametros = 
      {
        "mi_busqueda" : buscar,
        "documento" : "<?php echo $doc?>"
      };

      $.ajax({
        data: parametros,
        url: 'codigo_usuario.php',
        type: 'POST',
        
        beforesend: function()
        {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mostrar_mensaje').html(mensaje);
        }
      });
    }
      //busqueda de cancelados
    function mi_busqueda4()
    { 
    	buscar = document.getElementById('buscador_usuario').value;
      var parametros = 
      {
        "mi_busqueda" : buscar,
        "documento" : "<?php echo $doc?>"
      };

      $.ajax({
        data: parametros,
        url: 'codigo_usuario.php',
        type: 'POST',
        
        beforesend: function()
        {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mostrar_mensaje').html(mensaje);
        }
      });
    }
      //busqueda de espera
    function mi_busqueda5()
    { 
    	buscar = document.getElementById('buscador_usuario').value;
      var parametros = 
      {
        "mi_busqueda" : buscar,
        "documento" : "<?php echo $doc?>"
      };

      $.ajax({
        data: parametros,
        url: 'codigo_usuario.php',
        type: 'POST',
        
        beforesend: function()
        {
          $('#mostrar_mensaje').html("Mensaje antes de Enviar");
        },

        success: function(mensaje)
        {
          $('#mostrar_mensaje').html(mensaje);
        }
      });
    }
</script>

</body>

</html>


