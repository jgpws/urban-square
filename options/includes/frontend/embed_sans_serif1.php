<?php
	$enqueue_main_style;
	$sans_serif1_css = '
@font-face {
font-family: "norwester_regular";
	src: url(' . $stylesheet_directory . '/fonts/norwester-webfont.eot);
	src: url(' . $stylesheet_directory . '/fonts/norwester-webfont.eot?#iefix) format("embedded-opentype"),
		url(' . $stylesheet_directory . '/fonts/norwester-webfont.woff2) format("woff2"),
		url(' . $stylesheet_directory . '/fonts/norwester-webfont.woff) format("woff"),
		url(' . $stylesheet_directory . '/fonts/norwester-webfont.ttf) format("truetype"),
		url(' . $stylesheet_directory . '/fonts/norwester-webfont.svg#norwesterregular) format("svg");
	font-weight: bold;
	font-style: normal;
}

@font-face {
font-family: "afta_sans_regular";
	src: url(' . $stylesheet_directory . '/fonts/aftasansthin-regular-webfont.eot);
	src: url(' . $stylesheet_directory . '/fonts/aftasansthin-regular-webfont.eot?#iefix) format("embedded-opentype"),
		url(' . $stylesheet_directory . '/fonts/aftasansthin-regular-webfont.woff2) format("woff2"),
		url(' . $stylesheet_directory . '/fonts/aftasansthin-regular-webfont.woff) format("woff"),
		url(' . $stylesheet_directory . '/fonts/aftasansthin-regular-webfont.ttf) format("truetype"),
		url(' . $stylesheet_directory . '/fonts/aftasansthin-regular-webfont.svg#afta_sansregular) format("svg");
	font-weight: normal;
	font-style: normal;
}

@font-face {
font-family: "afta_sans_italic";
	src: url(' . $stylesheet_directory . '/fonts/aftasansthin-italic-webfont.eot);
	src: url(' . $stylesheet_directory . '/fonts/aftasansthin-italic-webfont.eot?#iefix) format("embedded-opentype"),
		url(' . $stylesheet_directory . '/fonts/aftasansthin-italic-webfont.woff2) format("woff2"),
		url(' . $stylesheet_directory . '/fonts/aftasansthin-italic-webfont.woff) format("woff"),
		url(' . $stylesheet_directory . '/fonts/aftasansthin-italic-webfont.ttf) format("truetype"),
		url(' . $stylesheet_directory . '/fonts/aftasansthin-italic-webfont.svg#afta_sansitalic) format("svg");
	font-weight: normal;
	font-style: italic;
}

:root {
	--font-family: afta_sans_regular, sans-serif;
	--font-alt: norwester_regular, sans-serif;
	--font-italic: afta_sans_italic, sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6,
.header__site-title,
.header__menu-label,
.header__site-nav-label {
	font-family: var(--font-alt);
}

p strong,
p b,
dl dt,
table caption,
table th {
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
	font-family: var(--font-italic);
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $sans_serif1_css );
