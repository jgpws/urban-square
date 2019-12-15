<?php get_header(); ?>
<section id="content" class="content" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1 class="page__title"><?php the_title(); ?></h1> <?php edit_post_link( 'Edit This', '<p class="supporting-bgcolor supporting-secondary-color reverse-supporting-color">', '</p>', '', 'post__edit-link' ); ?>
		<section class="post__content">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
			<?php the_content(); ?>
			<?php get_template_part( 'template-parts/entry', 'pagination' ); ?>
		</section>
	</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>