(function(){

   var regalo=document.getElementById('regalo');

"use strict";



document.addEventListener('DOMContentLoaded', function(){

  var map = L.map('mapa').setView([4.592852, -74.139819], 17);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([4.592852, -74.139819]).addTo(map)
    .bindPopup('GDLWebCamp 2020<br> Boletos ya disponibles.')
    .openPopup()
    .bindTooltip('un Tooltip')
    .opentooltip();

    //console.log("listo"); 

    // campos datos usuarios 

   var nombre=document.getElementById('nombre');
   var apellido=document.getElementById('apellido');
   var email=document.getElementById('email');
    //campos pases 
      
   var pase_dia= document.getElementById('pase_dia');
   var pase_dosdias=document.getElementById('pase_dosdias');
   var pase_completo=document.getElementById('pase_completo');
      
     //botones y divs

   var calcular = document.getElementById('calcular');
   var errorDiv = document.getElementById('error');
   var botonRegistro = document.getElementById('btnRegistro');
   var lista_productos = document.getElementById('lista-productos');
   var suma = document.getElementById('suma-total');

   // extras
    var camisas = document.getElementById('camisa_evento');
   var etiquetas = document.getElementById('etiquetas');

   if(document.getElementById('calcular')){

   

   calcular.addEventListener('click', calcularMontos);

   pase_dia.addEventListener('blur', mostarDias);

   pase_dosdias.addEventListener('blur', mostarDias );

   pase_completo.addEventListener('blur', mostarDias);

   nombre.addEventListener('blur', validarCampos);     //validacion
   apellido.addEventListener('blur', validarCampos);
   email.addEventListener('blur', validarCampos);
   email.addEventListener('blur', validarMail);

   function validarCampos(){
    if (this.value == ''){
      errorDiv.style.display = 'block';
      errorDiv.innerHTML = 'Este campo es obligatorio';
      this.style.border = '1px solid red';
      errorDiv.style.border = '1px solid red';
    } else {
      errorDiv.style.display = 'none';
      this.style.border = '1px solid #cccccc';
    }

   };
   function validarMail(){
     if(this.value.indexOf('@') > -1){
      errorDiv.style.display = 'none';
      this.style.border = '1px solid #cccccc';
     }else {
      errorDiv.style.display = 'block';
      errorDiv.innerHTML = 'Debe tener al menos un @';
      this.style.border = '1px solid red';
      errorDiv.style.border = '1px solid red';

     }
   }

   function calcularMontos(e){
      e.preventDefault();
   if(regalo.value===""){
      alert("Debes elegir un regalo");
      regalo.focus();
   }else{
      var boletosDia= parseInt(pase_dia.value, 10 )|| 0,
          boleto2Dias= parseInt(pase_dosdias.value, 10 )|| 0, 
          boletoCompleto= parseInt(pase_completo.value, 10 )|| 0,
          cantCamisas = parseInt(camisas.value, 10 )|| 0,
          cantEtiquetas = parseInt(etiquetas.value, 10 )|| 0;

          var totalPagar = (boletosDia * 30) + (boleto2Dias * 45) + (boletoCompleto * 50) + ((cantCamisas * 10) *.93) + (cantEtiquetas * 2); 
         
          var listadoProductos = [];
          
          if(boletosDia >= 1){
            listadoProductos.push(boletosDia + ' Pase por dia ');
          }
          if(boleto2Dias >= 1){
            listadoProductos.push(boleto2Dias + ' Pase por  2 dias ');
          }
          if(boletoCompleto >= 1){
            listadoProductos.push(boletoCompleto + ' Pase completo');
          }
          if(cantCamisas >= 1){
            listadoProductos.push(cantCamisas + ' Camisas');
          }
          if(cantEtiquetas  >= 1){
            listadoProductos.push(cantEtiquetas  + ' Etiquetas');
          }
           
          lista_productos.style.display = 'block';
          lista_productos.innerHTML = '';
          for(var i=0; i<listadoProductos.length; i++){
            lista_productos.innerHTML += listadoProductos[i] + '<br/>';
          }

          suma.innerHTML = "$ " + totalPagar.toFixed(2);
 

         }

}


function mostarDias(){
  console.log(`pasedia:${pase_dia.value} 2dias:${pase_dosdias.value} completo:${pase_completo.value}`);
  var boletosDia= parseInt(pase_dia.value, 10 )|| 0,
      boleto2Dias= parseInt(pase_dosdias.value, 10 )|| 0, 
      boletoCompleto= parseInt(pase_completo.value, 10 )|| 0,
      diasElegidos = [];
          
          if(boletoCompleto){
            diasElegidos.push('viernes', 'sabado', 'domingo');
          }
          else {
          
          if(boleto2Dias){
            diasElegidos.push('viernes', 'sabado ');
          }
          else  if(boletosDia){
            diasElegidos.push('viernes');
          }

          }
          
          var pedro= '';
          pedro = boletoCompleto ?  'es marico': '';
          if(boletoCompleto) {
            pedro= 'es marico';
          }

  diasElegidos.forEach(diaElegido => {
    document.getElementById(diaElegido).style.display = 'block';
  })


}

}

 }); //DOM content loaded
})();

$(function(){

  //lettering
  $('.nombre-stio').lettering();

  //agregando clase al menu

  $('.body.conferencia .navegacion-principal a:contains("conferencia")').addClass('activo');
  $('.body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
  $('.body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');
  //menu fijo // 

  var windowheight= $(window).height();
  var barraAltura =$('.barra').innerHeight();
 
 
  //console.log(barraAltura);
 // console.log(windowheight);  //verificacion 

  $(window).scroll(function(){
   
    var scroll =$(window).scrollTop();

   if(scroll > windowheight){ 

    $('.barra').addClass('fixed');

    $('body').css({'margin-top': barraAltura+'px'});

   }else {
    $('.barra').removeClass('fixed');

    $('body').css({'margin-top': '0px'});
   }
  });

  // menu responsive
   
  $('.menu-movil').on('click', function(){
    $('.navegacion-principal').slideToggle();

  });



  // programa de conferencias 

  //$('div.ocultar').hide(); // ocultar eventos 

  $('.programa-evento .info-curso:first').show();

  $('.menu-programa a:first').addClass('activo');
 
  $('.menu-programa a').on('click', function(){
    
    $('.menu-programa a').removeClass('activo');
    $(this).addClass('activo');
    $('.ocultar').hide();
   
    var enlace = $(this).attr('href');

    $(enlace).fadeIn(1000);

    return false;
    
  });

  // Animaciones para los Numeros 
$('.resumen-evento li:nth-child(1) p').animateNumber({number: 6}, 1200);
$('.resumen-evento li:nth-child(2) p').animateNumber({number: 15}, 1200);
$('.resumen-evento li:nth-child(3) p').animateNumber({number: 3}, 1500);
$('.resumen-evento li:nth-child(4) p').animateNumber({number: 9}, 1500);

// cuenta regresiva
$('.cuenta-regresiva').countdown('2021/10/04 09:00:00', function(e){
$('#dias').html(e.strftime('%D'))
$('#horas').html(e.strftime('%H'))
$('#minutos').html(e.strftime('%M'))
$('#segundos').html(e.strftime('%S'))

});

// colorbox

$('.invitado-info').colorbox({inline:true, width:"50%"});

});












