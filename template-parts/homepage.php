<main class="main" id="main">

  <?php while (have_posts()) {
    the_post();?>

  <div class="container">
    <?php the_content();?>

  </div>

  <?php }?>

</main>