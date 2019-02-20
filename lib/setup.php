<?php

// Remove crap from wp_head
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );
remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );

add_filter('json_enabled', '__return_false');
add_filter('json_jsonp_enabled', '__return_false');

// Disable Emoji mess
function disable_wp_emojicons() {
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
  add_filter( 'emoji_svg_url', '__return_false' );
}
add_action( 'init', 'disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
  return is_array( $plugins ) ? array_diff( $plugins, array( 'wpemoji' ) ) : array();
}

// Set the text domain
load_theme_textdomain( 'macy', get_template_directory() . '/languages' );

// Add theme support
add_theme_support( 'html5' );
add_theme_support( 'title-tag' );
//add_theme_support( 'automatic-feed-links' );

// Custom Logo
add_theme_support( 'custom-logo', array(
  'height'      => 200,
  'width'       => 400,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description' ),
  )
);

// Apparently this is needed
if ( ! isset( $content_width ) ) {
  $content_width = '100%';
}
