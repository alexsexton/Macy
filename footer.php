  <footer class="site-footer" role="contentinfo">

    <?php
      wp_nav_menu ( array (
        'theme_location' => 'site_nav_footer',
        'container' => 'ul',
        'container_id' => '',
        'depth' => 1,
        'walker' => new Macy_Nav_Walker(),
      ));
    ?>

    <small>&copy; Copyright <?php echo(date(Y)); ?></small>

  </footer>

</div> <?php // end wrapper ?>

<div class="cover-image">
  <span class="es" aria-hidden>¡Hola!</span>
  <span class="en" aria-hidden>Hello!</span>
  <span class="fr" aria-hidden>Bonjour!</span>
</div>

<?php wp_footer(); ?>

</body>
</html>
