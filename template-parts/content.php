<main class="main" id="main">

  <?php while (have_posts()) {
    the_post();?>

  <div class="container container--narrow">
    <h2><?php the_title();?></h2>
    <?php the_content();?>

  </div>

  <?php }?>

</main>