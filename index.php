<?php get_header(); ?>
<section id="content" class="content" role="main">
<?php get_template_part( 'template-parts/nav', 'above' ); ?>

<?php
/* The Loop */
 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'template-parts/entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; 
endif; 
/* End of The Loop */ ?>

<?php get_template_part( 'template-parts/nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>