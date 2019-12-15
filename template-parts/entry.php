<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="post__header">
<?php if ( is_singular() ) { 
	echo '<h1 class="post__title">';
	} else { 
		if( is_archive() ) {
			echo '<h2 class="post__title post__title--archive">';
		} else {
			echo '<h2 class="post__title">';
		}
	
	} ?>
	<?php if ( is_single() ) {
		the_title();
	} else { ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
	<?php } ?>
<?php if ( is_singular() ) { 
	echo '</h1>'; 
	} else { 
	echo '</h2>'; 
	} ?> <?php edit_post_link( sprintf( '%sEdit This', '<i class="post__header-icon fas fa-edit"></i>' ), '<p class="supporting-bgcolor supporting-secondary-color reverse-supporting-color">', '</p>', '', 'post__edit-link' ); ?>
<?php if ( !is_search() ) get_template_part( 'template-parts/entry', 'meta' ); ?>
</header>
<?php get_template_part( 'template-parts/entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php if ( !is_search() ) get_template_part( 'template-parts/entry-footer' ); ?>
</article>