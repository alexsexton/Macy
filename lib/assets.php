<?php
  // Load theme static assets
  function macy_theme_scripts() {
    $cache_buster = date(YmdB);

    wp_deregister_script( 'jquery' );
    // Deregister the wp-embed script, and the wp-mediaelement script and stylesheet.
    wp_deregister_script( 'wp-embed' );
    wp_deregister_script( 'wp-mediaelement' );
    wp_deregister_style( 'wp-mediaelement' );

    wp_enqueue_style('main-styles', get_template_directory_uri() . '/static/main.css', array(), $cache_buster, true );

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/static/lib/jquery-3.3.1.min.js', array(), $cache_buster, true  );

    wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/static/main.js', array(), $cache_buster, true  );

    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/static/lib/modernizr.min.js', array(), $cache_buster, true  );
  }
  add_action( 'wp_enqueue_scripts', 'macy_theme_scripts' );
?>
