<?php
/* Custom Header */

$args = array(
	'default-image' => '',
	'width' => get_theme_support( 'custom-header', 'width' ),
	'height' => get_theme_support( 'custom-header', 'height' ),
	'uploads' => true,
	'header-text' => true,
	'default-text-color' => '800000'
);

add_theme_support( 'custom-header', $args );

/* Custom Background */
// Callback to take into account @2x image
// see the article Modifying Custom Background Feature for Any HTML Element You Want
// http://code.tutsplus.com/articles/modifying-custom-background-feature-for-any-html-element-you-want--wp-25901
function urban_square_custombg_callback() {
	$background = get_background_image();
	$hidef_background = esc_url( get_theme_mod( 'background_2xbg_upload' ) );
	$color = get_background_color();
	
	if( !$background && !$color ) {
		return;
	}
	
	$style = $color ? "background-color: #$color;" : '';
	
	if( $background ) {
		$image = " background-image: url(' $background ');";
		
		$hidef_image = " background-image: url(' $hidef_background ');";
		
		$repeat = get_theme_mod( 'background_repeat', 'repeat' );
		if( !in_array( $repeat, array( 'no-repeat', 'repeat-x', 'repeat-y', 'repeat' ) ) ) {
			$repeat = 'repeat';
		}
		$repeat = " background-repeat: $repeat;";
		
		$position = get_theme_mod( 'background-position-x', 'left' );
		if( !in_array( $position, array( 'center', 'right', 'left' ) ) ) {
			$position = 'left';
		}
		$position = " background-position: top $position;";
		
		$attachment = get_theme_mod( 'background-attachment', 'scroll' );
		if ( ! in_array( $attachment, array( 'fixed', 'scroll' ) ) ) {
			$attachment = 'scroll';
		}
		$attachment = " background-attachment: $attachment;";
		
		$style .= $image . $repeat . $position . $attachment;
		
		$style2x = $hidef_image . $repeat . $position . $attachment;
	} ?>
<style type="text/css">
body.custom-background { <?php echo trim( $style ); ?> }

<?php if ( $hidef_background != '' ) { ?>
@media (-webkit-min-device-pixel-ratio: 1.5),
(min--moz-device-pixel-ratio: 1.5),
(-o-min-device-pixel-ratio: 3/2),
(min-device-pixel-ratio: 1.5),
(min-resolution: 144dpi) {
	body.custom-background {
		<?php echo trim( $style2x ); ?>
		background-size: 50%;
	}
}
<?php } // ends if ?>
</style>
<?php
}

$args = array(
	'default-color' => '#ffffff',
	'wp-head-callback' => 'urban_square_custombg_callback',
);

add_theme_support( 'custom-background', $args );
?>