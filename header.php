<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <div class="loader">
    <div class="loader__logo animation__heartbeat--quick">
        <?php echo file_get_contents( get_stylesheet_directory_uri() . '/images/logo.svg' ); ?>
    </div>
</div>
