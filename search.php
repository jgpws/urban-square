<?php get_header(); ?>
<section id="content" class="content" role="main">
	<?php if ( have_posts() ) : ?>
		<h1 class="archive__title center"><?php printf( __( 'Search Results for: %s', 'urban-square' ), get_search_query() ); ?></h1>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/entry' ); ?>
		<?php endwhile; ?>
		<?php get_template_part( 'template-parts/nav', 'below' ); ?>
	<?php else : ?>
	<h1 class="archive__title center"><?php _e( 'Nothing Found', 'urban-square' ); ?></h1>
	<article id="post-0" class="post post__not-found">
		<section class="post__content">
			<p><?php _e( 'Sorry, nothing matched your search. Would you like to search for something else?', 'urban-square' ); ?></p>
			<hr />
			<?php get_search_form(); ?>
		</section>
	</article>
	<?php endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>