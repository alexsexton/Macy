<?php get_header() ?>
<?php get_template_part('partials/site-header') ?>

<main class="main">
  <section>

    <header class="c-archive-hero--header">
      <h1>Search results</h1>
      <p>We found <?php
      $count = $GLOBALS['wp_query']->found_posts;
      echo sprintf(_n('<span class="count">%d</span> <strong>post</strong>', '<span class="count">%d</span> <strong>posts</strong>', $count), number_format_i18n($count));
      ?>.</p>
      <a class="button--back" href="javascript:window.history.go(-1);">Back</a>
    </header>

    <form class="c-site-search" method="get" action="/">
      <fieldset>
            <label for="site-search">Search again...</label>
            <input id="site-search" type="search" placeholder="Search again..."  value="<?php echo get_search_query(); ?>" name="s" />
            <button class="button" type="submit">Search</button>
      </fieldset>
    </form>

    <?php if( have_posts() ): while( have_posts() ): the_post(); ?>

      <?php get_template_part('partials/article-list-item'); ?>

    <?php endwhile; endif;?>
  </section>
</main>

<?php get_footer() ?>
