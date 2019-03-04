<article class="list-item">
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  <?php if (has_post_thumbnail()) : ?>
    <div class="post-thumbnail">
      <a href="<?php the_permalink(); ?>">
      <?php if (post_type_exists('articles')): ?>
        <?php the_post_thumbnail('portfolio'); ?>
        <?php else: ?>
        <?php the_post_thumbnail('medium_large'); ?>
      <?php endif; ?>
      </a>
    </div>
  <?php endif; ?>

  <div class="the-excerpt rich-text">
    <?php the_excerpt(); ?>
  </div>
</article>
