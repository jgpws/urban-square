<?php
if( get_header_image() != '' ) {
	$enqueue_main_style;
	$repeating_header_css = '
.header {
	background: url(' . $header_image . ') repeat;
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $repeating_header_css );
}
			
if( $header_2xbg != '' ) {
	$enqueue_main_style;
	$repeating_header_css .= '
@media (-webkit-min-device-pixel-ratio: 1.5),
(min--moz-device-pixel-ratio: 1.5),
(-o-min-device-pixel-ratio: 3/2),
(min-device-pixel-ratio: 1.5),
(min-resolution: 144dpi) {
	.header {
		background: url(' . $header_2xbg . ') repeat;
		background-size: ' . get_custom_header()->width . 'px ' . get_custom_header()->height . 'px;
	}
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $repeating_header_css );
}
			
if( get_header_textcolor() != '' ) {
	$enqueue_main_style;
	$repeating_header_textcolor_css = '
.header__site-title-link:link,
.header__site-title-link:visited {
	color: #' . get_header_textcolor() . ';
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $repeating_header_textcolor_css );
}

if ( 'blank' == get_header_textcolor() && has_custom_logo() ) {
	$enqueue_main_style;
	$repeating_header_textcolor_css .= '
.header__site-title a:link,
.header__site-title a:visited {
	position: absolute;
	left: -9999px;
	top: 0;
}

.header__site-title-link--landing:link,
.header__site-title-link--landing:visited {
	position: static !important;
}

.header__site-description {
	text-indent: -9999px;
}

@media ( min-width: 48em ) { /* tablets and up = ~768px+ */	
	.header__button-panel {
		clear: left;
	}
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $repeating_header_textcolor_css );
}
?>