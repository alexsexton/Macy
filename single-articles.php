<?php get_header() ?>
<?php get_template_part('partials/site-header') ?>

<main class="main">
  <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
    <section>

      <header class="the-title">
        <h1><?php the_title(); ?></h1>
      </header>

      <article class="the-content rich-text">
        <?php the_content(); ?>
      </article>

      <?php $orginal_url = get_field('article_link'); ?>
      <?php if ($orginal_url) : ?>
        <div class="off-site-link">
          <p><a href="<?php echo esc_url($orginal_url); ?>">&mdash; Read the full article</a></p>
        </div>
      <?php endif; ?>

    <?php if (has_post_thumbnail()) : ?>
      <div class="post-image">
        <?php the_post_thumbnail('large'); ?>
      </div>
    <?php endif; ?>

    </section>
  <?php endwhile; endif;?>
</main>

<?php get_footer() ?>
