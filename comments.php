<section id="comments">
<?php
if ( have_comments() ) :
	global $comments_by_type;
	$comments_by_type = &separate_comments( $comments );
	if ( ! empty( $comments_by_type['comment'] ) ) :
?>
		<section id="comments-list" class="comments__list">
			<h3 class="comments__title comments__title--comments"><?php comments_number(); ?></h3>
				<?php if ( get_comment_pages_count() > 1 ) : ?>
					<nav id="comments-nav-above" class="navigation navigation--comments" role="navigation">
						<?php paginate_comments_links(); ?>
					</nav>
			<?php endif; ?>
			<ul>
				<?php wp_list_comments( 'type=comment&avatar_size=64' ); ?>
			</ul>
			<?php if ( get_comment_pages_count() > 1 ) : ?>
				<nav id="comments-nav-below" class="navigation navigation--comments" role="navigation">
					<?php paginate_comments_links(); ?>
				</nav>
			<?php endif; ?>
		</section>
	<?php endif;
	if ( ! empty( $comments_by_type['pings'] ) ) :
		$ping_count = count( $comments_by_type['pings'] );
	?>
		<section id="trackbacks-list" class="comments__list comments__list--trackbacks">
			<h3 class="comments-title"><?php echo '<span class="ping-count">' . esc_html( $ping_count ) . '</span> ' . esc_html( _nx( 'Trackback or Pingback', 'Trackbacks and Pingbacks', $ping_count, 'comments count', 'urban-square' ) ); ?></h3>
			<ul>
				<?php wp_list_comments( 'type=pings&callback=urban_square_custom_pings' ); ?>
			</ul>
		</section>
	<?php endif;
endif;
if ( comments_open() ) comment_form();
?>
</section>
