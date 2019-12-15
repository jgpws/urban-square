<aside id="sidebar" class="sidebar header-footer-bgcolor" role="complementary">
<?php do_action( 'before_sidebar' ); ?>
<?php if ( !is_active_sidebar( 'primary-widget-area' ) ) : ?>
	<div id="primary" class="sidebar__widget-area">
		<ul class="sidebar__widgets-container xoxo">
			<li id="calendar" class="widget widget--sidebar supporting-secondary-color">
				<h3 class="widget__title widget__title--collapsible supporting-bgcolor reverse-supporting-color"><?php _e( 'Calendar', 'urban-square' ); ?></h3>
				<div id="calendar_wrap" class="calendar_wrap">
					<?php get_calendar(); ?>
				</div>
			</li>
			<li>
			<li id="recent-posts" class="widget widget--sidebar supporting-secondary-color">
				<?php

				$instance = array(
					'title' => __( 'Recent Posts', 'urban-square' )
				);

				$args = array(
					'before_title' => '<h3 class="widget__title widget__title--collapsible supporting-bgcolor reverse-supporting-color">',
					'after_title' => '</h3>'
				);

				the_widget( 'WP_Widget_Recent_Posts', $instance, $args );
				?>
			</li>
		</ul>
	</div>
<?php endif; ?>
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
	<div id="primary" class="sidebar__widget-area">
		<ul class="sidebar__widgets-container xoxo">
		<?php dynamic_sidebar( 'primary-widget-area' ); ?>
		</ul>
	</div>
<?php endif; ?>
</aside>
