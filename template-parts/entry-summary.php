<section class="post__summary">
<?php urban_square_thumbnail_switcher();
// see urban_square_customizer-frontend.php ?>
<?php the_excerpt(); ?>
<?php if( is_search() ) { 
	get_template_part( 'template-parts/entry', 'pagination' ); 
} ?>
</section>