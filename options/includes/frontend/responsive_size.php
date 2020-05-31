<?php
if( get_header_image() != '' ) {
	$enqueue_main_style;
	$header_css = '
.header {
	background-image: url(' . esc_url( $header_image ) . ');
}

@media ( min-width: 48em ) { /* tablets and up = ~768px+ */
	.header {
		background-size: 100% auto;
	}
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $header_css );
} else {
	$enqueue_main_style;
	$header_css = '
/* No header image present */';
				wp_add_inline_style( 'urban-square-main-stylesheet', $header_css );
}

if( $header_2xbg != '' ) {
	$enqueue_main_style;
	$header_css .= '
@media (-webkit-min-device-pixel-ratio: 1.5),
(min--moz-device-pixel-ratio: 1.5),
(-o-min-device-pixel-ratio: 1.5),
(min-device-pixel-ratio: 1.5),
(min-resolution: 144dpi) {
	.header {
		background-image: url(' . esc_url( $header_2xbg ) . ');
	}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $header_css );
}

if( get_header_textcolor() != '' ) {
	$enqueue_main_style;
	$header_textcolor_css = '
.header__site-title-link:link,
.header__site-title-link:visited {
	color: #' . esc_html( get_header_textcolor() ) . ';
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $header_textcolor_css );
}

if ( 'blank' == get_header_textcolor() ) {
	$enqueue_main_style;
	$header_textcolor_css .= '
.header__site-title-link:link,
.header__site-title-link:visited {
	position: absolute;
	top: 0;
	left: -9999px;
}

.header__site-title-link--landing:link,
.header__site-title-link--landing:visited {
	position: static;
}

.header__site-description {
	text-indent: -9999px;
}

@media ( min-width: 48em ) { /* tablets and up = ~768px+ */
	.header__button-panel {
		clear: left;
	}
}';

	wp_add_inline_style( 'urban-square-main-stylesheet', $header_textcolor_css );
}

if ( 'blank' == get_header_textcolor() && has_custom_logo() ) {
	$enqueue_main_style;
	$header_textcolor_css .= '
.header__site-title {
	position: absolute;
	top: 0;
	left: -9999px;
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $header_textcolor_css );
}
