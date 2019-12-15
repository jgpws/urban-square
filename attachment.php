<?php get_header(); ?>
<?php global $post; ?>
<section id="content" class="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h1 class="post__title"><?php the_title(); ?> <span class="post__meta-sep">|</span> <a href="<?php echo get_permalink( $post->post_parent ); ?>" title="<?php printf( __( 'Return to %s', 'urban-square' ), esc_html( get_the_title( $post->post_parent ), 1 ) ); ?>" rev="attachment"><span class="navigation__prev-icon">&larr; </span><?php echo get_the_title( $post->post_parent ); ?></a></h1> <?php edit_post_link(); ?>
	<?php get_template_part( 'entry', 'meta' ); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="post__header">
			<nav id="nav-above" class="navigation" role="navigation">
				<div class="navigation__prev"><?php previous_image_link( false, '&larr;' ); ?></div>
				<div class="navigation__next"><?php next_image_link( false, '&rarr;' ); ?></div>
			</nav>
		</header>
		<section class="post__content">
				<?php if ( wp_attachment_is_image( $post->ID ) ) : $att_image = wp_get_attachment_image_src( $post->ID, "large" ); ?>
				<div class="post__attachment center"><a href="<?php echo wp_get_attachment_url( $post->ID ); ?>" class="post__attachment-link" title="<?php the_title(); ?>" rel="attachment"><img src="<?php echo $att_image[0]; ?>" width="<?php echo $att_image[1]; ?>" height="<?php echo $att_image[2]; ?>" class="attachment-medium" alt="<?php $post->post_excerpt; ?>" /></a></div>
				<?php else : ?>
				<div class="post__attachment"><a href="<?php echo wp_get_attachment_url( $post->ID ); ?>" title="<?php echo esc_html( get_the_title( $post->ID ), 1 ); ?>" rel="attachment"><?php echo basename( $post->guid ); ?></a></div>
				<?php endif; ?>
			<div class="post__caption wp-caption-text"><?php if ( !empty( $post->post_excerpt ) ) the_excerpt(); ?></div>
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
		</section>
	</article>
	<?php comments_template(); ?>
	
<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>