<footer class="site-footer">
      <div class="contenedor clearfix">
        <div class="footer-informacion">
          <h3>Sobre <span>GDLWemcamp</span></h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat
            amet, et voluptatum est blanditiis provident aperiam necessitatibus
            sequi, modi deleniti in, quidem voluptatem ad quia ea possimus
            reiciendis sapiente commodi.
          </p>
        </div>

        <div class="ultimos-tweets">
          <h3>ultimos <span>tweets</span></h3>
          <ul>
            <li>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedi
            </li>
            <li>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedi
            </li>
            <li>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedi
            </li>
          </ul>
        </div>
        <div class="menu">
          <h3>Redes <span>Sociales</span></h3>
          <nav class="redes-sociales">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-pinterest-square"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </nav>
        </div>
      </div>
          
      <p class="copyright">
        Todos los derechos Reservados GDLWemcamp 2020.
      </p>

     <!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div style="display: none;" >
<div id="mc_embed_signup">
<form action="https://gmail.us1.list-manage.com/subscribe/post?u=f4378e3f6d2fdd8e0a6601f77&amp;id=126577590b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>suscribete</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f4378e3f6d2fdd8e0a6601f77_126577590b" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
</div>
      
    </footer>

    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>
    <script>
      window.jQuery ||
        document.write(
          '<script src="js/vendor/jquery-3.3.1.min.js"><\/script>'
        );
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js"></script>-->
    <script src="js/jquery.lettering-0.6.1.min.js"></script>
    <?php 
$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace(".php", "", $archivo);

if($pagina == 'invitados' || $pagina == 'index'){

  echo '<script src="js/jquery.colorbox-min.js"></script>';

} else if($pagina == 'conferencia'){

echo '<script src="js/lightbox.js"></script>' ;
}

?>

    
     
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
  integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
  crossorigin=""></script>
    <script src="js/main.js"></script>
    

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
      window.ga = function () {
        ga.q.push(arguments);
      };
      ga.q = [];
      ga.l = +new Date();
      ga("create", "UA-XXXXX-Y", "auto");
      ga("send", "pageview");
    </script>
    <script
      src="https://www.google-analytics.com/analytics.js"
      async
      defer
    ></script>
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/f4378e3f6d2fdd8e0a6601f77/31f41a264300c8cc258878b8d.js");</script>
  </body>
</html>
