<?php
/* Covers Header Text Hover, Menu/Widgets Background, Header/Footer/Sidebar colors */
if ( $header_footer_bgcolor != '' ) {
	$enqueue_main_style;
	$header_footer_bg_css = '
/* Header, Sidebar and Footer background colors */
.header-footer-bgcolor {
	background-color: ' . $header_footer_bgcolor . ';
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $header_footer_bg_css );
}
	
if( $header_secondary_color != '' ) {
	 $enqueue_main_style;
	 $header_hovercolor_css = '
/* Header hover and active color */
.header__site-title-link:active,
.header__site-title-link:hover,
.desktop .header__site-title-link:active,
.desktop .header__site-title-link:hover {
	color: ' . $header_secondary_color . ';
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $header_hovercolor_css );
}

if( $menu_widgets_bgcolor != '' ) {
	$enqueue_main_style;
	$menu_widgets_bgcolor_css = '
/* Menu and Widgets background color */
.menu--header,
.menu--header .page_item a:link,
.menu--header .page_item a:visited,
.menu__anchor--header:link,
.menu__anchor--header:visited,
.button--header-submenu {
	background-color: ' . $menu_widgets_bgcolor . ';
}
		
.menu .children,
.menu__item .sub-menu {
	background-color: ' . $menu_widgets_bgcolor . ';
}
		
.menu,
.sidebar__widget-area {
	background-color: ' . $menu_widgets_bgcolor . ';
}

.footer__widgets {
	background-color: ' . $menu_widgets_bgcolor . ';
}

@media ( min-width: 48em ) {
	.menu--header {
		background-color: transparent;
	}
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $menu_widgets_bgcolor_css );
}

$enqueue_main_style;
$active_tab_css = '
/* apply body bg color to active tab in menu */
.menu--header .current_page_item a:link, 
.menu--header .current_page_item a:visited, 
.menu--header .current_page_item .button--header-submenu {
	background-color: #' . get_background_color() . ';
}
			
.menu--header .children .current_page_item a:link,
.menu--header .children .current_page_item a:visited,
.menu--header .sub-menu .current_page_item a:link,
.menu--header .sub-menu .current_page_item a:visited,
.menu--header .children .current_page_item .button--header-submenu,
.menu--header .sub-menu .current_page_item .button--header-submenu {
	background-color: transparent;
}';
wp_add_inline_style( 'urban-square-main-stylesheet', $active_tab_css );
?>