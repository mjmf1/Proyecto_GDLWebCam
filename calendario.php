<?php include_once 'includes/templates/header.php' ?> 

    <section class="seccion contenedor">
      <h2>Calendario de eventos</h2>
         
      <?php  try{
        require_once('includes/funciones/bd_conexion.php');
        $sql= 'SELECT * FROM eventos';
        $res = $conn->query($sql);

      } catch(\Exception $e){
        echo $e->getMessage();
      }
      ?> 

      <div class="calendario">
      <?php  
      
      while($eventos = $res->fetch_assoc()){?>


<?php echo $eventos['nombre_evento'];
      echo '<br>';
?>

      <?php  }?>

      

      
     </div>

     <?php 
       $conn->close();
     ?>
      

    </section>

    <?php include_once 'includes/templates/footer.php' ?> 
