<?php get_header(); ?>
<section id="content" class="content" role="main">
	<h1 class="archive__title center"><?php
if ( is_day() ) {
	printf( /* translators: %s: The day */ esc_html__( 'Daily Archives: %s', 'urban-square' ), esc_html( get_the_time( get_option( 'date_format' ) ) ) );
}
elseif ( is_month() ) {
	printf( /* translators: %s: The month */ esc_html__( 'Monthly Archives: %s', 'urban-square' ), esc_html( get_the_time( 'F Y'  ) ) );
	}
elseif ( is_year() ) {
	printf( /* translators: %s: The year */ esc_html__( 'Yearly Archives: %s', 'urban-square' ), esc_html( get_the_time( 'Y' ) ) );
	}
else {
	esc_html_e( 'Archives', 'urban-square' );
}
?>
	</h1>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/entry' ); ?>
		<?php endwhile; endif; ?>
		<?php get_template_part( 'template-parts/nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
