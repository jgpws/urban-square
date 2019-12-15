<?php
/* Link and Link Hover colors */
if( $link_color != '' ) {
	$enqueue_main_style;
	$link_color_css = '
/* Link colors */
a:link,
a:visited {
	color: ' . $link_color . ';
}
		
/*.desktop .menu--header li a:focus,
.desktop .menu--header li a:hover,
.desktop .menu--header .current_page_item a:hover,
.desktop .widget--sidebar ul li a:focus,
.desktop .widget--sidebar ul li a:hover {
	color: ' . $link_color . ';
}*/';
	wp_add_inline_style( 'urban-square-main-stylesheet', $link_color_css );
}
	
if( $link_secondary_color != '' ) {
	$enqueue_main_style;
	$link_secondary_color_css = '
/* Link hover and active colors */
a:active,
.desktop a:hover {
	color: ' . $link_secondary_color . ';
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $link_secondary_color_css );
}
?>