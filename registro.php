<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOWASH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylelogin.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="IMG/logo.png" type="image/x-icon">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<nav class="barra navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand text-center" href="index.php">
                <img src="IMG/logo.png" alt="" width="60" height="50" class="">
                <br>
                <p>EcoWash</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="lista navbar-nav">
                    <li class="nav-item">
                        <a class="" href="index.php">¿Quienes Somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="index.php">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="registro.php">Registrate</a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="login.php">Ingresar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <!-- Formulario de registro -->
    <div class="container ">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="datos1 form signup col-sm-6">
                <center><span class="title">Registrate</span></center>
                <form method="POST">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-field">
                                <input type="text" name="documento" placeholder="Documento" minlength="10" maxlength="10">
                                <i class="uil uil-postcard"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-field">
                                <input type="text" name="usuario" placeholder="Usuario" minlength="10" maxlength="20">
                                <i class="uil uil-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-field">
                                <input type="text" name="nombre" placeholder="Nombre Completo" minlength="10" maxlength="60">
                                <i class="uil uil-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-field">
                                <input type="email" name="correo" placeholder="Correo">
                                <i class="uil uil-at"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="text" name="telefono" placeholder="Teléfono" minlength="10" maxlength="10">
                                <i class="uil uil-phone"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="text" name="direccion" placeholder="Dirección" minlength="5" maxlength="30">
                                <i class="uil uil-map-pin-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="password" name="contrasena" class="password" placeholder="Crear contraseña" minlength="6" maxlength="10">
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
                        <input type="submit" class="btn-regs"  name="btn-enviar" value="Registrar">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">¿Ya estás registrado?
                        <a href="login.php" class="text login-link">Ingresar ahora</a>
                    </span>
                    <br><br>
                </div>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
    <br><br>
    <script src="javascript/scriptlogin.js"></script>
    <footer class="barra2 text-white text-center text-lg-start">
        <div class="container p-1">
            <div class="row mt-4">
                <div class="col-sm-4">
                    <h5 class="text-uppercase">EcoWash</h5>
                    <p>
                    Siempre disponible para una limpieza impecable.
                    </p>
                    <p>
                     Trabajamos con esfuerzo,espuma y corazon.
                    </p>
                </div>
                <div class="col-sm-4">
                    <ul>
                        <h5 class="text-uppercase mb-4"> Contactanos</h5>
                        <li class="mb-3">
                            <span class="ms-2">MEDELLIN</span>
                        </li>
                        <li class="mb-3">
                            <span class="ms-2">EcoWash@gmail.com</span>
                        </li>
                        <li class="mb-3">
                            <span class="ms-2">+57 234 567 88</span>
                        </li>
                    </ul>
                    <div>
                        <a type="button" class="btns btn btn-floating" href="https://www.instagram.com" Target="_blank"><img src="IMG/ig.png"></a>
                        <a type="button" class="btns btn btn-floating" href="https://www.facebook.com" Target="_blank"><img src="IMG/fb.png"></a>
                        <a type="button" class="btns btn btn-floating" href="https://web.whatsapp.com" Target="_blank"><img src="IMG/wpp.png"></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h5 class="text-uppercase mb-4">Horarios de atencion</h5>
                    <table class="table text-center text-white">
                        <tbody>
                            <tr>
                                <td>Mon - Thu:</td>
                                <td>8am - 5pm</td>
                            </tr>
                            <tr>
                                <td>Fri - Sat:</td>
                                <td>8am - 1am</td>
                            </tr>
                            <tr>
                                <td>Sunday:</td>
                                <td>9am - 10pm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <p>&copy; EcoWash 2022</p>
        </div>
    </footer> 
    <?php
        include("conexion.php");
        $documento="";    
        $usuario="";
        $nombre=""; 
        $correo="";
        $telefono="";
        $direccion="";
        $contrasena="";
        $confirmar = "";
        if(isset($_POST["btn-enviar"])){
            $documento=$_POST["documento"];
            $usuario=$_POST ["usuario"];
            $nombre=$_POST ["nombre"];
            $correo=$_POST ["correo"];
            $telefono=$_POST ["telefono"];
            $direccion=$_POST ["direccion"];
            $contrasena=$_POST ["contrasena"];
            $confirmar = $_POST['confirmar'];
            if($documento=="" || $usuario=="" || $nombre=="" || $correo==""|| $telefono==""|| $direccion==""|| $contrasena==""||$confirmar==""){
                echo "<script>swal( 'CAMPOS OBLIGATORIOS','RELLENE TODOS LOS CAMPOS' ,'error')</script>";  
            }else{
                if($contrasena==$confirmar){
                    $consult="SELECT*FROM cliente WHERE documento='$documento'";
                    $resultado=mysqli_query($conexion,$consult);
                    while($log=mysqli_fetch_assoc($resultado)){
                        $doc=$log['documento'];                   
                    }
                    if($documento==$doc){
                        echo "<script>swal('DOCUMENTO YA INGRESADO ANTERIORMENTE','ESTE DOCUMENTO YA SE ENCUENTRA REGISTRADO' ,'error' )</script>"; 
                    }else{
                        $res= $conexion ->prepare("insert into cliente(documento,usuario,nombre,correo,telefono,direccion,contrasena)values(?,?,?,?,?,?,?)");
                        $res->bind_param("isssiss",$documento,$usuario,$nombre,$correo,$telefono,$direccion,$contrasena);
                        $res->execute();
                        echo"<script> swal('REGISTRO EXITOSO','VE A INGRESAR Y RELLENA TUS DATOS PARA INICIAR' ,'success' );  </script>";   
                    }            
                }else{
                    echo "<script>swal( 'CONTRASEÑAS DIFERENTES','CONTRASEÑAS DIFERENTES VUELVA A INGRESARLAS Y ASEGÚRESE DE QUE SEAN LAS MISMAS' ,'error' )</script>"; 
                }
            }
    }
    
            ?>
</body>

</html>