<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class();
wp_body_open(); ?>
<div id="wrapper" class="wrapper" class="hfeed">
<header id="header" role="banner" class="header header-footer-bgcolor">
	<section id="branding" class="header__branding">
	<?php urban_square_the_custom_logo(); ?>

		<div class="header__title-panel">
			<?php
				if ( ! is_singular() ) { echo '<h1 class="header__site-title">'; }
				else { echo '<div class="header__site-title">'; } ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__site-title-link" title="<?php esc_attr( get_bloginfo( 'name' ), 'urban-square' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
			<?php if ( ! is_singular() ) { echo '</h1>'; }
				else { echo '</div>'; } ?>
			<div id="site-description" class="header__site-description"><?php bloginfo( 'description' ); ?></div>
		</div>

	</section>
	<div id="panel" class="header__panel">
		<?php urban_square_searchbox_switcher(); ?>
		<div class="header__button-panel">
			<button class="button button--header-menu supporting-bgcolor supporting-secondary-color" title="<?php esc_attr_e( 'Menu:', 'urban-square' ); ?>">
				<span class="header__menu-label reverse-supporting-color"><?php esc_html_e( 'Menu:', 'urban-square' ); ?></span>
			</button>
			<form action="#sidebar"><button class="button button--header-site-nav supporting-bgcolor supporting-secondary-color" title="<?php esc_attr_e( 'Go to site navigation', 'urban-square' ); ?>">
				<span class="header__site-nav-label reverse-supporting-color"><?php esc_html_e( 'Go to site navigation', 'urban-square' ); ?></span>
			</button></form>
		</div>
			<?php wp_nav_menu( array(
				'theme_location' => 'main-menu',
				'fallback_cb' => 'urban_square_pages_menu',
				'container' => 'nav',
				'container_class' => 'menu__container menu__container--header',
				'menu_class' => 'menu menu--header',
			) ); ?>
	</div>
</header>
<div id="container" class="container"> <!-- opens .container -->
