<?php include_once 'includes/templates/header.php' ?> 

    <section class="seccion contenedor">
      <h2>Inivitados</h2>
         
      <?php  try{
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT * FROM `invitados` ";
        $res = $conn->query($sql);

      } catch(\Exception $e){
        echo $e->getMessage();
      }
      ?> 

      <div class="calendario">
        
          <div class="calendario">
      <?php
      $calendario = array();   ?>
<section class="invitados contenedor seccion">
            <h2>Nuestros invitados</h2>
            <ul class="lista-invitados clearfix">
              <?php   while($invitados = $res->fetch_assoc()){ ?>
                  <li>
                    <div class="invitado">
                    <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="invitado" />
                    <p><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'] ?></p>
                 </div>
            </li>    
         <?php  } //while de fetch_asso() ?>
       </ul>
</section>

   
     <?php 
       $conn->close();
     ?>
      
      </div> <!-- invitados -->
    </section>

    <?php include_once 'includes/templates/footer.php' ?> 