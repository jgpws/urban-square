<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner" class="header header--landing header-footer-bgcolor">
	<p class="header__site-title header__site-title--landing"><?php _e( 'Back to: ', 'urban-square' ); ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__site-title-link header__site-title-link--landing" title="<?php esc_html( get_bloginfo( 'name' ), 'urban-square' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></p>
</header>
<div id="container" class="container">
