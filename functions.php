<?php
add_action( 'after_setup_theme', 'urban_square_setup' );

function urban_square_setup() {
	load_theme_textdomain( 'urban-square', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'gallery', 'caption' ) );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );

	// Output logo
	function urban_square_the_custom_logo() {
		if( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
	}

	// For Gutenberg
	add_theme_support( 'align-wide' );

	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;

	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'urban-square' ) )
	);

	/* remove inline styling in gallery code when a gallery is displayed, so the code validates */
	add_filter( 'use_default_gallery_style', '__return_false' );
}

/* Gutenberg colors */
/* The following code uses the method described in "The Ultimate Guide to Gutenberg Color Palettes and Color Classes" by Rich Tabor
 * https://richtabor.com/gutenberg-color-palettes/ */

add_action( 'after_setup_theme', 'urban_square_color_palette' );

function urban_square_color_palette() {
	$color_scheme = get_theme_mod( 'urban_square_colors_switcher', 'standard' );

	if ( $color_scheme == 'custom' ) {
		add_theme_support(
			'editor-color-palette', array(
				array(
					'name' => esc_html__( 'White', 'urban-square' ),
					'slug' => 'white',
					'color' => '#ffffff',
				),
				array(
					'name' => esc_html__( 'Black', 'urban-square' ),
					'slug' => 'black',
					'color' => '#333333',
				),
				array(
					'name' => esc_html__( 'Primary Color 1', 'urban-square' ),
					'slug' => 'primary-1',
					'color' => get_theme_mod( 'urban_square_supporting_color', '#800000' ),
				),
				array(
					'name' => esc_html__( 'Primary Color 2', 'urban-square' ),
					'slug' => 'primary-2',
					'color' => get_theme_mod( 'urban_square_supporting_secondary_color', '#f08080' ),
				),
				array(
					'name' => esc_html__( 'Secondary Color 1', 'urban-square' ),
					'slug' => 'secondary-1',
					'color' => get_theme_mod( 'urban_square_supporting_border_color', '#c0c0c0' ),
				),
				array(
					'name' => esc_html__( 'Secondary Color 2', 'urban-square' ),
					'slug' => 'secondary-2',
					'color' => get_theme_mod( 'urban_square_everything_else_bgcolor', '#f5f5f5' ),
				),
			)
		);
	} else {
		add_theme_support(
			'editor-color-palette', array(
				array(
					'name' => esc_html__( 'White', 'urban-square' ),
					'slug' => 'white',
					'color' => '#ffffff',
				),
				array(
					'name' => esc_html__( 'Black', 'urban-square' ),
					'slug' => 'black',
					'color' => '#333333',
				),
				array(
					'name' => esc_html__( 'Primary Color 1', 'urban-square' ),
					'slug' => 'primary-1',
					'color' => '#800000',
				),
				array(
					'name' => esc_html__( 'Primary Color 2', 'urban-square' ),
					'slug' => 'primary-2',
					'color' => '#f08080',
				),
				array(
					'name' => esc_html__( 'Secondary Color 1', 'urban-square' ),
					'slug' => 'secondary-1',
					'color' => '#c0c0c0',
				),
				array(
					'name' => esc_html__( 'Secondary Color 2', 'urban-square' ),
					'slug' => 'secondary-2',
					'color' => '#f5f5f5',
				),
			)
		);
	}
}

add_action( 'after_setup_theme', 'urban_square_custom_gradients' );

