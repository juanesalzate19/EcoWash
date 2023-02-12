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
        <style>
    <?php include "css/styleindex.css"?>
    </style>
 <script src="js/jquery.min.js"></script>
    <link rel="shortcut icon" href="IMG/logo.png" type="image/x-icon">
</head>
<body>
    <nav class="barra navbar navbar-expand-lg navbar-light " id="subir">
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
                        <a  href="#sobre"  class="desplazar" id="btn-abajo">¿Quienes Somos?</a>
                    </li>
                    <li class="nav-item">
                        <a href="#servicios" class="desplazar" id="btn-abajo">Servicio</a>
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
    <br>
    <div class="container-fluid">
    <div class="row">
      <div class="incluye-servicios col-sm-7">
        <h2 id="sobre">Lavadero De Automoviles Ecológico</h2>
    </div>
    <div class="col-sm-5">
    </div>
  </div>
</div>
  <br>
  <div class="somos container">
    <section>
      <div class="row">
        <div class=" col-sm-6">
          <div class="texto">
            <br><br><br>
            <h3> Somos EcoWash, una empresa enfocada en
              el lavado ecológico de automoviles.
              Estamos encargados de satisfacer sus necesidades
              desde la comodidad de su hogar u oficina.</h3>
            <br>
            <center><a href="login.php"><button class="botones" id="solicitar">Solicitar servicio</button></a></center>
            </a>
          </div>
        </div>
        <div class="col-sm-2"> <br></div>
        <div class="col-sm-4">
          <img class="imagen img-fluid" src="IMG/carro28.jpg" alt="">
        </div>
        
      </div>
    </section>
  </div>
  <br>
  <div class="container-fluid">
    <div class="row">
      <div class="incluye-servicios col-sm-6">
        <h2>Nuestros servicios Incluyen:</h2>
      </div>
      <div class="col-sm-6">
      </div>
    </div>
  </div>
  <section id="servicios">
    <br><br><br>
    <div class="border1">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <div class="imgs">
       

              <figure>
              <img id="img" class="img-raya img-fluid" src="IMG/imagen1.jpg" alt="">

            <div class="capa">
                <p id="text">Lavada Sencilla</p>
            </div>
        </figure>

            </div>
          </div>
          <div class="col-sm-1">
          </div>
          <div class="bar col-sm-5">
            <div class="rayita"></div>
            <label class="radio">Lavada Sencilla
              <input class="radio" type="radio" checked="checked" name="btn" id="boton1">
              <span class="check"></span>
            </label>
            <label class="radio">Brillada
              <input class="radio" type="radio" name="btn" id="boton2">
              <span class="check"></span>
            </label>
            <label class="radio">Desmanchada
              <input class="radio" type="radio" name="btn" id="boton3">
              <span class="check"></span>
            </label>
            <label class="radio">Lavado Interior Cojinería - Techo
              <input class="radio" type="radio" name="btn" id="boton4">
              <span class="check"></span>
            </label>
            <label class="radio">Polichada
              <input class="radio" type="radio" name="btn" id="boton5">
              <span class="check"></span>
            </label>
            <label class="radio">Lavada de Motor
              <input class="radio" type="radio" name="btn" id="boton6">
              <span class="check"></span>
            </label>
            <label class="radio">Restauración Partes Negras
              <input class="radio" type="radio" name="btn" id="boton7">
              <span class="check"></span>
            </label>
            <label class="radio">Desfogueada
              <input class="radio" type="radio" name="btn" id="boton8">
              <span class="check"></span>
            </label>
            <br><br>
            <a href="login.php"><button class="botones">Solicitar servicio</button></a>
            </a>

          </div>
          <a href="#subir" id="btn-abajo" class="desplazar img-fluid" ><img src="img/flecha.png" alt=""  class="up img-fluid"></a>
        </div>
      </div>
  </section>

  </div>
  </div>
  </div>
  <br>
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

