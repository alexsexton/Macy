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

  <form class="site-search" method="get" action="/">
    <fieldset>
      <label for="site-search">What are you looking for?</label>
      <input id="site-search" type="search" placeholder="What are you looking for?"  value="<?php echo get_search_query(); ?>" name="s" />
      <button class="button" type="submit">Search</button>
    </fieldset>
  </form>

</header>
