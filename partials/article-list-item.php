<article <?php post_class('the-content rich-text'); ?>>
  <header>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('partials/entry-meta'); ?>
  </header>

  <?php if (has_post_thumbnail()) : ?>
    <div class="post-thumbnail">
      <?php the_post_thumbnail('medium'); ?>
    </div>
  <?php endif; ?>

  <div class="excerpt">
    <?php the_excerpt(); ?>
  </div>

</article>
