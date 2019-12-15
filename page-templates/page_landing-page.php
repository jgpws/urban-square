<?php
/* Template Name: Landing Page
* Description: Full width page ideal for a landing page. It has a thin header with a simple link back to the homepage. No nav menu.
*
* @package WordPress
* @subpackage Urban Square
* @since Urban Square 1.3
*/

 get_template_part( 'template-parts/header', 'landing' ); ?>
<section id="content" class="content content--full" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1 class="page__title"><?php the_title(); ?></h1> <?php edit_post_link( 'Edit This', '<p class="supporting-bgcolor supporting-secondary-color reverse-supporting-color">', '</p>', '', 'post__edit-link' ); ?>
		<section class="post__content">
			<?php the_content(); ?>
			<?php get_template_part( 'template-parts/entry', 'pagination' ); ?>
		</section>
	</article>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>