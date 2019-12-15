<?php
	$enqueue_main_style;
	$serif1_css = '
@font-face {
font-family: "old_standard_ttregular";
	src: url(' . $stylesheet_directory . '/fonts/oldstandard-regular-webfont.eot);
	src: url(' . $stylesheet_directory . '/fonts/oldstandard-regular-webfont.eot?#iefix) format("embedded-opentype"),
		url(' . $stylesheet_directory . '/fonts/oldstandard-regular-webfont.woff) format("woff"),
		url(' . $stylesheet_directory . '/fonts/oldstandard-regular-webfont.ttf) format("truetype"),
		url(' . $stylesheet_directory . '/fonts/oldstandard-regular-webfont.svg#old_standard_ttregular) format("svg");
	font-weight: normal;
	font-style: normal;
}
	
@font-face {
font-family: "old_standard_ttbold";
	src: url(' . $stylesheet_directory . '/fonts/oldstandard-bold-webfont.eot);
	src: url(' . $stylesheet_directory . '/fonts/oldstandard-bold-webfont.eot?#iefix) format("embedded-opentype"),
		url(' . $stylesheet_directory . '/fonts/oldstandard-bold-webfont.woff) format("woff"),
		url(' . $stylesheet_directory . '/fonts/oldstandard-bold-webfont.ttf) format("truetype"),
		url(' . $stylesheet_directory . '/fonts/oldstandard-bold-webfont.svg#old_standard_ttbold) format("svg");
	font-weight: bold;
	font-style: normal;
}
	
@font-face {
font-family: "old_standard_ttitalic";
	src: url(' . $stylesheet_directory . '/fonts/oldstandard-italic-webfont.eot);
	src: url(' . $stylesheet_directory . '/fonts/oldstandard-italic-webfont.eot?#iefix) format("embedded-opentype"),
		url(' . $stylesheet_directory . '/fonts/oldstandard-italic-webfont.woff) format("woff"),
		url(' . $stylesheet_directory . '/fonts/oldstandard-italic-webfont.ttf) format("truetype"),
		url(' . $stylesheet_directory . '/fonts/oldstandard-italic-webfont.svg#old_standard_ttitalic) format("svg");
	font-weight: normal;
	font-style: italic;
}
			
body,
input {
	font-family: old_standard_ttregular, serif;
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
	font-family: old_standard_ttbold, serif;
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
	font-family: old_standard_ttitalic;
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $serif1_css );
?>