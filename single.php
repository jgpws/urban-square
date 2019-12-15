<?php get_header(); ?>
<section id="content" class="content content--single" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'template-parts/entry' ); ?>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
	<?php get_template_part( 'template-parts/nav', 'below-single' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>