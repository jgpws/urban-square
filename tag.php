<?php get_header(); ?>
<section id="content" class="content" role="main">
	<h1 class="archive__title center"><?php _e( 'Tag Archives: ', 'urban-square' ); ?><?php single_tag_title(); ?></h1>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/entry' ); ?>
	<?php endwhile; endif; ?>
	<?php get_template_part( 'template-parts/nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>