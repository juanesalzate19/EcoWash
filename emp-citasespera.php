<?php
 include("conexion.php");
session_start();
$code=$_SESSION['code'];
$consult="SELECT * FROM empleado WHERE codigo='$code'";
$query=mysqli_query($conexion,$consult);
$row=mysqli_fetch_assoc($query);
?>
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
    <link rel="stylesheet" href="css/styleCitas.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="IMG/logo.png" type="image/x-icon">
    <script src="js/jquery.min.js"></script>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">EcoWash</span>
        </div>
        <ul class="nav-links">
        <li>
                <a href="emp-citasagendadas.php?codigo=<?php echo $code?>" >
                    <i class='uil-corner-up-left'></i>
                    <span class="links_name">VOLVER</span>
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
                <span class="dashboard"><?php echo $row['nombre_e']; ?></span>
            </div>
            
        </nav>
    <br><br><br><br><br>
<?php 

include('conexion.php')

?>
<div class="container">
        <div class="row">
        <div class="table-responsive">
            <div class="datos1 col-sm-12">
            <table class="table table-hover"  style="color:black;">
            <tr>
              <th scope="col">DOCUMENTO</th>
              <th scope="col">PLACA</th>
              <th scope="col">DIRECCION</th>
              <th scope="col">COSTO</th>
              <th scope="col">ESTADO</th>
              <th scope="col">FECHA Y HORA</th>
              <th scope="col">EMPLEADO</th>
              <th scope="col">CLIENTE</th>
              <th scope="col">REALIZADO</th>
            </tr>
 <?php    
        $resultados = mysqli_query($conexion,"SELECT *,cliente.documento,citas.direccion FROM citas,cliente,empleado WHERE citas.documento=cliente.documento AND citas.c_empleado=empleado.codigo AND citas.c_empleado='$code' AND title='espera'");
        while($consulta = mysqli_fetch_array($resultados))
        {
            echo 
        '
        <tr  style="color:black;">
        <td>'.$consulta['documento'].'</td>
        <td>'.$consulta['placa'].'</td>
        <td>'.$consulta['direccion'].'</td>
        <td>'.$consulta['costo'].'</td>
        <td>'.$consulta['title'].'</td>
        <td>'.$consulta['start'].'</td>
        <td>'.$consulta['nombre_e'].'</td>
        <td>'.$consulta['nombre'].'</td>
        <td><a href="realizado.php?start='.$consulta['start'].'"><button class="btn btn-outline-success">&nbsp;&nbsp;&nbsp;&nbsp;✔&nbsp;&nbsp;&nbsp;&nbsp;</button></a></td>
          </tr>
        ';

      }
?>
        </table>

            </div>
        </div>
    </div>
</div>
</section>
<script>
    function mi_busqueda()
    { 
    	buscar = document.getElementById('cuadro_buscar').value;
      var parametros =
      {
        "mi_busqueda" : buscar,
        "accion" : "4"
      };

      $.ajax({
        data: parametros,
        url: 'buscador_admin.php',
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