<?php get_header(); ?>
<section id="content" class="content" role="main">
	<h1 class="archive__title center"><?php esc_html_e( 'Category Archives: ', 'urban-square' ); ?><?php single_cat_title(); ?></h1>
	<?php if ( '' != category_description() ) {
		echo '<div class="archive__meta">' . wp_kses_post( category_description() ) . '</div>';
	} ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/entry' ); ?>
	<?php endwhile; endif; ?>
	<?php get_template_part( 'template-parts/nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
