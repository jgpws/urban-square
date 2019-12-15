<?php
/* Covers Reverse colors (Black/White) for text, links, supporting colors and Everything Else */

if( get_theme_mod( 'reverse_textcolor' ) == 1 ) {
	$enqueue_main_style;
	$reverse_textcolor_css = '
.header__site-description,
.footer__copyright,
.footer__credits {
	color: #f5f5f5;
}

.footer__credits a {
	color: #ffffff;
}

.footer__credits a:focus,
.footer__credits a:hover {
	color: #ffffff;
}

.header__site-title {
	color: #f5f5f5;
}

.content {
	color: #ffffff;
}

.wp-block-image figcaption {
	color: #ffffff;
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $reverse_textcolor_css );
}

if( get_theme_mod( 'reverse_menu_linkcolor' ) == 1 ) {
	$enqueue_main_style;
	$reverse_menu_linkcolor_css = '
.menu--header a:link,
.menu--header a:visited,
.desktop .menu--header .current_page_item a:hover {
	color: #333333;
}
	
.menu--header li a:active,
.desktop .menu--header li a:hover {
	color: #000000 !important;
}

.widget ul li a:link,
.widget ul li a:visited {
	color: #333333;
}
		
.widget ul li a:active,
.desktop .widget ul li a:hover {
	color: #000000;
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $reverse_menu_linkcolor_css );
}

if( get_theme_mod( 'reverse_menu_linkcolor_white' ) == 1 ) {
	$enqueue_main_style;
	$reverse_menu_linkcolor_white_css = '
.menu--header a:link,
.menu--header a:visited,
.desktop .menu--header .current_page_item a:hover {
	color: #ffffff;
}

.menu--header li a:active,
.desktop .menu--header li a:hover {
	color: #ffffff;
}

.widget,
#wp-calendar caption {
	color: #f5f5f5;
}

#wp-calendar tbody {
	color: #333333;
}

.widget ul li a:link,
.widget ul li a:visited,
a.tag-cloud-link:link,
a.tag-cloud-link:visited,
.footer__widgets a:link,
.footer__widgets a:visited {
	color: #ffffff;
}
		
.widget ul li a:active,
.desktop .widget ul li a:hover,
a.tag-cloud-link:active,
a.tag-cloud-link:hover,
.footer__widgets a:active,
.desktop .footer__widgets a:hover  {
	color: #ffffff;
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $reverse_menu_linkcolor_white_css );
}

if( get_theme_mod( 'reverse_supporting_color' ) == 1 ) {
	$enqueue_main_style;
	$reverse_supporting_color_css = '
.searchbox .reverse-supporting-color,
.header__button-panel .reverse-supporting-color,
.sidebar .reverse-supporting-color,
.content .reverse-supporting-color a:link,
.content .reverse-supporting-color a:visited,
.comment-reply-link:link,
.comment-reply-link:visited,
.desktop .page-numbers:hover,
.desktop .comment-reply-link:link,
.desktop .comment-reply-link:visited,
#wp-calendar tr th,
#wp-calendar td a,
.widget__title--collapsible .rsswidget:link,
.widget__title--collapsible .rsswidget:visited {
	color: #333333;
}

.comment-reply-link:hover,
.comment-reply-link:focus,
.desktop .comment-reply-link:hover,
.desktop .comment-reply-link:focus,
#wp-calendar td a:hover,
#wp-calendar td a:focus,
.desktop #wp-calendar td a:hover,
.desktop #wp-calendar td a:focus {
	color: #000000;
}

.button--widget {
	border-left: 1px solid #333333;
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $reverse_supporting_color_css );
}

if ( get_theme_mod( 'reverse_everything_textcolor' ) == 1 ) {
	$enqueue_main_style;
	$reverse_everything_textcolor_css = '
blockquote,
q,
table,
table a:link,
table a:visited,
tbody,
pre,
body .sticky,
body .sticky a:link,
body .sticky a:visited,
body #commentform,
body .bypostauthor .comment-author,
.comment-form a:link,
.comment-form a:visited {
	color: #333333;
}

table a:active,
table a:focus,
table a:hover,
.desktop table a:active,
.desktop table a:focus,
.desktop table a:hover,
body .sticky a:active,
body .sticky a:focus,
body .sticky a:hover,
body #commentform a:active,
body #commentform a:hover {
	color: #000000;
}
				
.content table caption,
.content table thead {
	color: #ffffff;
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $reverse_everything_textcolor_css );
}
?>