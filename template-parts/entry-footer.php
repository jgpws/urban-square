<footer class="post__footer">
	<section class="post__meta">
		<span class="post__cats"><i class="post__footer-icon fas fa-archive"></i><?php _e( 'Categories: ', 'urban-square' ); ?><?php the_category( ', ' ); ?></span>
		<span class="post__tags"><?php the_tags( '<i class="post__footer-icon fas fa-tags"></i>Tags: ', ', ', '' ); ?></span>
		<?php if ( comments_open() ) { 
			echo '<span class="post__meta-sep">|</span> <i class="post__footer-icon fas fa-comments"></i><span class="post__comments"><a href="' . get_comments_link() . '">' . sprintf( __( 'Comments', 'urban-square' ) ) . '</a></span>';
		} ?>
	</section>
</footer>