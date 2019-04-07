<?php

  // Sidebars and widget areas
  function macy_register_sidebars() {

    // Duplicate code the below and change id / name if you need more
    register_sidebar( array(
      'id' => 'sidebar',
      'name' => __( 'Sidebar', 'macy' ),
      'description' => __( 'The first (primary) sidebar.', 'macy' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h4>',
      'after_title' => '</h4>',
    ));

  }

   add_action( 'widgets_init', 'macy_register_sidebars' );
