<?php
/* This file is for the display of Customizer options on the front end */

/* Customizer- Custom Header Style Switcher */
function urban_square_header_styleswitcher() { // opens urban_square_header_styleswitcher
	/* see http://themefoundation.com/wordpress-theme-customizer/ */
	$image_size_type = get_theme_mod( 'image_size_type' );
	$header_2xbg = esc_url( get_theme_mod( 'header_2xbg_upload' ) );
	$header_image = esc_url( get_header_image() );
	$enqueue_main_style = wp_enqueue_style( 'urban-square-main-stylesheet', get_stylesheet_uri() );
	if ( $image_size_type != '' ) { // opens if
		switch ( $image_size_type ) { // opens switch
			case 'responsive':
				include( get_stylesheet_directory() . '/options/includes/frontend/responsive_size.php' );
			break;
			case 'repeating':
				include( get_stylesheet_directory() . '/options/includes/frontend/repeating_size.php' );
			break;
		} // closes switch 
	} // closes if
} // closes urban_square_header_styleswitcher
add_action( 'wp_enqueue_scripts', 'urban_square_header_styleswitcher' );

/* Customizer- Custom Colors and Fonts */
function urban_square_customizations() { // opens urban_square_customizations()
	$font_choices = get_theme_mod( 'font_choices' );
	$background_2xbg = esc_url( get_theme_mod( 'background_2xbg_upload' ) );
	
	$header_footer_bgcolor = esc_html( get_theme_mod( 'header_footer_bgcolor' ) );
	$header_secondary_color = esc_html( get_theme_mod( 'header_secondary_color' ) );
	$menu_widgets_bgcolor = esc_html( get_theme_mod( 'menu_widgets_bgcolor' ) );
	$supporting_border_color = esc_html( get_theme_mod( 'supporting_border_color' ) );
	$link_color = esc_html( get_theme_mod( 'link_color' ) );
	$link_secondary_color = esc_html( get_theme_mod( 'link_secondary_color' ) );
	$supporting_color = esc_html( get_theme_mod( 'supporting_color' ) );
	$supporting_secondary_color = esc_html( get_theme_mod( 'supporting_secondary_color' ) );
	$everything_else_bgcolor = esc_html( get_theme_mod( 'everything_else_bgcolor' ) );
	
	$stylesheet_directory = get_stylesheet_directory_uri();
	
	$enqueue_main_style = wp_enqueue_style( 'urban-square-main-stylesheet', get_stylesheet_uri() );
	
	if( $font_choices == 'none' ) { // opens if
		$enqueue_main_style;
		$no_font = '/* No font choice selected */';
		wp_add_inline_style( 'urban-square-main-stylesheet', $no_font );
	} else {
		switch ( $font_choices ) { // opens embedding font switcher
			case 'arial':
				include( get_stylesheet_directory() . '/options/includes/frontend/font_arial.php' );
			break;
			case 'georgia':
				include( get_stylesheet_directory() . '/options/includes/frontend/font_georgia.php' );
			break;
			case 'serif1':
				include( get_stylesheet_directory() . '/options/includes/frontend/embed_serif1.php' );
			break;
			case 'serif2':
				include( get_stylesheet_directory() . '/options/includes/frontend/embed_serif2.php' );
			break;
			case 'sans_serif1':
				include( get_stylesheet_directory() . '/options/includes/frontend/embed_sans_serif1.php' );
			break;
		}
	} // closes if
	
include( get_stylesheet_directory() . '/options/includes/frontend/general_colors.php' );

include( get_stylesheet_directory() . '/options/includes/frontend/link_colors.php' );

include( get_stylesheet_directory() . '/options/includes/frontend/supporting_colors.php' );

include( get_stylesheet_directory() . '/options/includes/frontend/everything_else_colors.php' );

include( get_stylesheet_directory() . '/options/includes/frontend/reverse_colors.php' );
	
} // closes urban_square_customizations()

add_action( 'wp_enqueue_scripts', 'urban_square_customizations' );

function urban_square_footer_info() {
	$footer_default = sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'urban-square' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) );
	$footer_info = esc_html( get_theme_mod( 'urban_square_edit_footer', $footer_default ) );
	if( $footer_info != '' ) {
		echo $footer_info;
	} else {
		echo $footer_default;
	}
}

function urban_square_footer_credits() {
	$footer_credits = sprintf( __( 'Theme: %1$s | by: %2$s.', 'urban-square' ), '<a href="http://www.jasong-designs.com/2015/03/04/urban-square/">Urban Square</a>','<strong>Jason G. Designs</strong>' );
	if( get_theme_mod( 'urban_square_footercredits' ) == 1 ) { ?>
		<div id="credits" class="footer__credits"><?php echo $footer_credits; ?></div>
	<?php
	}
}

function urban_square_layout_switcher() {
	/* Switcher for layouts */
	$enqueue_main_style = wp_enqueue_style( 'urban-square-main-stylesheet', get_stylesheet_uri() );
	$layout_choices = get_theme_mod( 'urban_square_layout_choices' );
	$supporting_border_color = esc_html( get_theme_mod( 'supporting_border_color' ) );
	switch( $layout_choices ) {
		case 'masonry':
			include( get_stylesheet_directory() . '/options/includes/frontend/masonry_layout.php' );
		break;
		case 'grid':
			include( get_stylesheet_directory() . '/options/includes/frontend/grid_layout.php' );
		break;
		default:
	}
}

add_action( 'wp_enqueue_scripts', 'urban_square_layout_switcher' );

function urban_square_thumbnail_switcher() {
	if( ( get_theme_mod( 'urban_square_layout_choices' )  == 'masonry' ) || ( get_theme_mod( 'urban_square_layout_choices' ) == 'grid' ) ) {
		if( has_post_thumbnail() ) {
			the_post_thumbnail( 'full' );
		}
	} else {
		if( has_post_thumbnail() ) {
			the_post_thumbnail( 'thumbnail' );
		}
	}
}

function urban_square_content_switcher() {
	if( get_theme_mod( 'urban_square_contentlength_choices' ) == 'excerpt'  && is_home()  ) {
		the_excerpt();
	} else {
		the_content( sprintf( __( '&raquo; ( Read more of %s... )', 'urban-square' ), get_the_title() )
);
	}
}

function urban_square_searchbox_switcher() {
	if( get_theme_mod( 'urban_square_hide_searchbox' ) == 0 ) {
		if( is_admin_bar_showing() ) { ?>
			<div id="search" class="searchbox admin-bar-search-fix">
		<?php } else { ?>
			<div id="search" class="searchbox">
		<?php }
			get_search_form(); ?>
			</div>
	<?php
	} else {
		echo '';
	}
}
?>