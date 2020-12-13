<form class="form-inline my-2 my-lg-0" id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="s" value="<?php echo get_search_query(); ?>">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit" value="Search">Search</button>
    <!-- <button class="btn btn-outline-light my-2 my-sm-0" type="submit" value="Search">Search</button> -->
</form>