function urban_square_custom_gradients() {
	$color_scheme = get_theme_mod( 'urban_square_colors_switcher', 'standard' );

	$primary_color_1 = get_theme_mod( 'urban_square_supporting_color', '#800000' );
	$primary_color_2 = get_theme_mod( 'urban_square_supporting_secondary_color', '#f08080' );
	$secondary_color_1 = get_theme_mod( 'urban_square_supporting_border_color', '#c0c0c0' );
	$secondary_color_2 = get_theme_mod( 'urban_square_everything_else_bgcolor', '#f5f5f5' );

	if ( $color_scheme == 'custom' ) {
		add_theme_support(
			'editor-gradient-presets', array(
				array(
					'name' => esc_html__( 'White', 'urban-square' ),
					'gradient' => 'linear-gradient(180deg, rgba(255, 255, 255, 1) 0%, rgba(235, 235, 235, 1) 100%)',
					'slug' => 'white',
				),
				array(
					'name' => esc_html__( 'Black', 'urban-square' ),
					'gradient' => 'linear-gradient(180deg, rgba(91, 91, 91, 1) 0%, rgba(51, 51, 51, 1) 100%)',
					'slug' => 'black',
				),
				array(
					'name' => esc_html__( 'Primary Color 1', 'urban-square' ),
					'gradient' => 'linear-gradient(180deg, ' . esc_attr( urban_square_process_color_light( $primary_color_1 ) ) . ' 0%, ' . esc_attr( urban_square_process_color( $primary_color_1 ) ) . ' 100%)',
					'slug' => 'primary-1',
				),
				array(
					'name' => esc_html__( 'Primary Color 2', 'urban-square' ),
					'gradient' => 'linear-gradient(180deg, ' . esc_attr( urban_square_process_color_light( $primary_color_2 ) ) . ' 0%, ' . esc_attr( urban_square_process_color( $primary_color_2 ) ) . ' 100%)',
					'slug' => 'primary-2',
				),
				array(
					'name' => esc_html__( 'Secondary Color 1', 'urban-square' ),
					'gradient' => 'linear-gradient(180deg, ' . esc_attr( urban_square_process_color_light( $secondary_color_1 ) ) . ' 0%, ' . esc_attr( urban_square_process_color( $secondary_color_1 ) ) . ' 100%)',
					'slug' => 'secondary-1',
				),
				array(
					'name' => esc_html__( 'Secondary Color 2', 'urban-square' ),
					'gradient' => 'linear-gradient(180deg, ' . esc_attr( urban_square_process_color_light( $secondary_color_2 ) ) . ' 0%, ' . esc_attr( urban_square_process_color( $secondary_color_2 ) ) . ' 100%)',
					'slug' => 'secondary-2',
				),
			)
		);
	} else {
		add_theme_support(
			'editor-gradient-presets', array(
				array(
					'name' => esc_html__( 'White', 'urban-square' ),
					'gradient' => 'linear-gradient(180deg, rgba(255, 255, 255, 1) 0%, rgba(235, 235, 235, 1) 100%)',
					'slug' => 'white',
				),
				array(
					'name' => esc_html__( 'Black', 'urban-square' ),
					'gradient' => 'linear-gradient(180deg, rgba(91, 91, 91, 1) 0%, rgba(51, 51, 51, 1) 100%)',
					'slug' => 'black',
				),
				array(
					'name' => esc_html__( 'Primary Color 1', 'urban-square' ),
					'gradient' => 'linear-gradient(180deg, rgba(168, 40, 40, 1) 0%, rgba(128, 0, 0, 1) 100%)',
					'slug' => 'primary-1',
				),
				array(
					'name' => esc_html__( 'Primary Color 2', 'urban-square' ),
					'gradient' => 'linear-gradient(180deg, rgba(255, 168, 168, 1) 0%, rgba(240, 128, 128, 1) 100%)',
					'slug' => 'primary-2',
				),
				array(
					'name' => esc_html__( 'Secondary Color 1', 'urban-square' ),
					'gradient' => 'linear-gradient(180deg, rgba(232, 232, 232, 1) 0%, rgba(192, 192, 192, 1) 100%)',
					'slug' => 'secondary-1',
				),
				array(
					'name' => esc_html__( 'Secondary Color 2', 'urban-square' ),
					'gradient' => 'linear-gradient(180deg, rgba(245, 245, 245, 1) 0%, rgba(205, 205, 205, 1) 100%)',
					'slug' => 'secondary-2',
				),
			)
		);
	}
}

