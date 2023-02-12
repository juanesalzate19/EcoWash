<script>
    function confirmar(){
        let conf = confirm("¿ESTAS SEGURO DE CANCELAR LA CITA?");
        if(conf==true){
            return true;
        }else{
            return false;
        }
    }
</script>
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
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap-clockpicker.js"></script>
    <link rel="stylesheet" href="css/bootstrap-clockpicker.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="IMG/logo.png" type="image/x-icon">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<style>
    <?php include("css/styleadmin.css");?>
</style>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">EcoWash</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="admin.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Administrador</span>
                </a>
            </li>
            <li>
                <a href="registroEmpleado.php">
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
            <div class="tab-content">
                <br>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="container my-3">
                       
                        <div class="search-box">
                            <input type="text" placeholder="Buscar... Por documento" class="col form-control" id="buscador_empleados"
                                onkeypress="mi_busqueda1();">
                            <i class="bx bx-search"></i>
                        </div>
                        <br>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="container my-3">
                        <div class="search-box">
                            <input type="text" placeholder="Buscar... Por documento" class="col form-control" id="buscador_usuarios"
                                onkeypress="mi_busqueda2();">
                            <i class="bx bx-search"></i>
                        </div>
                        <br>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-conta" role="tabpanel" aria-labelledby="pills-conta-tab">
                    <div class="container my-3">
                        <div class="search-box">
                            <input type="text" placeholder="Buscar... Por fecha" class="col form-control" id="buscador_realizados"
                                onkeypress="mi_busqueda3();">
                            <i class="bx bx-search"></i>
                        </div>
                        <br>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-con" role="tabpanel" aria-labelledby="pills-con-tab">
                    <div class="container my-3">
                       
                        <div class="search-box">
                            <input type="text" placeholder="Buscar... Por fecha" class="col form-control" id="buscador_cancelados"
                                onkeypress="mi_busqueda4();">
                            <i class="bx bx-search"></i>
                        </div>
                        <br>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-cont" role="tabpanel" aria-labelledby="pills-con-tab">
                    <div class="container my-3">
                      
                        <div class="search-box">
                            <input type="text" placeholder="Buscar...  Por fecha" class="col form-control" id="buscador_espera"
                                onkeypress="mi_busqueda5();">
                            <i class="bx bx-search"></i>
                        </div>
                        <br>
                    </div>
                </div>

                
            </div>
        </nav>
        <div class="home-content">
            <div class="overview-boxes">
                <ul class="nav mb-3" id="pills-tab" role="tablist">
                    <div class="box" id="box_empleados" data-bs-toggle="pill" data-bs-target="#pills-profile" role="tab"
                        aria-controls="pills-profile" aria-selected="false" name="btn-calif" onclick="saludame(1)">
                        <div class="right-side">
                            <div class="box-topic">Total Empleados</div>
                            <div class="number">
                                <?php
                                    include ("conexion.php");
                                    $cont_empleado=0;
                                    $consul1 = "SELECT * FROM empleado";
                                    $res1 = mysqli_query($conexion,$consul1);
                                    while ($log=mysqli_fetch_assoc($res1)){
                                    $cont_empleado= $cont_empleado + 1;
                                }
                                echo $cont_empleado;
                                    ?>
                            </div>
                            <div class="indicator">
                                <i class='uil uil-hard-hat'></i>
                            </div>
                        </div>
                        <i class='bx bx-cart-alt cart'></i>
                    </div>
                    &nbsp;&nbsp;
                    <div class="box" id="box_clientes" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"
                        name="btn-docen" onclick="saludame(2);">
                        <div class="right-side">
                            <div class="box-topic">Total Clientes Registrados</div>
                            <div class="number">
                                <?php
                                    include ("conexion.php");
                                    $cont_cliente=0;
                                    $consul2 = "SELECT * FROM cliente";
                                    $res2 = mysqli_query($conexion,$consul2);
                                    while ($log=mysqli_fetch_assoc($res2)){
                                    $cont_cliente = $cont_cliente + 1;
                                }
                                echo $cont_cliente;
                                    ?>
                            </div>
                            <div class="indicator">
                                <i class='bx bx-up-arrow-alt'></i>
                            </div>
                        </div>
                        <i class='bx bxs-cart-add cart two'></i>
                    </div>
                    &nbsp;&nbsp;
                    <div class="box" id="box_realizados" id="pills-conta-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-conta" role="tab" aria-controls="pills-conta" aria-selected="false"
                        name="btn-estuden" onclick="saludame(3);">
                        <div class="right-side">
                            <div class="box-topic">Total Servicios Realizados</div>
                            <div class="number">
                                <?php
                                    include ("conexion.php");
                                    $cont_realizado=0;
                                    $consul3 = "SELECT * FROM citas WHERE title='realizado'";
                                    $res3 = mysqli_query($conexion,$consul3);
                                    while ($log=mysqli_fetch_assoc($res3)){
                                    $cont_realizado = $cont_realizado + 1;
                                    }
                                    echo $cont_realizado;
                                ?>
                            </div>
                            <div class="indicator">
                                <i class='bx bx-up-arrow-alt'></i>
                            </div>
                        </div>
                        <i class='bx bx-cart cart three'></i>
                    </div>
                    &nbsp;&nbsp;
                    <div class="box" id="box_cancelados" id="pills-con-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-con" role="tab" aria-controls="pills-con" aria-selected="false"
                        name="btn-aprobados" onclick="saludame(4);">
                        <div class="right-side">
                            <div class="box-topic">Total Servicios Cancelados</div>
                            <div class="number">
                                <?php
            include ("conexion.php");
            $cont_cancelado=0;
            $consul4 = "SELECT * FROM citas WHERE title='cancelado'";
            $res4 = mysqli_query($conexion,$consul4);
            while ($log=mysqli_fetch_assoc($res4)){
              $cont_cancelado = $cont_cancelado + 1;
           }
           echo $cont_cancelado;?>
                            </div>
                            <div class="indicator">
                                <i class='bx bx-down-arrow-alt down'></i>
                            </div>
                        </div>
                        <i class='bx bxs-cart-download cart four'></i>
                    </div>
                    &nbsp;&nbsp;
                    <div class="box" id="box_cancelados" id="pills-con-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-cont" role="tab" aria-controls="pills-con" aria-selected="false"
                        name="btn-aprobados" onclick="saludame(5);">
                        <div class="right-side">
                            <div class="box-topic">Total Servicios En Espera</div>
                            <div class="number">
                                <?php
            include ("conexion.php");
            $cont_cancelado=0;
            $consul4 = "SELECT * FROM citas WHERE title='Espera'";
            $res4 = mysqli_query($conexion,$consul4);
            while ($log=mysqli_fetch_assoc($res4)){
              $cont_cancelado = $cont_cancelado + 1;
           }
           echo $cont_cancelado;?>
                            </div>
                            <div class="indicator">
                                <i class='uil-clock-nine'></i>
                            </div>
                        </div>
                        <i class='bx bxs-cart-add cart two'></i>
                    </div>
                </ul>
            </div>
            <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-12">
                        <div class="table-responsive">
                            <div id="mostrar_mensaje"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

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
        function saludame(boton) {
            accion = boton;
            var parametros =
            {
                "accion": accion
            };
            $.ajax({
                data: parametros,
                url: "codigo.php",
                type: 'POST',

                beforesend: function () {
                    $('#mostrar_mensaje').html("Mensaje Antes De Enviar");
                },
                success: function (mensaje) {
                    $('#mostrar_mensaje').html(mensaje);
                }
            });
        }
        const btn_empleados = document.getElementById('box_empleados');
        const btn_clientes = document.getElementById('box_clientes');
        const btn_realizados = document.getElementById('box_realizados');
        const btn_cancelados = document.getElementById('box_cancelados');
        btn_empleados.addEventListener("click", saludame(1));
        btn_clientes.addEventListener("click", saludame(2));
        btn_realizados.addEventListener("click", saludame(3));
        btn_cancelados.addEventListener("click", saludame(4));




        function mi_busqueda1() {
            buscar = document.getElementById("buscador_empleados").value;
            var parametros = {
                "mi_busqueda": buscar
            }
            $.ajax({
                data: parametros,
                url: 'codigo_adm-emp.php',
                type: 'POST',
                beforesend: function () {
                    $("#mostrar_mensaje").html("mensaje antes de enviar");
                },
                success: function (mensaje) {
                    $("#mostrar_mensaje").html(mensaje);
                }
            });
        }

        function mi_busqueda2() {
            buscar = document.getElementById("buscador_usuarios").value;
            var parametros = {
                "mi_busqueda": buscar
            }
            $.ajax({
                data: parametros,
                url: 'codigo_adm-usu.php',
                type: 'POST',
                beforesend: function () {
                    $("#mostrar_mensaje").html("mensaje antes de enviar");
                },
                success: function (mensaje) {
                    $("#mostrar_mensaje").html(mensaje);
                }
            });
        }

        function mi_busqueda3() {
            buscar = document.getElementById("buscador_realizados").value;
            var parametros = {
                "mi_busqueda": buscar
            }
            $.ajax({
                data: parametros,
                url: 'codigo_adm-rea.php',
                type: 'POST',
                beforesend: function () {
                    $("#mostrar_mensaje").html("mensaje antes de enviar");
                },
                success: function (mensaje) {
                    $("#mostrar_mensaje").html(mensaje);
                }
            });
        }

        function mi_busqueda4() {
            buscar = document.getElementById("buscador_cancelados").value;
            var parametros = {
                "mi_busqueda": buscar
            }
            $.ajax({
                data: parametros,
                url: 'codigo_adm-can.php',
                type: 'POST',
                beforesend: function () {
                    $("#mostrar_mensaje").html("mensaje antes de enviar");
                },
                success: function (mensaje) {
                    $("#mostrar_mensaje").html(mensaje);
                }
            });
        }

        function mi_busqueda5() {
            buscar = document.getElementById("buscador_espera").value;
            var parametros = {
                "mi_busqueda": buscar
            }
            $.ajax({
                data: parametros,
                url: 'codigo_adm-esp.php',
                type: 'POST',
                beforesend: function () {
                    $("#mostrar_mensaje").html("mensaje antes de enviar");
                },
                success: function (mensaje) {
                    $("#mostrar_mensaje").html(mensaje);
                }
            });
        } 
    </script>

</body>

</html>