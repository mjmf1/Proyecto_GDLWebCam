<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link rel="manifest" href="site.webmanifest" />
    <link rel="apple-touch-icon" href="icon.png" />
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css" />
    <!--<link rel="stylesheet" href="css/all.css">-->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />

<?php 
$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace(".php", "", $archivo);

if($pagina == 'invitados' || $pagina == 'index'){

  echo '<link rel="stylesheet" href="css/colorbox.css">';

} else if($pagina == 'conferencia'){

echo '<link rel="stylesheet" href="css/lightbox.css" />' ;
}

?>
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans"
      rel="stylesheet"
    />
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
  integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
  crossorigin=""/>

    <link rel="stylesheet" href="css/main.css" />
    
    
  </head>

  <body class="<?php echo $pagina; ?>">
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <header class="site-header">
      <div class="hero">
        <div class="contendio-header">
          <nav class="redes-sociales">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-pinterest-square"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </nav>

          <div class="informacion-evento">
            <div class="clearfix">
              <p class="fecha"><i class="far fa-calendar-alt"></i>27-18-Dic</p>
              <p class="ciudad">
                <i class="fas fa-map-marker-alt"></i>Bogota,CL
              </p>
            </div>
            <!--clearfix-->

            <h1 class="nombre-stio">GDLWebcamp</h1>
            <p class="slogan">
              La mejor conferencia de <span>diseño wEb</span>
            </p>
          </div>
          <!--informacion-evento-->
        </div>
        <!--contenido-header-->
      </div>
      <!--hero-->
      
    </header>

    <div class="barra">
      <div class="contenedor clearfix">
        <div class="logo">
            <a href="index.php">
          <img src="img/logo.svg" alt="imagen GDLWemcamp" />
          </a>
        </div>
        <!--logo-->

        <div class="menu-movil">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <!--menu-movil-->

        <nav class="navegacion-principal clearfix">
          <a href="conferencia.php">conferencia</a>
          <a href="calendario.php">Calendario</a>
          <a href="invitados.php">Invitado</a>
          <a href="registro.php">Reservaciones</a>
        </nav>
      </div>
      <!--contenedor-->
    </div>
    <!--barra-->  