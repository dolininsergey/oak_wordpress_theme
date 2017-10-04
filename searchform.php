<form action="<?php echo home_url( '/' ); ?>" method="get" class="search-wrap js-ui-search">
    <input class="js-ui-text" type="text" placeholder="Search Here..." name="s" id="search" value="<?php the_search_query(); ?>" />
    <span class="eks js-ui-close"></span>
</form>