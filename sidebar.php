<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
  return;
}
?>

<?php
  if(is_single()) { ?>
    <aside id="secondary" class="widget-area widget-area-hero" role="complementary">
<?php
  } else if (!is_single()) { ?>
    <aside id="secondary" class="widget-area" role="complementary">
<?php
  }
?>
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
  <div class="widget-social-networks">
    <h2 class="widget-title">Redes sociales</h2>
    <div class="widget-social-icons-container">
      <a href="">
        <img class="widget-social-icons" src="<? echo get_template_directory_uri() . '/img/icons/in-icon.png' ?>">
      </a>
      <a href="">
        <img class="widget-social-icons" src="<? echo get_template_directory_uri() . '/img/icons/fb-icon.svg' ?>">
      </a>
    </div>
  </div>
</aside><!-- #secondary -->
