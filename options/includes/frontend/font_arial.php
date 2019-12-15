<?php
	$enqueue_main_style;
	$arial_css = '
body,
input {
	font-family: Arial, Helvetica, sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6,
p strong,
p b,
dl dt,
table caption,
table th,
.header__site-title,
.header__menu-label,
.header__site-nav-label {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}

em,
cite,
blockquote,
q,
dl dd,
.header__site-description,
.post__meta,
.wp-caption-text,
.gallery-caption {
	font-family: Arial, Helvetica, sans-serif;
	font-style: italic;
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $arial_css );
?>