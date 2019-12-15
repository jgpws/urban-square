<?php get_header(); ?>
<section id="content" class="content" role="main">
	<h1 class="archive__title center"><?php 
if ( is_day() ) { printf( __( 'Daily Archives: %s', 'urban-square' ), get_the_time( get_option( 'date_format' ) ) ); }
elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'urban-square' ), get_the_time( 'F Y' ) ); }
elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'urban-square' ), get_the_time( 'Y' ) ); }
else { _e( 'Archives', 'urban-square' ); }
?>
	</h1>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/entry' ); ?>
		<?php endwhile; endif; ?>
		<?php get_template_part( 'template-parts/nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>