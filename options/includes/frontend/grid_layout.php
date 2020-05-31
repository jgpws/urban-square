<?php
	$enqueue_main_style;
	$grid_layout = '
.menu--header {
	z-index: 100;
}

/* Gutenberg fixes */
body.blog .alignwide,
body.archive .alignwide,
body.search .alignwide {
	margin-left: -0.5em;
	margin-right: -0.5em;
}

body.blog .alignfull,
body.archive .alignfull,
body.search .alignfull {
	margin-left: -1em;
	margin-right: -1em;
}
/* */

body.blog article,
body.archive article,
body.search article {
	border: 1px solid '. esc_attr( $supporting_border_color ) . ';
	box-sizing: border-box;
	display: inline-block;
	margin-bottom: 1em;
	overflow-x: hidden;
	padding: 1em;
	position: relative;
	text-align: left;
	vertical-align: top;

}

body.blog article,
body.archive article,
body.search article {
	margin: 0 0.5% 1em 0.5%;
	width: 98.5%;
}

body.blog .post__title,
body.archive .post__title,
body.search .post__title {
	font-size: 1.5em;
	margin: 0 0 1em 0;
}

body.blog .wp-post-image,
body.archive .wp-post-image,
body.search .wp-post-image {
	float: none;
	margin: 0 auto 1em auto;
}

body.blog .gallery-item {
	width: 100%;
	text-align: center;
}

h1, h2, h3, h4, h5, h6, a {
	-ms-word-wrap: break-word;
	word-wrap: break-word;
}

@media ( min-width: 48em ) { /* tablets and up = ~768px+ */
	body.blog article,
	body.archive article,
	body.search article {
		margin: 0 1% 1em 1%;
		width: 48%;
		min-height: 30em;
	}
}

@media ( min-width: 64.063em ) { /* desktop = ~1025px */
	body.blog .button--header-menu,
	body.archive .button--header-menu,
	body.search .button--header-menu {
		position: static;
		left: 0;
	}

	body.blog .button--header-site-nav,
	body.archive .button--header-site-nav,
	body.search .button--header-site-nav {
		position: static;
		left: 0;
	}

	body.blog article,
	body.archive article,
	body.search article {
		margin: 0 1% 1em 1%;
		width: 31.33%;
	}

	body.blog .container,
	body.archive .container,
	body.search .container {
		grid-template-columns: 1fr 75% 1fr;
	}

	body.blog .sidebar,
	body.archive .sidebar,
	body.search .sidebar {
		clear: left;
		grid-column: 2 / 3;
		padding-top: 1em;
		width: 100%;
	}

	body.blog .widget--sidebar,
	body.archive .widget--sidebar,
	body.search .widget--sidebar {
  		margin: 0;
   	padding: 1em;
   	width: 50%;
	}

	body.blog .sidebar__widgets-container,
	body.archive .sidebar__widgets-container,
	body.search .sidebar__widgets-container {
  		flex-direction: row;
	}

	body.blog .back-to-top,
	body.archive .back-to-top,
	body.search .back-to-top {
		right: 0;
	}
}

@media ( min-width: 85.375em ) { /* widescreen desktop = ~1366px+ */
	body.blog article,
	body.archive article,
	body.search article {
		width: 23%;
	}

	body.blog .sidebar__widgets-container,
	body.archive .sidebar__widgets-container,
	body.archive .sidebar__widgets-container {
    flex-direction: row;
	}

	body.blog .widget--sidebar,
	body.archive  .widget--sidebar,
	body.search .widget--sidebar {
		width: 33%;
	}
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $grid_layout );
