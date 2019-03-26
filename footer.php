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

    <small>&copy; Copyright <?php echo(date('Y')); ?></small>

  </footer>

</div> <?php // end wrapper ?>

<?php $cover_image = get_field('page_background_image'); ?>
<?php if ($cover_image['url']) : ?>
  <div class="cover-image" style="background-image:url('<?php echo esc_url( $cover_image['url']); ?>');"></div>
<?php else : ?>
  <div class="cover-image"></div>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