/* Helper functions for retrieving Customizer colors */
function urban_square_process_color_light( $color ) {
	$color_adjusted = urban_square_adjust_brightness( $color, 0.4 );
	$color_rgb = urban_square_hex_to_rgb( $color_adjusted );
	$color_rgba = vsprintf( 'rgba(%1$s, %2$s, %3$s, 1)', $color_rgb );

	return $color_rgba;
}

function urban_square_process_color( $color ) {
	$color_rgb = urban_square_hex_to_rgb( $color );
	$color_rgba = vsprintf( 'rgba(%1$s, %2$s, %3$s, 1)', $color_rgb );

	return $color_rgba;
}

function urban_square_custom_editor_style() {
	$color_scheme = get_theme_mod( 'urban_square_colors_switcher', 'standard' );
	$link_color = get_theme_mod( 'urban_square_link_color', '#800000' );
	$link_secondary_color = get_theme_mod( 'urban_square_link_secondary_color', '#f08080' );
	$supporting_border_color = get_theme_mod( 'urban_square_supporting_border_color', '#c0c0c0' );
	$supporting_color = get_theme_mod( 'urban_square_supporting_color', '#800000' );
	$supporting_secondary_color = get_theme_mod( 'urban_square_supporting_secondary_color', '#f08080' );
	$everything_else_bgcolor = get_theme_mod( 'urban_square_everything_else_bgcolor', '#f5f5f5' );

	$font_choices = get_theme_mod( 'font_choices', 'none' );

	if ( $color_scheme == 'custom' ) {
		if ( get_background_color() != '' ) {
			$css = '
.editor-styles-wrapper {
	background-color: #' . esc_attr( get_background_color() ) . ';
}';
		}

		if ( get_background_image() != '' ) {
			$css .= '
.editor-styles-wrapper {
	background-image: url(' . esc_url( get_background_image() ) . ');
}';
		}

		$css .= '
:root {
	--link-color: ' . esc_attr( $link_color ) . ';
	--link-hover-color: ' . esc_attr( $link_secondary_color ) . ';
	--supporting-color: ' . esc_attr( $supporting_color ) . ';
	--supporting-hover-color: ' . esc_attr( $supporting_secondary_color ) . ';
	--border-color: ' . esc_attr( $supporting_border_color ) . ';
	--everything-else-color: ' . esc_attr( $everything_else_bgcolor ) . ';
}

.editor-styles-wrapper table caption,
.editor-styles-wrapper table thead {
	color: #ffffff;
}

.editor-styles-wrapper figure.wp-block-pullquote blockquote {
	background-color: transparent;
}

.editor-styles-wrapper .wc-block-pagination-page {
	color: #ffffff;
}';

		if ( get_theme_mod( 'urban_square_reverse_textcolor', 0 ) == 1 ) {
			$css .= '
.editor-styles-wrapper {
	color: #ffffff !important;
}

.editor-styles-wrapper .editor-post-title__block .editor-post-title__input {
	color: #ffffff !important;
}

.editor-styles-wrapper .wp-block-image figcaption,
.editor-styles-wrapper .wp-block-embed figcaption,
.editor-styles-wrapper .wp-block-pullquote.is-style-default,
.editor-styles-wrapper .wp-block-pullquote.is-style-default blockquote {
	color: #ffffff !important;
}

.wp-block-latest-comments__comment-date {
  color: #ffffff;
}

.wc-block-grid__product-price .wc-block-grid__product-price__value {
	color: #ffffff;
}';
		}

		if ( get_theme_mod( 'urban_square_reverse_everything_textcolor', 0 ) == 1 ) {
			$css .= '
.editor-styles-wrapper blockquote,
.editor-styles-wrapper q,
.editor-styles-wrapper table,
.editor-styles-wrapper table a:link,
.editor-styles-wrapper table a:visited,
.editor-styles-wrapper tbody,
.editor-styles-wrapper pre,
.editor-styles-wrapper .sticky,
.editor-styles-wrapper .sticky a:not(.post__edit-link):link,
.editor-styles-wrapper .sticky a:not(.post__edit-link):visited,
.editor-styles-wrapper .wp-block-pullquote.is-style-solid-color p,
.editor-styles-wrapper .wp-block-pullquote.is-style-solid-color cite,
.editor-styles-wrapper .wp-block-pullquote.is-style-solid-color a:link,
.editor-styles-wrapper .wp-block-pullquote.is-style-solid-color a:visited {
	color: #333333;
}';
		}

		$stylesheet_directory = get_stylesheet_directory_uri();
		switch ( $font_choices ) {
			case 'arial':
				$css .= '
				:root {
					--font-family: Arial, Helvetica, sans-serif;
				}';
				break;
			case 'georgia':
				$css .= '
				:root {
					--font-family: Georgia, Times, "Times New Roman", serif;
				}';
				break;
			case 'serif1':
				include( get_stylesheet_directory() . '/options/includes/backend/block-editor-fonts/embed_serif1.php' );
				break;
			case 'serif2':
				include( get_stylesheet_directory() . '/options/includes/backend/block-editor-fonts/embed_serif2.php' );
				break;
			case 'sans_serif1':
				include( get_stylesheet_directory() . '/options/includes/backend/block-editor-fonts/embed_sans_serif1.php' );
				break;
			default:
				// code...
				break;
		}

		return $css;
	}
}

