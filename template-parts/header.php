<header class="header">
  <div class="container flex flex--right">
    <div class="header__mobile-nav">
      <div class="menu-btn">
        <div class="menu-btn__burger">
        </div>
      </div>
    </div>
    <div class="header__main-nav">
      <nav><?php get_template_part('/template-parts/nav');?></nav>
    </div>

    <div class="header__contact">
      <?php echo file_get_contents(get_stylesheet_directory_uri() . '/images/icons/envelope-reversed.svg'); ?>
    </div>
  </div>
  <div class="container flex flex--center">
    <a href="<?php echo site_url() ?>" title="Return to homepage">
      <div class="header__logo"><?php echo file_get_contents(get_stylesheet_directory_uri() . '/images/logo.svg'); ?>
      </div>
    </a>
  </div>
</header>
<?php get_template_part('/template-parts/mobile-menu');?>