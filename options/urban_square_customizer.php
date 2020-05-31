<?php

include( get_stylesheet_directory() . '/options/includes/backend/wp_themesupport_controls.php' );

/* Customizer additions */
/* see The WordPress Theme Customizer: A Comprehensive Guide */
/* http://themefoundation.com/wordpress-theme-customizer/ */

function urban_square_customizer( $wp_customize ) { //opens function
	include( get_stylesheet_directory() . '/options/includes/backend/font_controls.php' );

	include( get_stylesheet_directory() . '/options/includes/backend/hidef_controls.php' );

	include( get_stylesheet_directory() . '/options/includes/backend/header_footer_controls.php' );

	include( get_stylesheet_directory() . '/options/includes/backend/layout_controls.php' );

	// Use transport: postMessage on WP included Customizer settings
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	include( get_stylesheet_directory() . '/options/includes/backend/colors_controls.php' );

	include( get_stylesheet_directory() . '/options/includes/backend/reverse_colors_controls.php' );

	include( get_stylesheet_directory() . '/options/includes/backend/currentcolors_controls.php' );
} // closes function
add_action( 'customize_register', 'urban_square_customizer' );

/* Customize Preview */
function urban_square_preview_js() {
	wp_enqueue_script( 'us_customizer_preview', get_template_directory_uri() . '/scripts/us-customizer-preview.js', array( 'customize-preview', 'jquery' ), '', true );
}

add_action( 'customize_preview_init', 'urban_square_preview_js' );

/* Customizer Controls JavaScript */
function urban_square_customizer_controls_js() {
	wp_enqueue_script( 'urban-square-customizer-controls', get_template_directory_uri() . '/scripts/customize-controls.js', array( 'jquery' ), '', true );
}
add_action( 'customize_controls_enqueue_scripts', 'urban_square_customizer_controls_js' );

/* Sanitization Callbacks */
function u_s_sanitize_colors_switcher( $input ) {
	$valid = array(
		'standard' => __( 'Standard Color Scheme', 'urban-square' ),
		'custom' => __( 'Custom Color Scheme', 'urban-square' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

function u_s_sanitize_image_type( $input ) {
	$valid = array(
		'responsive' => __( 'Responsive (rectangular horizontal image)', 'urban-square' ),
		'repeating' => __( 'Repeating (repeating textures- fixed size)', 'urban-square' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

function u_s_sanitize_layout_choices( $input ) {
	$valid = array(
		'dflt' => __( 'Default', 'urban-square' ),
		'content_sidebar' => __( 'Sidebar Directly Next to Content', 'urban-square' ),
		'masonry' => __( 'Masonry', 'urban-square' ),
		'grid' => __( 'Grid', 'urban-square' ),
	);

	if( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

function u_s_sanitize_content_choices( $input ) {
	$valid = array(
		'full' => __( 'Full Content', 'urban-square' ),
		'excerpt' => __( 'Excerpt', 'urban-square' ),
	);

	if( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

function u_s_sanitize_font_choices( $input ) {
	$valid = array(
		'none' => __( 'Default Font Style (Tahoma, Trebuchet MS, Geneva, sans-serif)', 'urban-square' ),
		'arial' => __( 'Arial, Helvetica, sans-serif', 'urban-square' ),
		'georgia' => __( 'Georgia, Times, Times New Roman, serif', 'urban-square' ),
		'serif1' => __( 'Old Standard (serif)**', 'urban-square' ),
		'serif2' => __( 'Playfair Display (serif)**', 'urban-square' ),
		'sans_serif1' => __( 'Norwester- headings and Afta- body (sans-serif)**', 'urban-square' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

function u_s_checkbox_sanitize( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}

function u_s_sanitize_footerhtml( $input ) {
	return sanitize_text_field( $input );
}

function u_s_no_sanitize() {
	return '';
}
