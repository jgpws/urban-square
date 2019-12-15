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
font-family: "afta_sansregular";
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
font-family: "afta_sansitalic";
	src: url(' . $stylesheet_directory . '/fonts/aftasansthin-italic-webfont.eot);
	src: url(' . $stylesheet_directory . '/fonts/aftasansthin-italic-webfont.eot?#iefix) format("embedded-opentype"),
		url(' . $stylesheet_directory . '/fonts/aftasansthin-italic-webfont.woff2) format("woff2"),
		url(' . $stylesheet_directory . '/fonts/aftasansthin-italic-webfont.woff) format("woff"),
		url(' . $stylesheet_directory . '/fonts/aftasansthin-italic-webfont.ttf) format("truetype"),
		url(' . $stylesheet_directory . '/fonts/aftasansthin-italic-webfont.svg#afta_sansitalic) format("svg");
	font-weight: normal;
	font-style: italic;
}

body,
input {
	font-family: afta_sansregular, sans-serif;
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
	font-family: norwester_regular;
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
	font-family: afta_sansitalic, sans-serif;
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $sans_serif1_css );
?>