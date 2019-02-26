<form class="site-search" method="get" role="search" action="/">
  <fieldset class="form-group">
    <label for="s"><?php esc_html_e( 'What are you looking for?', 'macy' ); ?></label>
    <input type="search" value="<?php echo get_search_query(); ?>" name="s" />
    <button class="button" type="submit"><?php esc_html_e( 'Search', 'macy' ); ?></button>
  </fieldset>
</form>
