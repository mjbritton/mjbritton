<?php get_header(); ?>

<div class="container">
    <div class="holding-page__content">
        <div class="logo">
                <?php echo file_get_contents( get_stylesheet_directory_uri() . '/images/logo.svg' ); ?>
        </div>
        <h1 class="holding-page__header">Welcome to my website!</h1>
        <p class="holding-page__text">You may have noticed it isn't quite ready yet.</p>
        <p class="holding-page__text">In the mean time please do get in touch to discuss how I can help you.</p>
        <a class="holding-page__link" href="mailto:hello@mjbritton.co.uk" title="Email me!"><span class="holding-page__button animation__heartbeat"><?php echo file_get_contents( get_stylesheet_directory_uri() . '/images/icons/envelope.svg' ); ?></span></a>
    
    <div class="holding-page__copyright"><p class="holding-page__text--small">&copy MJBritton Digital and Design 2020</p></div>
    </div>
</div>

<?php get_footer(); ?>