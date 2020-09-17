<?php get_header();

while (have_posts()) {
    the_post();?>

<div class="container">
  <div class="logo">
    <a href="<?php echo site_url(); ?>"
      title="Return to homepage"><?php echo file_get_contents(get_stylesheet_directory_uri() . '/images/logo.svg'); ?></a>
  </div>
  <h2><?php the_title();?></h2>
  <?php the_content();?>

</div>
<div class="holding-page__copyright">
  <p class="holding-page__text--small">&copy MJBritton Digital and Design 2020</p>
</div>


<?php }

get_footer();?>s