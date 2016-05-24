<!-- SEARCHFORM -->
<form method="get" id="search" action="<?php echo esc_url( home_url() ) ; ?>/">
    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Rechercher sur le blog"/>
</form>
