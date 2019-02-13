<header>
  <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
  <p><?php echo get_bloginfo( 'description' ); ?></p>

    <nav>
      <?php
        wp_nav_menu ( array (
          'theme_location' => 'site_nav_main',
          'container' => 'ul',
          'container_id' => '',
          'depth' => 2,
          'walker' => new Macy_Nav_Walker(),
        ));
      ?>
    </nav>

</header>
