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