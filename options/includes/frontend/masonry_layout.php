<?php
// For the masonry layout css, see the article Add Masonry, Grid Layouts To Your WordPress Site With Just CSS from WPMU Dev
// https://premium.wpmudev.org/blog/add-masonry-grid-layouts-to-your-wordpress-site-with-just-css/

// For the column-span workaround adaptation, see the Codepen Working around lack of support for column-span: all in Firefox, by Brian de Haan
// https://codepen.io/atelierbram/pen/xRvrbd

	$enqueue_main_style;
	$masonry_css = '
/* Masonry Layout */

/* Apply to blog post, search and archive pages */
.menu--header {
	z-index: 100;
}

/* Container */
body.blog .content,
body.archive .content,
body.search .content {
	-moz-column-count: 1;
	-webkit-column-count: 1;
	column-count: 1;
	-moz-column-gap: 1em;
	-webkit-column-gap: 1em;
	column-gap: 1em;
	padding-top: 0;
}

/* Bricks */
body.blog article,
body.archive article,
body.search article {
	display: inline-block;
	margin: 0 0 1em;
	padding: 1em;
	width: 100%;
	border: 1px solid '. $supporting_border_color . ';
	box-sizing: border-box;
	overflow-x: hidden;
}

body.blog .navigation {
	float: none;
}

body.blog .navigation,
body.archive .navigation,
body.search .navigation,
body.archive .archive__title,
body.archive .archive__meta,
body.search .archive__title {
	-webkit-column-span: all;
	column-span: all;
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
	margin: 0 0 1em 0;
}

body.blog .gallery-item {
	width: 100%;
	text-align: center;
}

h1, h2, h3, h4, h5, h6, a {
	-ms-word-wrap: break-word;
	word-wrap: break-word;
}

/* Gutenberg fixes */
body.blog .alignwide,
body.archive  .alignwide,
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

@media ( min-width: 48em ) { /* tablets and up = ~768px+ */
	body.blog .content,
	body.archive .content,
	body.search .content {
		-moz-column-count: 2;
		-webkit-column-count: 2;
		column-count: 2;
		padding-top: 2.5em;
	}

	/* For browsers that do not support column-span */
	@supports not (column-span: all) {
		body.blog .content,
		body.archive .content,
		body.search .content {
			padding-bottom: 3.5em;
			position: relative;
		}

		body.blog .content {
			padding-top: 3.5em;
		}

		body.archive .content,
		body.search .content {
			padding-top: 5.5em;
		}

		body.blog .navigation,
		body.archive .navigation,
		body.search .navigation,
		body.archive .archive__title,
		body.search .archive__title {
			position: absolute;
		}

		body.blog #nav-above,
		body.archive #nav-above,
		body.search #nav-above,
		body.archive .archive__title,
		body.search .archive__title {
			top: 0;
			right: 0;
			left: 0;
		}

		body.blog .content {
			padding-top: 6em;
		}

		body.blog #nav-above {
			top: 2.5em;
		}

		body.blog #nav-below,
		body.archive #nav-below,
		body.search #nav-below {
			right: 0;
			bottom: 0;
			left: 0;
		}
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

	body.blog .content,
	body.archive .content,
	body.search .content {
		-moz-column-count: 3;
		-webkit-column-count: 3;
		column-count: 3;
	}
}

@media ( min-width: 85.375em ) { /* widescreen desktop = ~1366px+ */
	body.blog .content,
	body.archive .content,
	body.search .content {
		-moz-column-count: 4;
		-webkit-column-count: 4;
		column-count: 4;
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
	wp_add_inline_style( 'urban-square-main-stylesheet', $masonry_css );
?>
