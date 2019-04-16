<?php
// Template Name: Home
?>

<?php get_header() ?>

  <?php get_template_part('partials/site-header') ?>

  <main class="main">
    <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
    <section class="page-content">

    <header class="the-title">
      <h1><?php the_title(); ?></h1>
    </header>

    <article class="the-content rich-text">
      <?php the_content(); ?>
    </article>

  </section>
  <?php endwhile; endif;?>
</main>

<?php get_footer() ?>
