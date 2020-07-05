<?php

function theme_files() {
  
  if (strstr($_SERVER['SERVER_NAME'], 'mjbritton.local')) {
    wp_enqueue_script('main-university-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  } else {
    wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.eb459030a4410eb492af.js'), NULL, '1.0', true);
    wp_enqueue_script('main-theme-js', get_theme_file_uri('/bundled-assets/scripts.66589fe72bfa3b73da14.js'), NULL, '1.0', true);
    wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.66589fe72bfa3b73da14.css'));
  }

  wp_localize_script('main-theme-js', 'themeData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest')
  ));
}

add_action('wp_enqueue_scripts', 'theme_files');

?>