/* Customizer overrides for Gutenberg editor styles */
add_action( 'enqueue_block_editor_assets', 'urban_square_editor_style_overrides' );

function urban_square_editor_style_overrides() {
	wp_enqueue_style( 'urban-square-editor-styles', get_theme_file_uri( '/css/editor-style.css' ), false );
	wp_add_inline_style( 'urban-square-editor-styles', urban_square_custom_editor_style() );
}

function urban_square_pages_menu() { // Fallback for custom menu
	wp_page_menu( array(
		'container' => 'nav',
		'menu_class' => 'menu__container menu__container--header',
		'before' => '<ul class="menu menu--header">',
		'after' => '</ul>',
	) );
}

/* filter the custom navigation menus to add BEM specific classes */
// Adapted from the article "Quick Tip: BEM Naming and WordPress Filters for Navigation"
// https://webdesign.tutsplus.com/tutorials/quick-tip-bem-naming-and-wordpress-filters-for-navigation--cms-31268
function urban_square_headermenu_menuitem_class( $classes, $item, $args ) {
	if( 'main-menu' === $args->theme_location ) {
		$classes[] = 'menu__item menu__item--header';
	}

	return $classes;
}
add_filter( 'nav_menu_css_class', 'urban_square_headermenu_menuitem_class', 10, 3 );

function urban_square_headermenu_menulink_class( $atts, $item, $args ) {
	if( 'main-menu' === $args->theme_location ) {
		$atts['class'] = 'menu__anchor menu__anchor--header';
	}

	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'urban_square_headermenu_menulink_class', 10, 3 );

// Urban Square Customizer additions; found in /options folder
include ( get_stylesheet_directory() . '/options/urban_square_customizer.php');

include ( get_stylesheet_directory() . '/options/urban_square_customizer-frontend.php' );

//include ( get_stylesheet_directory() . '/options/urban_square_hidef_images.php' );

add_action( 'wp_enqueue_scripts', 'urban_square_load_scripts' );
function urban_square_load_scripts() {
	wp_enqueue_style( 'urban-square-css3-extensions', get_template_directory_uri() . '/css3-extensions.css' );
	wp_enqueue_style( 'urban-square-main-stylesheet', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'urban-square-font-icons', get_template_directory_uri() . '/css/all.css' );
	wp_enqueue_script( 'urban-square-scripts', get_template_directory_uri() . '/scripts/urban-square-scripts.js', array( 'jquery' ), '1.0', true );
	// Localize the script to use some of our Customizer variables
	$params = array(
		'layouts' => get_theme_mod( 'urban_square_layout_choices' ),
	);
	wp_localize_script( 'urban-square-scripts', 'usScriptParams', $params );

	wp_enqueue_script( 'urban-square-gallery-nobr', get_template_directory_uri() . '/scripts/gallery-nobr.js', array( 'jquery' ), '1.0', true );
	/* wp_enqueue_script( 'jquery' ); */
	if( get_theme_mod( 'enable_retina' ) == 1 ) {
		wp_enqueue_script( 'enable-retina', get_template_directory_uri() . '/scripts/retina.min.js', array( 'jquery' ), '', true );
	}
}

