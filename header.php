<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/lib/css/bootstrap.min.css' ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<?php wp_head(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-header.css' ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-footer.css' ?>">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shoreditch' ); ?></a>

  <nav class="site-navbar nunitosans-extrabold nav-strongblue">
    <div>
      <a href="http://wicore.mx/">
        <img class="site-navbar-logo" src="<?php echo get_template_directory_uri() . '/img/logos/wicore-white-logo.png' ?>" alt="Logo">
      </a>
    </div>
    <div class="navbar-option-link-container">
      <a href="http://wicore.mx/" class="navbar-option-link">
        <div class="navbar-option-link-content">
          <span>Inicio</span>
        </div>
      </a>
      <a href="http://wicore.mx/servicios.html" class="navbar-option-link">
        <div class="navbar-option-link-content">
          <span>Servicios</span>
          </div>
      </a>
      <a href="http://wicore.mx/nosotros.html" class="navbar-option-link">
        <div class="navbar-option-link-content">
          <span>Nosotros</span>
        </div>
      </a>
      <a href="http://blog.wicore.mx/" class="navbar-option-link active-link active-link-scroll">
        <div class="navbar-option-link-content">
          <span>Blog</span>
        </div>
      </a>
      <a href="http://wicore.mx/contactanos.html" class="navbar-option-link">
        <div class="navbar-option-link-content">
          <span>Contáctanos</span>
        </div>
      </a>
    </div>
    <div class="navbar-phone-container">
      <div class="navbar-phone-content">
        <a class="navbar-phone nunitosans-extrabold" href="https://meetings.hubspot.com/josu" target="_blank">Agendar llamada</a>
      </div>
    </div>
    <div data-attribute="" class="navbar-hamburguer-visibility"  id="hamburgerMenu">
      <div class="navbar-hamburguer" data-attribute="">
        <div class="align-content-hamburguer" data-attribute="">
          <div class="line-hamburguer-base line-hamburguer-lg" data-attribute=""></div>
          <div class="line-hamburguer-base line-hamburguer-lg margin-vertical-4px" data-attribute=""></div>
          <div class="line-hamburguer-base line-hamburguer-md" data-attribute=""></div>
        </div>
      </div>
    </div>
    <div class="hamburger-menu-container" id="menuContainer" data-attribute="">
      <div class="hamburger-menu-header" data-attribute="">
        <div class="" data-attribute="">
          <a href="http://wicore.mx/" data-attribute="">
            <img class="hamburger-logo" src="<?php echo get_template_directory_uri() . '/img/logos/wicore-white-logo.png'?>" data-attribute="" alt="logo hamburger">
          </a>
        </div>
        <div class="hamburger-close-container" id="hideHamburger">
          <img class="hamburger-close" src="<?php echo get_template_directory_uri() . '/img/icons/close-menu.png' ?>">
        </div>
      </div>
      <div class="hamburger-menu-body nunitosans-regular" data-attribute="">
        <a data-attribute="" href="http://wicore.mx/" class="hamburger-option-link">
          <div class="hamburger-text-container">
            <span class="hamburger-text">Inicio</span>
          </div>
        </a>
        <a data-attribute="" href="http://wicore.mx/servicios.html" class="hamburger-option-link">
          <div class="hamburger-text-container">
            <span class="hamburger-text">Servicios</span>
          </div>
        </a>
        <a data-attribute="" href="http://wicore.mx/nosotros.html" class="hamburger-option-link">
          <div class="hamburger-text-container">
            <span class="hamburger-text">Nosotros</span>
          </div>
        </a>
        <a data-attribute="" href="http://blog.wicore.mx/" class="hamburger-option-link">
          <div class="hamburger-text-container">
            <span class="hamburger-text hamburger-active">Blog</span>
          </div>
        </a>
        <a data-attribute="" href="http://wicore.mx/contactanos.html" class="hamburger-option-link">
          <div class="hamburger-text-container">
            <span class="hamburger-text">Contáctanos</span>
          </div>
        </a>
        <a data-attribute="" class="navbar-phone nunitosans-regular" href="https://meetings.hubspot.com/josu" target="_blank">Agendar llamada</a>
      </div>
    </div>
  </nav>
  <div id="content" class="site-content">
    <?php if ( get_header_image() ) : ?>
      <div class="header-image">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
        </a>
      </div><!-- .header-image -->
    <?php endif; // End header image check. ?>

<script type="text/javascript">
  window.addEventListener('scroll', function(e) {
  if (e.view) {
    last_known_scroll_position = e.view.pageYOffset;
  }
  else {
    last_known_scroll_position = window.scrollY;
  }
  if (!ticking) {
    window.requestAnimationFrame(function() {
      doSomething(last_known_scroll_position);
      ticking = false
    });
  }
  ticking = true;
});

function showMenu() {
  document.querySelector('#menuContainer').style.width = '85%';
  document.querySelector('#hamburgerMenu').style.display = 'none';
}

function hideMenu() {
  document.querySelector('#menuContainer').style.width = '0%';
  document.querySelector('#hamburgerMenu').style.display = 'inline';
}

window.addEventListener('click', function(e) {
  if (!e.target.dataset.hasOwnProperty('attribute')) {
    hideMenu();
  }
});

/*Events of touchstart to mobile version*/

var showHamburger = document.querySelector('#hamburgerMenu');

showHamburger.addEventListener('touchstart', function(e) {
  e.preventDefault();
  showMenu();
});

var hideHamburger = document.querySelector('#hideHamburger');

hideHamburger.addEventListener('touchstart', function(e) {
  e.preventDefault();
  hideMenu();
});

/* Events of click to desktop version*/

showHamburger.addEventListener('click', function(e) {
  e.preventDefault();
  showMenu();
});

hideHamburger.addEventListener('click', function(e) {
  e.preventDefault();
  hideMenu();
});


</script>
