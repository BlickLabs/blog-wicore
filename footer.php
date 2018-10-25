<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Shoreditch
*/

?>
  </div><!-- #content -->
  <footer class="site-footer nunitosans-semibold">
    <div>
      <div>
        <a href="http://wicore.mx/">
          <img class="site-footer-logo" src="<?php echo get_template_directory_uri() . '/img/logos/wicore-blue-logo.png' ?>">
        </a>
      </div>
      <span class="site-footer-text">©Copyright, Wicore.<br>2018</span>
    </div>
    <div class="site-footer-info-section">
      <div class="site-footer-info-content">
        <div class="site-footer-titles-container">
          <h1 class="site-footer-titles nunitosans-extrabold">Hablemos</h1>
        </div>
        <div class="site-footer-text site-footer-column">
          <span>hola@wicore.mx<br>+(52)55.1209.1276</span>
          <span></span>
        </div>
      </div>
      <div class="site-footer-info-content">
        <div class="site-footer-titles-container">
          <h1 class="site-footer-titles nunitosans-extrabold">Encuéntranos</h1>
        </div>
        <div class="site-footer-text">
          <div class="first-col-info">
            <a href="https://goo.gl/maps/hpLiJpnTefq" target="_blank">
              <span><span class="nunitosans-bold">Centro de Distribución</span><br>Parque Industrial Tultipark II.<br>Tultitlán Edo. México CP 54948</span>
            </a>
          </div>
          <div>
            <a href="https://goo.gl/maps/1E1c4aNpGXz" target="_blank">
              <span><span class="nunitosans-bold">Oficinas</span><br>Torre del Árbol - Boulevard Manuel<br>Ávila Camacho #184, Piso 17, Reforma<br>Social, Miguel Hidalgo, Ciudad de México</span>
            </a>
          </div>
        </div>
      </div>
      <div class="site-footer-column">
        <div class="site-footer-titles-container">
          <h1 class="site-footer-titles nunitosans-black">Conócenos</h1>
        </div>
        <div class="site-footer-text">
          <a href="http://wicore.mx/servicios.html">
            <span class="site-footer-link">Servicios</span>
          </a>
          <a href="http://wicore.mx/nosotros.html">
            <span class="site-footer-link">Nosotros</span>
          </a>
          <a href="http://wicore.mx/contacto.html">
            <span class="site-footer-link">Contacto</span>
          </a>
        </div>
      </div>
      <div>
        <div class="site-footer-titles-container">
          <h1 class="site-footer-titles nunitosans-extrabold">Síguenos</h1>
        </div>
        <div class="site-footer-row">
          <div class="site-footer-column">
            <a href="https://www.linkedin.com/company/wicoremx/" target="_blank">
              <img class="site-footer-icon" src="<?php echo get_template_directory_uri() . '/img/icons/in-icon.png' ?>">
            </a>
          </div>
          <div>
            <a href="">
              <img class="site-footer-icon" src="<?php echo get_template_directory_uri() . '/img/icons/fb-icon.svg' ?>">
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
