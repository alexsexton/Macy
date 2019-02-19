<footer>

  <?php
    wp_nav_menu ( array (
      'theme_location' => 'site_nav_footer',
      'container' => 'ul',
      'container_id' => '',
      'depth' => 2,
      'walker' => new Macy_Nav_Walker(),
    ));
  ?>

</footer>

<?php wp_footer(); ?>

</body>
</html>
