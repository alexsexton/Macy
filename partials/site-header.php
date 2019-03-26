<div class="wrapper"> <?php // start wrapper ?>

  <header class="site-header" role="banner">

    <?php if ( has_custom_logo() ) : ?>
      <div class="site-logo">
        <?php the_custom_logo(); ?>
      </div>
      <p class="site-desc"><?php echo get_bloginfo( 'description' ); ?></p>
    <?php else : ?>
      <div class="site-logo">
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
        <p class="site-desc"><?php echo get_bloginfo( 'description' ); ?></p>
      </div>
    <?php endif; ?>

    <nav id="main-nav" class="main-nav" role="navigation">
      <?php
      wp_nav_menu ( array (
        'theme_location' => 'site_nav_main',
        'container' => 'ul',
        'container_id' => '',
        'menu_class' => 'site-nav',
        'depth' => 2,
        'walker' => new Macy_Nav_Walker(),
      ));
      ?>
      <?php echo do_shortcode( '[custom_bogo]' ); ?>
    </nav>

    <button class="site-nav-trigger hamburger hamburger--squeeze" type="button" onclick="window.location='#main-nav';" aria-label="Menu" aria-controls="navigation">
      <span class="hamburger-box">
        <span class="hamburger-inner"><span class="hide"> <?php esc_html_e( 'Menu', 'macy' ); ?> </span></span>
      </span>
    </button>

  </header>
