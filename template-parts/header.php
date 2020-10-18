<header>
  <div class="container flex">
    <div class="header__mobile-nav">
      <div class="menu-btn">
        <div class="menu-btn__burger">
        </div>
      </div>
    </div>
    <div class="header__logo"><?php echo file_get_contents(get_stylesheet_directory_uri() . '/images/logo.svg'); ?>
    </div>
    <div class="header__contact">
      <?php echo file_get_contents(get_stylesheet_directory_uri() . '/images/icons/envelope-reversed.svg'); ?></a>
    </div>
</header>
<?php get_template_part('/template-parts/mobile-menu');?>