<?php
/* Covers Reverse colors (Black/White) for text, links, supporting colors and Everything Else */

if( get_theme_mod( 'urban_square_reverse_textcolor', 0 ) == 1 ) {
	$enqueue_main_style;
	$reverse_textcolor_css = '
.header__site-description,
.footer__copyright,
.footer__credits {
	color: #f5f5f5;
}

.menu--header .current_page_item > a:link,
.menu--header .current_page_item > a:visited,
.menu--header .current_page_item .button--header-submenu,
.menu--header .current_page_ancestor > a:link,
.menu--header .current_page_ancestor > a:visited,
.menu--header .current_page_ancestor .button--header-submenu {
	color: #f5f5f5;
}

.menu--header li.current_page_item > a:hover,
.menu--header li.current_page_ancestor > a:hover {
	color: #f5f5f5 !important;
}

.footer__credits a {
	color: #f5f5f5;
}

.footer__credits a:focus,
.footer__credits a:hover {
	color: #ffffff;
}

.header__site-title {
	color: #f5f5f5;
}

.content,
.page-numbers.current {
	color: #f5f5f5;
}

.wp-block-image figcaption,
.wp-block-embed figcaption,
.wp-block-pullquote p,
.wp-block-pullquote cite,
.wc-block-pagination-page--active[disabled],
.wc-block-pagination-page--active[disabled]:focus,
.wc-block-pagination-page--active[disabled]:hover,
.wc-block-pagination-ellipsis,
.wc-block-pagination-page {
	color: #f5f5f5;
}

.wp-block-latest-comments__comment-date {
	color: #f5f5f5;
}

.woocommerce div.product .woocommerce-tabs ul.tabs li.active a:hover {
	color: #ffffff;
}

.wc-block-grid__product-price .wc-block-grid__product-price__value {
	color: #f5f5f5;
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $reverse_textcolor_css );
}

if( get_theme_mod( 'urban_square_reverse_menu_linkcolor', 0 ) == 1 ) {
	$enqueue_main_style;
	$reverse_menu_linkcolor_css = '
.menu--header a:link,
.menu--header a:visited,
.menu--header .current_page_item a:hover {
	color: #333333;
}

.menu--header li a:active,
.menu--header li a:hover {
	color: #000000;
}

.widget a:link,
.widget a:visited,
.widget ul li a:link,
.widget ul li a:visited,
.widget--sidebar {
	color: #333333;
}

.widget a:active,
.widget a:hover,
.widget ul li a:active,
.widget ul li a:hover {
	color: #000000;
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $reverse_menu_linkcolor_css );
}

if( get_theme_mod( 'urban_square_reverse_menu_linkcolor_white', 0 ) == 1 ) {
	$enqueue_main_style;
	$reverse_menu_linkcolor_white_css = '
.menu--header a:link,
.menu--header a:visited,
.menu--header .current_page_item a:hover {
	color: #f5f5f5;
}

.menu--header li a:active,
.menu--header li a:hover {
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
	color: #f5f5f5;
}

.widget ul li a:active,
.widget ul li a:hover,
a.tag-cloud-link:active,
a.tag-cloud-link:hover,
.footer__widgets a:active,
.footer__widgets a:hover  {
	color: #ffffff;
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $reverse_menu_linkcolor_white_css );
}

if( get_theme_mod( 'urban_square_reverse_supporting_color', 0 ) == 1 ) {
	$enqueue_main_style;
	$reverse_supporting_color_css = '
.searchbox .reverse-supporting-color,
.header__button-panel .reverse-supporting-color,
.sidebar .reverse-supporting-color,
.content .reverse-supporting-color a:link,
.content .reverse-supporting-color a:visited,
.comment-reply-link:link,
.comment-reply-link:visited,
.page-numbers:not(.prev):not(.next):link,
.page-numbers:not(.prev):not(.next):visited,
.comment-reply-link:link,
.comment-reply-link:visited,
#wp-calendar tr th,
#wp-calendar td a,
.widget__title--collapsible .rsswidget:link,
.widget__title--collapsible .rsswidget:visited,
.woocommerce button.button,
.woocommerce button.button:hover,
.woocommerce nav.woocommerce-pagination ul li a.page-numbers,
.woocommerce nav.woocommerce-pagination ul li span,
.woocommerce nav.woocommerce-pagination ul li span.current {
	color: #333333;
}

.comment-reply-link:hover,
.comment-reply-link:focus,
.comment-reply-link:hover,
.comment-reply-link:focus,
.page-numbers:hover,
.woocommerce nav.woocommerce-pagination ul li a.page-numbers:focus,
.woocommerce nav.woocommerce-pagination ul li a.page-numbers:hover,
.woocommerce nav.woocommerce-pagination ul li span:hover,
#wp-calendar td a:hover,
#wp-calendar td a:focus,
#wp-calendar td a:hover,
#wp-calendar td a:focus {
	color: #000000;
}

.button--widget,
.woocommerce button.button--widget {
	border-left: 1px solid #333333;
}

.wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-background),
.wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-background):active,
.wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-background):focus,
.wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-background):hover {
	color: #333333;
}

.is-style-outline .wp-block-button__link:hover,
.is-style-outline .wp-block-button__link:focus {
	color: #333333;
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $reverse_supporting_color_css );
}

if ( get_theme_mod( 'urban_square_reverse_everything_textcolor', 0 ) == 1 ) {
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
body .sticky a:not(.post__edit-link):link,
body .sticky a:not(.post__edit-link):visited,
body #commentform,
body .bypostauthor .comment-author,
body .bypostauthor .comment-author a:link,
body .bypostauthor .comment-author a:visited,
.archive__meta,
.comment-form a:link,
.comment-form a:visited,
.wp-block-pullquote.is-style-solid-color p,
.wp-block-pullquote.is-style-solid-color cite,
.wp-block-pullquote.is-style-solid-color a:link,
.wp-block-pullquote.is-style-solid-color a:visited {
	color: #333333;
}

table a:active,
table a:focus,
table a:hover,
body .sticky a:not(.post__edit-link):active,
body .sticky a:not(.post__edit-link):focus,
body .sticky a:not(.post__edit-link):hover,
body #commentform a:active,
body #commentform a:hover,
body .bypostauthor .comment-author a:active,
body .bypostauthor .comment-author a:hover,
.wp-block-pullquote.is-style-solid-color a:active,
.wp-block-pullquote.is-style-solid-color a:hover {
	color: #000000;
}

.content table caption,
.content table thead {
	color: #f5f5f5;
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $reverse_everything_textcolor_css );
}
