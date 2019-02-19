<?php get_header() ?>
<?php get_template_part('partials/header') ?>

<main class="main">
  <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
    <section>

      <header class="the-title">
        <h1>Page not found</h1>
      </header>

      <article class="the-content">
        <p>If you entered a web address please check it was correct.</p>
        <p>You can also <a href="/search">search</a> or <a href="/">browse from the homepage</a> to find the information you need.</p>
      </article>

    </section>
  <?php endwhile; endif;?>
</main>

<?php get_footer() ?>