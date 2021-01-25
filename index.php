 <?php include_once 'includes/header.php' ?> 

    <section class="seccion contenedor">
      <h2>La mejor conferencia de diseño web en español</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excep
      </p>
    </section>
    <!-- seccion-->

    <section class="programa">
      <div class="contenedor-video">
        <video autoplay loop poster="/img/bg-talleres.jpg">
          <source src="video/video.mp4" type="video/mp4" />
          <source src="video/video.webm" type="video/webm" />
          <source src="video/video.ogv" type="video/ogg" />
        </video>
      </div>
      <!-- contenedor-video-->
      <div class="contenido-programa">
        <div class="contenedor">
          <div class="programa-evento">
            <h2>Programa del evento</h2>
            <nav class="menu-programa">
              <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
              <a href="#conferencias"
                ><i class="fas fa-comment"></i>Conferencias</a
              >
              <a href="#seminarios"
                ><i class="fas fa-university"></i>Seminarios</a
              >
            </nav>
            <div id="talleres" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>HTML5,CSS3,javascript</h3>
                <p><i class="far fa-clock" aria-hidden="true"></i> 16:02 hrs</p>
                <p>
                  <i class="far fa-calendar-alt" aria-hidden="true"></i> 26 Dic
                </p>
                <p>
                  <i class="fas fa-user" aria-hidden="true"></i> Marlon 
                  Mora 
                </p>
              </div>
              <!-- detalle evento-->

              <div class="detalle-evento">
                <h3>Renponsive Web Design</h3>
                <p><i class="far fa-clock" aria-hidden="true"></i> 20:00 hrs</p>
                <p>
                  <i class="far fa-calendar-alt" aria-hidden="true"></i> 26 Dic
                </p>
                <p>
                  <i class="fas fa-user" aria-hidden="true"></i> Marlon Mora 
                </p>
              </div><!-- detalle evento-->
              
              <a href="#" class="buttom float-right">Ver todos</a>
            </div><!-- #talleres-->


            <div id="conferencias" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Como ser freelancer</h3>
                <p><i class="far fa-clock" aria-hidden="true"></i> 10:00 hrs</p>
                <p>
                  <i class="far fa-calendar-alt" aria-hidden="true"></i> 26 Dic
                </p>
                <p>
                  <i class="fas fa-user" aria-hidden="true"></i> Gregorio Sanchez
                </p>
              </div>
              <!-- detalle evento-->

              <div class="detalle-evento">
                <h3>Tecnologias del Futuro</h3>
                <p><i class="far fa-clock" aria-hidden="true"></i> 17:00 hrs</p>
                <p>
                  <i class="far fa-calendar-alt" aria-hidden="true"></i> 26 Dic
                </p>
                <p>
                  <i class="fas fa-user" aria-hidden="true"></i> Susan Sanchez
              </div><!-- detalle evento-->
              
              <a href="#" class="buttom float-right">Ver todos</a>
            </div><!-- #talleres-->

            <div id="seminarios" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Diseño UI/UX para moviles </h3>
                <p><i class="far fa-clock" aria-hidden="true"></i> 17:00 hrs</p>
                <p>
                  <i class="far fa-calendar-alt" aria-hidden="true"></i> 27 Dic
                </p>
                <p>
                  <i class="fas fa-user" aria-hidden="true"></i> Harold Garcia
                </p>
              </div>
              <!-- detalle evento-->

              <div class="detalle-evento">
                <h3>Aprende a  programar en una mañana</h3>
                <p><i class="far fa-clock" aria-hidden="true"></i> 10:00 hrs</p>
                <p>
                  <i class="far fa-calendar-alt" aria-hidden="true"></i> 27 Dic
                </p>
                <p>
                  <i class="fas fa-user" aria-hidden="true"></i> Susana Rivera
                </p>
              </div><!-- detalle evento-->
              
              <a href="#" class="buttom float-right">Ver todos</a>
            </div><!-- #talleres-->
            
            
          </div> <!-- programa-evento-->
         
        </div><!-- contenedor-->
        
      </div><!-- contenido-programa-->
      
    </section><!-- programa-->
    

    <section class="invitados contenedor seccion">
      <h2>Nuestros invitados</h2>
      <ul class="lista-invitados clearfix">
        <li>
          <div class="invitado">
            <img src="img/invitado1.jpg" alt="invitado" />
            <p>Rafael Bautista</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado2.jpg" alt="invitado" />
            <p>Shari Herrera</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado3.jpg" alt="invitado" />
            <p>Gregorio Sanchez</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado4.jpg" alt="invitado" />
            <p>Susana Rivera</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado5.jpg" alt="invitado" />
            <p>Harold Garcia</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado6.jpg" alt="invitado" />
            <p>Susan Sanchez</p>
          </div>
        </li>
      </ul>
    </section>

    <div class="contador parallax">
      <div class="contenedor">
        <ul class="resumen-evento clearfix">
          <li>
            <p class="numero"></p>
            invitados
          </li>
          <li>
            <p class="numero"></p>
            Talleres
          </li>
          <li>
            <p class="numero"></p>
            Dias
          </li>
          <li>
            <p class="numero"></p>
            Conferencias
          </li>
        </ul>
      </div>
      <!-- contenedor -->
    </div>
    <!-- contador parallax" -->

    <section class="precios seccion">
      <h2>Precios</h2>
      <div class="contenedor">
        <ul class="lista-precios clearfix">
          <li>
            <div class="tabla-precio">
              <h3>pase por dia</h3>
              <p class="numero">$38</p>
              <ul>
                <li>Bocadillos Gratis</li>
                <li>Todas las Conferencias</li>
                <li>Todos los Talleres</li>
              </ul>
              <a href="#" class="buttom hollow">Comprar</a>
            </div>
          </li>
          <li>
            <div class="tabla-precio">
              <h3>Todos los Dias</h3>
              <p class="numero">$50</p>
              <ul>
                <li>Bocadillos Gratis</li>
                <li>Todas las Conferencias</li>
                <li>Todos los Talleres</li>
              </ul>
              <a href="#" class="buttom">Comprar</a>
            </div>
          </li>
          <li>
            <div class="tabla-precio">
              <h3>pase por 2 Dias</h3>
              <p class="numero">$45</p>
              <ul>
                <li>Bocadillos Gratis</li>
                <li>Todas las Conferencias</li>
                <li>Todos los Talleres</li>
              </ul>
              <a href="#" class="buttom hollow">Comprar</a>
            </div>
          </li>
        </ul>
      </div>
    </section>

    
        <!-- MAPA -->
    <div id="mapa" class="mapa"></div>



    <section class="seccion">
      <h2>Testimoniales</h2>
      <div class="testimoniales contenedor clearfix">
        <div class="testimonial">
          <blockquote>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem
              excepturi esse sed minima perspiciatis, tenetur dignissimos
              incidunt. Sequi, voluptatibus! Maiores a
            </p>

            <footer class="info-testimonial clearfix">
              <img src="img/testimonial.jpg" alt="imagen testimonial" />
              <cite
                >Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite
              >
            </footer>
          </blockquote>
        </div>
        <!-- testimonial -->

        <div class="testimonial">
          <blockquote>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem
              excepturi esse sed minima perspiciatis, tenetur dignissimos
              incidunt. Sequi, voluptatibus! Maiores a
            </p>

            <footer class="info-testimonial clearfix">
              <img src="img/testimonial.jpg" alt="imagen testimonial" />
              <cite
                >Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite
              >
            </footer>
          </blockquote>
        </div>
        <!-- testimonial -->

        <div class="testimonial">
          <blockquote>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem
              excepturi esse sed minima perspiciatis, tenetur dignissimos
              incidunt. Sequi, voluptatibus! Maiores a
            </p>

            <footer class="info-testimonial clearfix">
              <img src="img/testimonial.jpg" alt="imagen testimonial" />
              <cite
                >Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite
              >
            </footer>
          </blockquote>
        </div>
        <!-- testimonial -->
      </div>
      <!-- testimoniales contenedor -->
    </section>

    <div class="newsletter parallax">
      <div class="contenido contenedor">
        <p>Resgistrate al newsletter:</p>
        <h3>GDLWemcamp</h3>
        <a href="#" class="buttom transparente">Registro</a>
      </div>
      <!--contenido contenedor -->
    </div>
    <!-- newsletter-->

    <section class="seccion">
      <h2>Faltan</h2>
      <div class="cuenta-regresiva contenedor">
        <ul class="clearfix">
          <li>
            <p id="dias"  class="numero"></p>
            dias
          </li>
          <li>
            <p id="horas" class="numero"></p>
            horas
          </li>
          <li>
            <p id="minutos" class="numero"></p>
            minutos
          </li>
          <li>
            <p id="segundos" class="numero"></p>
            segundos
          </li>
        </ul>
      </div>
    </section>

    <?php include_once 'includes/footer.php' ?> 
    
    