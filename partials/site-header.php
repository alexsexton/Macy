<div class="wrapper"> <?php // start wrapper ?>

  <header class="site-header" role="banner">

    <?php if ( has_custom_logo() ) : ?>
      <div class="site-logo">
        <?php the_custom_logo(); ?>
      </div>
    <?php else : ?>
      <div class="site-logo">
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
        <p><?php echo get_bloginfo( 'description' ); ?></p>
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
    </nav>

  <button class="site-nav-trigger hamburger hamburger--squeeze" type="button" onclick="window.location='#main-nav';" aria-label="Menu" aria-controls="navigation">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>


    <!-- <a href="#main-nav" class="site-nav-trigger">
      <span class="icon">
        <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g style="fill:none;stroke:#fff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10"><path d="m3 5h18"/><path d="m3 12h18"/><path d="m3 19h18"/><path d="m3 5h18"/><path d="m3 12h18"/><path d="m3 19h18"/></g></svg>
      </span>
      <span class="hide"> <?php esc_html_e( 'Menu', 'macy' ); ?> </span>
    </a> -->

  </header>
