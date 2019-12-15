<?php
/* Template Name: Blank Page
* Description: A completely blank page, save for some margins and padding, ready for your masterpiece.
*
* @package WordPress
* @subpackage Urban Square
* @since Urban Square 1.3
*/

 get_template_part( 'template-parts/header', 'blank' ); ?>
<section id="content" class="content content--full" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page__article-header">
		<h1 class="page__title"><?php the_title(); ?></h1> <?php edit_post_link( 'Edit This', '<p class="supporting-bgcolor supporting-secondary-color reverse-supporting-color">', '</p>', '', 'post__edit-link' ); ?>
	</header>
	<section class="post__content">
		<?php the_content(); ?>
		<?php get_template_part( 'template-parts/entry', 'pagination' ); ?>
	</section>
</article>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>