<?php
add_action( 'after_setup_theme', 'urban_square_setup' );

function urban_square_setup() {
	load_theme_textdomain( 'urban-square', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' );
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
	add_theme_support(
		'editor-color-palette', array(
			array(
				'name' => esc_html__( 'White', 'urban-square' ),
				'slug' => 'white',
				'color' => '#ffffff',
			),
			array(
				'name' => esc_html__( 'Pale Gray', 'urban-square' ),
				'slug' => 'pale-gray',
				'color' => '#f5f5f5',
			),
			array(
				'name' => esc_html__( 'Silver', 'urban-square' ),
				'slug' => 'silver',
				'color' => '#c0c0c0',
			),
			array(
				'name' => esc_html__( 'Black', 'urban-square' ),
				'slug' => 'black',
				'color' => '#333333',
			),
			array(
				'name' => esc_html__( 'Light Coral', 'urban-square' ),
				'slug' => 'light-coral',
				'color' => '#f08080',
			),
			array(
				'name' => esc_html__( 'Maroon', 'urban-square' ),
				'slug' => 'maroon',
				'color' => '#800000',
			)
		)
	);
}

add_action( 'enqueue_block_editor_assets', 'urban_square_gutenberg_styles' );

function urban_square_gutenberg_styles() {
	wp_enqueue_style( 'urban-square-gutenberg', get_template_directory_uri() . '/css/gutenberg.css', false, '', 'all' );
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

include ( get_stylesheet_directory() . '/options/urban_square_hidef_images.php' );

add_action( 'wp_enqueue_scripts', 'urban_square_load_scripts' );
function urban_square_load_scripts() {
	wp_enqueue_style( 'urban-square-main-stylesheet', get_stylesheet_uri() );
	wp_enqueue_style( 'urban-square-css3-extensions', get_template_directory_uri() . '/css3-extensions.css' );
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
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}

add_filter( 'the_title', 'urban_square_title' );
function urban_square_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}

if( !function_exists( '_wp_render_title_tag' ) ) {
	function urban_square_render_title() { ?>
		<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<?php
	}
	add_action( 'wp_head', 'urban_square_render_title' );
}

add_filter( 'wp_title', 'urban_square_filter_wp_title' );
function urban_square_filter_wp_title( $title ) {
	return $title . esc_attr( get_bloginfo( 'name' ) );
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

function urban_square_custom_pings( $comment ) {
$GLOBALS['comment'] = $comment;
?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}

add_filter( 'get_comments_number', 'urban_square_comments_number' );
function urban_square_comments_number( $count ) {
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}

function urban_square_body_classes( $classes ) {
	// if we are not in a mobile environment
	if ( !wp_is_mobile() ) {
		// add 'desktop' to the $classes array
		$classes[] = 'desktop';
	}
	
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

add_filter( 'body_class', 'urban_square_body_classes' );