<script>
let btn1 = document.getElementById('boton1');
let btn2 = document.getElementById('boton2');
let btn3 = document.getElementById('boton3');
let btn4 = document.getElementById('boton4');
let btn5 = document.getElementById('boton5');
let btn6 = document.getElementById('boton6');
let btn7 = document.getElementById('boton7');
let btn8 = document.getElementById('boton8');
let imagen = document.getElementById('img');
let text = document.getElementById("text");

btn1.addEventListener("click",validar1);
btn2.addEventListener("click",validar1);
btn3.addEventListener("click",validar1);
btn4.addEventListener("click",validar1);
btn5.addEventListener("click",validar1);
btn6.addEventListener("click",validar1);
btn7.addEventListener("click",validar1);
btn8.addEventListener("click",validar1);

function validar1(){
if (btn1.checked) {
    imagen.src="IMG/imagen1.jpg";
    text.innerHTML="Lavada Sencilla";
    btn2.checked=false;
    btn3.checked=false;
    btn4.checked=false;
    btn5.checked=false;
    btn6.checked=false;
    btn7.checked=false;
    btn8.checked=false;
}
 if(btn2.checked) {
    imagen.src="IMG/imagen2.jpg";
    text.innerHTML="Brillada";
    btn1.checked=false;
    btn3.checked=false;
    btn4.checked=false;
    btn5.checked=false;
    btn6.checked=false;
    btn7.checked=false;
    btn8.checked=false;
}
 if(btn3.checked){
    imagen.src="IMG/imagen3.jpg";
    text.innerHTML="Desmanchada";
    btn1.checked=false;
    btn2.checked=false;
    btn4.checked=false;
    btn5.checked=false;
    btn6.checked=false;
    btn7.checked=false;
    btn8.checked=false;
} 
if(btn4.checked) {
    imagen.src="IMG/imagen4.jpg";
    text.innerHTML="Lavado Interior Cojinería - Techo";
    btn1.checked=false;
    btn2.checked=false;
    btn3.checked=false;
    btn5.checked=false;
    btn6.checked=false;
    btn7.checked=false;
    btn8.checked=false;
 }
  if(btn5.checked) {
    imagen.src="IMG/imagen5.jpg";
    text.innerHTML="Polichada";
    btn1.checked=false;
    btn2.checked=false;
    btn3.checked=false;
    btn4.checked=false;
    btn6.checked=false;
    btn7.checked=false;
    btn8.checked=false;
}
 if(btn6.checked) {
    imagen.src="IMG/imagen6.jpg";
    text.innerHTML="Lavada de Motor";
    btn1.checked=false;
    btn2.checked=false;
    btn3.checked=false;
    btn4.checked=false;
    btn5.checked=false;
    btn7.checked=false;
    btn8.checked=false;
}
if (btn7.checked) {
    imagen.src="IMG/imagen7.jpg";
    text.innerHTML="Restauración Partes Negras";
    btn2.checked=false;
    btn3.checked=false;
    btn4.checked=false;
    btn5.checked=false;
    btn6.checked=false;
    btn7.checked=false;
    btn8.checked=false;
}
if (btn8.checked) {
    imagen.src="IMG/imagen8.jpg";
    text.innerHTML="Desfogueada";
    btn2.checked=false;
    btn3.checked=false;
    btn4.checked=false;
    btn5.checked=false;
    btn6.checked=false;
    btn7.checked=false;
    btn8.checked=false;
}
}

function irArriba(){
    window.addEventListener('scroll', () => {
        var scroll = document.documentElement.scrollTop;
        console.log(scroll);
        var btn_arriba = document.getElementById('btn_abajo');

        if(scroll > 350){
            btn_arriba.style.right = 20 + "px";
        }else{
            btn_arriba.style.right = -100 + "px";
        }
    })
}
irArriba();

$(document).ready(function(){
    var ir_a = $(".desplazar");

    ir_a.click(function(event){
        event.preventDefault();
        $("body, html").animate(
            {
                scrollTop: $(this.hash).offset().top,
            }, 1000
        );
    })
})
</script>
</body>

</html>