<?php
/* Covers supporting, supporting hover colors and border colors */
if( $supporting_color != '' ) {
	$enqueue_main_style;
	$supporting_color_css = '
/* Supporting colors */

button,
input[type="reset"],
input[type="submit"],
.header__panel .supporting-bgcolor,
.content .supporting-bgcolor a:link,
.content .supporting-bgcolor a:visited,
.sidebar .supporting-bgcolor,
.button--widget,
.page-numbers,
.comment-reply-link:link,
.comment-reply-link:visited,
#wp-calendar tr th,
#wp-calendar td a {
	background-color: ' . $supporting_color . ';
}

.button--header-submenu {
	color: ' . $supporting_color . ';
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $supporting_color_css );
}

if( ( $supporting_color != '' ) && ( $supporting_color != '#800000' ) ) {
	$enqueue_main_style;
	$supporting_color_css .= '
.back-to-top:link,
.back-to-top:visited {
	background: rgba( 51, 51, 51, 0.8 );
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $supporting_color_css );
}

if( $supporting_secondary_color != '' ) {
	$enqueue_main_style;
	$supporting_secondary_color_css = '
/* Menu and Widget background hover and active color */
.menu--header .page_item a:active,
.menu--header .page_item a:focus,
.menu__anchor--header:active,
.menu__anchor--header:focus,
.widget--sidebar ul li a:focus,
.widget--sidebar ul li a:active {
	background-color: ' . $supporting_secondary_color . ';
}

.menu--header li a:active,
.desktop .menu--header li a:hover,
.content .supporting-secondary-color a:active,
.desktop .content .supporting-secondary-color a:hover,
.comment-reply-link:active,
.desktop .page-numbers:hover,
.desktop .comment-reply-link:hover,
.desktop .sidebar .supporting-secondary-color li a:hover,
#wp-calendar td a:active,
.desktop #wp-calendar td a:hover {
	background-color: ' . $supporting_secondary_color . ';
}

.page-numbers';
	wp_add_inline_style( 'urban-square-main-stylesheet', $supporting_secondary_color_css );
}

if( $supporting_border_color != '' ) {
	$enqueue_main_style;
	$supporting_border_color_css = '
/* Border outline colors */
.menu--header {
	border-color: ' . $supporting_border_color . ';
}

.button--header-submenu {
	border: 1px solid ' . $supporting_border_color . ';
}

@media ( min-width: 48em ) {
	.menu--header .page_item,
	.menu__item--header {
		border-right-color: ' . $supporting_border_color . ';
		border-top-color: ' . $supporting_border_color . ';
		border-left-color: ' . $supporting_border_color . ';
	}

	.menu--header .children,
	.menu__item--header .sub-menu {
		border-color: ' . $supporting_border_color . ';
	}

	.button--header-submenu {
		border-top: 0;
		border-right: 0;
		border-bottom: 0;
		border-left: 1px solid ' . $supporting_border_color . ';
	}

	.menu--header .page_item .page_item .button--header-submenu,
	.menu__item--header .menu__item--header .button--header-submenu {
		border-color: ' . $supporting_border_color . ';
	}
}

@media ( min-width: 64.063em ) {
	.content-sidebar .sidebar {
		border-top-color: ' . $supporting_border_color . ';
		border-bottom-color: ' . $supporting_border_color . ';
	}
}

.sidebar__widget-area {
	border-bottom: 2px solid ' . $supporting_border_color . ';
}

input,
select,
table,
textarea {
	border-color: ' . $supporting_border_color . ';
}

.sticky {
	border-bottom-color: ' . $supporting_border_color . ';
	border-top-color: ' . $supporting_border_color . ';
}

.bypostauthor .comment-author {
	border-bottom-color: ' . $supporting_border_color . ';
}

.footer__widgets {
	border-color: ' . $supporting_border_color . ';
}

.header--landing {
	border-bottom: 2px solid' . $supporting_border_color . ';
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $supporting_border_color_css );
}
?>
