<?php
// Template Name: Work
?>
<?php get_header() ?>
<?php get_template_part('partials/site-header') ?>

<?php $args = array(
  'posts_per_page' => 3,
  'post_type' => 'post',
  'order'   => 'ASC',
  'orderby' => 'date',
);
$work = new WP_Query($args); ?>

<main class="main">
  <section>
    <header class="the-title">
      <h1><?php the_title(); ?></h1>
    </header>

    <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
      <div class="the-content rich-text">
        <?php the_content(); ?>
      </div>
    <?php endwhile; endif;?>

    <div class="article-list">
    <?php if( $work->have_posts() ): while( $work->have_posts() ): $work->the_post(); ?>
      <?php get_template_part('partials/article-list-item'); ?>
    <?php endwhile; endif;?>
    </div>

  </section>

  <div class="pagination">
    <?php echo macy_pagination($work); ?>
  </div>
  
</main>

<?php get_footer() ?>
