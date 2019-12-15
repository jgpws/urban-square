<?php
/* Template Name: Full Width with Header- No Sidebar
* Description: Full width page with no sidebar or comments template.
*
* @package WordPress
* @subpackage Urban Square
* @since Urban Square 1.3
*/

 get_header(); ?>
<section id="content" class="content content--full" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page__article-header">
		<h1 class="page__title"><?php the_title(); ?></h1> <?php edit_post_link( 'Edit This', '<p class="supporting-bgcolor supporting-secondary-color reverse-supporting-color">', '</p>', '', 'post__edit-link' ); ?>
	</header>
	<section class="post__content">
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
		<?php the_content(); ?>
		<?php get_template_part( 'template-parts/entry', 'pagination' ); ?>
	</section>
</article>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>