add_action( 'comment_form_before', 'urban_square_enqueue_comment_reply_script' );
function urban_square_enqueue_comment_reply_script() {
	if ( get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'widgets_init', 'urban_square_widgets_init' );
function urban_square_widgets_init() {
	register_sidebar( array (
		'name' => __( 'Sidebar Widget Area', 'urban-square' ),
		'id' => 'primary-widget-area',
		'before_widget' => '<li id="%1$s" class="widget widget--sidebar %2$s supporting-secondary-color">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget__title widget__title--collapsible supporting-bgcolor reverse-supporting-color">',
		'after_title' => '</h3>',
	));

	register_sidebar( array(
		'name' => __( 'Footer Full Width Widget Area', 'urban-square' ),
		'id' => 'footer-widget-area',
		'before_widget' => '<li id="%1$s" class="widget widget--footer %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget__title widget__title--footer">',
		'after_title' => '</h3>',
	));
}

function urban_square_custom_pings( $comment ) { ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo esc_html( comment_author_link() ); ?></li>
<?php
}

add_filter( 'get_comments_number', 'urban_square_comments_number' );
function urban_square_comments_number( $count ) {
	if ( !is_admin() ) {
		global $id;
		$get_comments = get_comments( 'status=approve&post_id=' . $id );
		$comments_by_type = separate_comments( $get_comments );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}

function urban_square_body_classes( $classes ) {
	if ( get_theme_mod( 'urban_square_layout_choices' ) == 'content_sidebar' ) {
		$classes[] = 'content-sidebar';
	}

	if ( get_theme_mod( 'urban_square_layout_choices' ) == 'masonry' ) {
		$classes[] = 'masonry';
	}

	if ( get_theme_mod( 'urban_square_layout_choices' ) == 'grid' ) {
		$classes[] = 'grid';
	}

	return $classes;
}

function urban_square_hex_to_rgb( $color ) {
	$color = trim( $color, '#' );

	if( strlen( $color ) == 3 ) {
		$r = hexdec( substr( $color, 0, 1 ) . substr( $color, 0 , 1 ) );
		$g = hexdec( substr( $color, 1, 1 ) . substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ) . substr( $color, 2, 1 ) );
	} elseif ( strlen( $color ) == 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array(
		'red' => $r,
		'green' => $g,
		'blue' => $b,
	);
}

function urban_square_adjust_brightness( $hexCode, $adjustPercent ) {
  /* See the Stack Overflow page https://stackoverflow.com/questions/3512311/how-to-generate-lighter-darker-color-with-php
  */
  $hexCode = ltrim($hexCode, '#');

  if ( strlen( $hexCode ) == 3 ) {
    $hexCode = $hexCode[0] . $hexCode[0] . $hexCode[1] . $hexCode[1] . $hexCode[2] . $hexCode[2];
  }

  $hexCode = array_map( 'hexdec', str_split( $hexCode, 2 ) );

  foreach ( $hexCode as & $color ) {
    $adjustableLimit = $adjustPercent < 0 ? $color : 255 - $color;
    $adjustAmount = ceil( $adjustableLimit * $adjustPercent );

    $color = str_pad( dechex( $color + $adjustAmount ), 2, '0', STR_PAD_LEFT );
  }

  return '#' . implode( $hexCode );
}

add_filter( 'body_class', 'urban_square_body_classes' );
