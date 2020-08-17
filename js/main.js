(function(){

   var regalo=document.getElementById('regalo');

"use strict";



document.addEventListener('DOMContentLoaded', function(){

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

   calcular.addEventListener('click', calcularMontos);

   pase_dia.addEventListener('blur', mostarDias);

   pase_dosdias.addEventListener('blur', mostarDias );

   pase_completo.addEventListener('blur', mostarDias);

   nombre.addEventListener('blur', validarCampos);     //validacion
   apellido.addEventListener('blur', validarCampos);
   email.addEventListener('blur', validarCampos);

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

 }); //DOM content loaded
})();