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
    console.log('hola1');
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
    console.log('hola2');
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
    console.log('hola3');
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
    console.log('hola4');
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
    console.log('hola5');
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
    console.log('hola6');
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
    console.log('hola7');
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
    console.log('hola8');
    btn2.checked=false;
    btn3.checked=false;
    btn4.checked=false;
    btn5.checked=false;
    btn6.checked=false;
    btn7.checked=false;
    btn8.checked=false;
}
}
