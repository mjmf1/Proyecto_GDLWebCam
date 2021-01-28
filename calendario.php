<?php include_once 'includes/templates/header.php' ?> 

    <section class="seccion contenedor">
      <h2>Calendario de eventos</h2>
         
      <?php  try{
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT evento_id, nombre_evento, fecha_evento, 	hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado"; /*from eventos inner join categoria_evento on eventos.id_cat_evento = categoria_evento.id_categoria inner join invitados on eventos.id_inv = invitados.invitado_id order by fecha_evento ";*/

        $sql .= " FROM eventos ";
        $sql .= " INNER JOIN categoria_evento ";
        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
        $sql .= " INNER JOIN invitados ";
        $sql .= " ON eventos.id_inv = invitados.invitado_id ";
        $sql .= " ORDER BY evento_id ";

        $res = $conn->query($sql);


      } catch(\Exception $e){
        echo $e->getMessage();
      }
      ?> 

      <div class="calendario">
        
          <div class="calendario">
      <?php
      $calendario = array();
      while($eventos = $res->fetch_assoc()){

         // obtiene la fecha del evento

        $fecha = $eventos['fecha_evento'];

        
        
        $evento = array(
          'titulo' => $eventos['nombre_evento'],
          'fecha' => $eventos['fecha_evento'],
          'hora' => $eventos['hora_evento'],
          'categoria' => $eventos['cat_evento'],
          'icono' => $eventos['icono'],
          'invitadp' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
          
        );
        
        $calendario[$fecha][] = $evento;

        ?>
 
      
      <?php  } //while de fetch_asso() ?>
       
<!-- 
      <pre>
      <?php var_dump($calendario); ?>
      </pre> -->

      <?php //imprime todos los eventos

      foreach($calendario as $dia => $lista_eventos){?>

      <h3>
      <i class="far fa-calendar-alt"></i>
      <?php
          //unix
          setlocale(LC_TIME, 'es_ES.UTF-8');

          //windows
          setlocale(LC_TIME, 'spanish');
               

       echo strftime("%A, %d de %B del %Y", strtotime($dia) ); ?>
      </h3>
      <?php foreach($lista_eventos as $evento){?>

           <div class="dia">
         <p class="titulo"><?php echo $evento['titulo']; ?></p>
         
         <p class="hora"><i class="far fa-clock" aria-hidden="true"></i>
         
         <?php echo $evento['fecha'] . " " . $evento['hora']; ?></p>

         <p>
         <i class="fa <?php echo $evento['icono'];?> " aria-hidden="true"></i>
         <?php echo $evento['categoria']; ?>
         </p>
        
         <p>
          <i class="fas fa-user" aria-hidden="true"></i>
         <?php echo $evento['invitadp']; ?> 
         </p>     
           </div> <!--  div class="dia" -->

        <?php } // fin de foreach evento ?>


        <?php } // fin de foreach dias ?>
      
     </div>

     <?php 
       $conn->close();
     ?>
      
      </div> <!-- calendario -->
    </section>

    <?php include_once 'includes/templates/footer.php' ?> 
