<?php
/* This file is for the display of Customizer options on the front end */

/* Customizer- Custom Header Style Switcher */
function urban_square_header_styleswitcher() { // opens urban_square_header_styleswitcher
	/* see http://themefoundation.com/wordpress-theme-customizer/ */
	$image_size_type = get_theme_mod( 'image_size_type' );
	$header_2xbg = get_theme_mod( 'header_2xbg_upload' );
	$header_image = get_header_image();
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

	$header_footer_bgcolor = get_theme_mod( 'urban_square_header_footer_bgcolor', '#f5f5f5' );
	$header_secondary_color = get_theme_mod( 'urban_square_header_secondary_color', '#f08080' );
	$menu_widgets_bgcolor = get_theme_mod( 'urban_square_menu_widgets_bgcolor', '#f5f5f5' );
	$supporting_border_color = get_theme_mod( 'urban_square_supporting_border_color', '#c0c0c0' );
	$link_color = get_theme_mod( 'urban_square_link_color', '#800000' );
	$link_secondary_color = get_theme_mod( 'urban_square_link_secondary_color', '#f08080' );
	$supporting_color = get_theme_mod( 'urban_square_supporting_color', '#800000' );
	$supporting_secondary_color = get_theme_mod( 'urban_square_supporting_secondary_color', '#f08080' );
	$everything_else_bgcolor = get_theme_mod( 'urban_square_everything_else_bgcolor', '#f5f5f5' );

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

	if ( get_theme_mod( 'urban_square_colors_switcher', 'standard' ) == 'custom' ) {
		$supporting_color_rgb = urban_square_hex_to_rgb( $supporting_color );

		$css = '
/* Color scheme */

:root {
	--background-color: #' . esc_attr( get_background_color() ) . ';
	--header-background-color: ' . esc_attr( $header_footer_bgcolor ) . ';
	--menu-background-color: ' . esc_attr( $menu_widgets_bgcolor ) . ';
	--link-color: ' . esc_attr( $link_color ) . ';
	--link-hover-color: ' . esc_attr( $link_secondary_color ) . ';
	--header-hover-color: ' . esc_attr( $header_secondary_color ) . ';
	--supporting-color: ' . esc_attr( $supporting_color ) . ';
	--supporting-hover-color: ' . esc_attr( $supporting_secondary_color ) . ';
	--border-color: ' . esc_attr( $supporting_border_color ) . ';
	--everything-else-color: ' . esc_attr( $everything_else_bgcolor ) . ';

	--supporting-color-light-rgba: ' . esc_attr( urban_square_process_color_light( $supporting_color ) ) . ';
	--supporting-color-rgba: ' . esc_attr( urban_square_process_color( $supporting_color ) ) . ';
	--supporting-hover-color-light-rgba: ' . esc_attr( urban_square_process_color_light( $supporting_secondary_color ) ) . ';
	--supporting-hover-color-rgba: ' . esc_attr( urban_square_process_color( $supporting_secondary_color ) ) . ';
	--border-color-light-rgba: ' . esc_attr( urban_square_process_color_light( $supporting_border_color ) ) . ';
	--border-color-rgba: ' . esc_attr( urban_square_process_color( $supporting_border_color ) ) . ';
	--everything-else-light-rgba: ' . esc_attr( urban_square_process_color_light( $everything_else_bgcolor ) ) . ';
	--everything-else-rgba: ' . esc_attr( urban_square_process_color( $everything_else_bgcolor ) ) . ';

	--supporting-color-rgba-80: ' . vsprintf( 'rgba( %1$s, %2$s, %3$s, 0.8 )', $supporting_color_rgb ) . ';
}

.header__site-title-link:active,
.header__site-title-link:focus,
.header__site-title-link:hover {
	color: var(--header-hover-color);
}

.back-to-top:link,
.back-to-top:visited {
	background: var(--supporting-color-rgba-80);
}

/* apply body bg color to active tab in menu */
.menu--header .current_page_item > a:link,
.menu--header .current_page_item > a:visited,
.menu--header .page_item.current_page_item > a:hover,
.menu--header .current_page_item .button--header-submenu,
.menu--header .current_page_ancestor > a:link,
.menu--header .current_page_ancestor > a:visited,
.menu--header .current_page_ancestor > a:hover,
.menu--header .current_page_ancestor .button--header-submenu {
	background-color: var(--background-color);
}

@media (min-width: 48em) {
	.menu--header .page_item.current_page_item > a:link,
	.menu--header .page_item.current_page_item > a:visited,
	.current_page_item > .menu__anchor--header:link,
	.current_page_item > .menu__anchor--header:visited {
		background-color: var(--background-color);
	}
}';
		wp_add_inline_style( 'urban-square-main-stylesheet', $css );

		include( get_stylesheet_directory() . '/options/includes/frontend/reverse_colors.php' );
	}

} // closes urban_square_customizations()

add_action( 'wp_enqueue_scripts', 'urban_square_customizations' );

/* Helper functions */
function urban_square_footer_info() {
	$footer_default = sprintf( /* translators: %1$s: Copyright symbol, %2$s: Current year, %3$s: Site title */ esc_html__( '%1$s %2$s %3$s. All Rights Reserved.', 'urban-square' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) );
	$footer_info = get_theme_mod( 'urban_square_edit_footer', $footer_default );
	if( $footer_info != '' ) {
		echo esc_html( $footer_info );
	} else {
		echo wp_kses_post( $footer_default );
	}
}

function urban_square_footer_credits() {
	$footer_credits = sprintf( /* translators: %1$s: Link to theme homepage, %2$s: closing link tag, %3$s: opening strong tag, %4$s: closing strong tag */ esc_html__( 'Theme: %1$sUrban Square%2$s | by: %3$sJason G. Designs%4$s.', 'urban-square' ), '<a href="http://www.jasong-designs.com/2015/03/04/urban-square/">', '</a>','<strong>', '</strong>' );
	if( get_theme_mod( 'urban_square_footercredits' ) == 1 ) { ?>
		<div id="credits" class="footer__credits"><?php echo wp_kses_post( $footer_credits ); ?></div>
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
		the_content( sprintf( /* translators: %s: Post title */ esc_html__( '&raquo; ( Read more of %s... )', 'urban-square' ), get_the_title() )
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
