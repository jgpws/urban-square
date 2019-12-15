<?php
	$enqueue_main_style;
	$serif2_css = '
@font-face {
font-family: "playfair_display_regular";
	src: url(' . $stylesheet_directory . '/fonts/playfairdisplay-regular-webfont.eot);
	src: url(' . $stylesheet_directory . '/fonts/playfairdisplay-regular-webfont.eot?#iefix) format("embedded-opentype"),
		url(' . $stylesheet_directory . '/fonts/playfairdisplay-regular-webfont.woff2) format("woff2"),
		url(' . $stylesheet_directory . '/fonts/playfairdisplay-regular-webfont.woff) format("woff"),
		url(' . $stylesheet_directory . '/fonts/playfairdisplay-regular-webfont.ttf) format("truetype"),
		url(' . $stylesheet_directory . '/fonts/playfairdisplay-regular-webfont.svg#playfair_displayregular) format("svg");
		font-weight: normal;
		font-style: normal;
}
			
@font-face {
font-family: "playfair_display_bold";
	src: url(' . $stylesheet_directory . '/fonts/playfairdisplay-bold-webfont.eot);
   src: url(' . $stylesheet_directory . '/fonts/playfairdisplay-bold-webfont.eot?#iefix) format("embedded-opentype"),
		url(' . $stylesheet_directory . '/fonts/playfairdisplay-bold-webfont.woff2) format("woff2"),
		url(' . $stylesheet_directory . '/fonts/playfairdisplay-bold-webfont.woff) format("woff"),
		url(' . $stylesheet_directory . '/fonts/playfairdisplay-bold-webfont.ttf) format("truetype"),
		url(' . $stylesheet_directory . '/fonts/playfairdisplay-bold-webfont.svg#playfair_displaybold) format("svg");
	font-weight: bold;
	font-style: normal;
}
	
@font-face {
	font-family: "playfair_display_italic";
	src: url(' . $stylesheet_directory . '/fonts/playfairdisplay-italic-webfont.eot);
	src: url(' . $stylesheet_directory . '/fonts/playfairdisplay-italic-webfont.eot?#iefix) format("embedded-opentype"),
		url(' . $stylesheet_directory . '/fonts/playfairdisplay-italic-webfont.woff2) format("woff2"),
		url(' . $stylesheet_directory . '/fonts/playfairdisplay-italic-webfont.woff) format("woff"),
		url(' . $stylesheet_directory . '/fonts/playfairdisplay-italic-webfont.ttf) format("truetype"),
		url(' . $stylesheet_directory . '/fonts/playfairdisplay-italic-webfont.svg#playfair_displayitalic) format("svg");
	font-weight: normal;
	font-style: normal;
}

body,
input {
	font-family: playfair_display_regular, serif;
}

h1,
h2,
h3,
h4,
h5,
h6,
.header__site-title {
	font-variant: small-caps;
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
	font-family: playfair_display_bold, serif;
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
	font-family: playfair_display_italic;
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $serif2_css );
?>