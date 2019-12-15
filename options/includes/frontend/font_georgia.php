<?php
	$enqueue_main_style;
	$georgia_css = '
body,
input {
	font-family: Georgia, Times, "Times New Roman", serif;
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
.menu-label,
.site-nav-label {
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
	font-style: italic;
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $georgia_css )
?>