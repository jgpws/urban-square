<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
<nav id="nav-above" class="navigation navigation--posts" role="navigation">
<div class="navigation__prev"><?php next_posts_link( sprintf( /* translators: %s: left arrow */ esc_html__( '%s Older', 'urban-square' ), '<span class="navigation__prev-icon">&larr;</span>' ) ) ?></div>
<div class="navigation__next"><?php previous_posts_link( sprintf( /* translators: %s: right arrow */ esc_html__( 'Newer %s', 'urban-square' ), '<span class="navigation__next-icon">&rarr;</span>' ) ) ?></div>
</nav>
<?php } ?>
