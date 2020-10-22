<?php
/**
 * default search form
 */
?>

<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
    <div class="search-wrap">
    <label class="screen-reader-text" for="s"><?php _e( 'Search for a service' ); ?></label>
        <input type="search" placeholder="<?php echo esc_attr( 'Search for a service' ); ?>" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" />
        <input class="screen-reader-text" type="submit" id="search-submit" alt="Search" value="Submit" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/img/search.png')"; />
    </div>
</form>
