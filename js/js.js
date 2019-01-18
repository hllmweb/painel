/*
    Autor: Hugo Mesquita
    Site: www.hugomesquita.com.br
*/


//ao carregar a pagina
window.onload = function(){
}

function abrirMenu(){
   $("#sidebar-menu").toggleClass("fechado-menu");
   $("#content").toggleClass("redimensionando");
   $("#sidebar-menu").toggleClass("closed-menu");

   if($("#sidebar-menu").hasClass("closed-menu")){
        console.log("fechado");
    }else{
        console.log("aberto");
    }

}
$("a.btn-menu").click(function(e){
    abrirMenu();
    e.preventDefault();
});

function menuFixo(){

}
