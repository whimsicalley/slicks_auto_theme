
<form role="search" method="get" class="search-form wie-search-form" action="<?php echo home_url( '/' ); ?>">
        <span class="screen-reader-text wie-hide"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field wie-search-field" value="<?php echo get_search_query() ?>" name="s" />
    <input type="submit" class="search-submit wie-search-submit wie-hide" value="Search" />
</form>
