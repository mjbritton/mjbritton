<?php get_header(); ?>

<?php 

$holdingpage = get_theme_mod('holdingpage');

if ($holdingpage == true) {

get_template_part('/template-parts/holding-page');

 } else; {

};




get_footer(); ?>