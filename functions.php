<?php

require_once( __DIR__ . '/func/theme-support.php');
require_once( __DIR__ . '/func/disable-blocks.php');
require_once( __DIR__ . '/func/disable-emoji.php');

function theme_files() {
  
  if (strstr($_SERVER['SERVER_NAME'], 'mjbritton.local')) {
    wp_enqueue_script('main-theme-js', 'http://localhost:3000/bundled.js', NULL, '1.1', true);
  } else {
    wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.eb459030a4410eb492af.js'), NULL, '1.0', true);
    wp_enqueue_script('main-theme-js', get_theme_file_uri('/bundled-assets/scripts.2516a8ce77a097cb440b.js'), NULL, '1.0', true);
    wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.2516a8ce77a097cb440b.css'));
  }

  wp_localize_script('main-theme-js', 'themeData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest')
  ));
}

add_action('wp_enqueue_scripts', 'theme_files');


?>