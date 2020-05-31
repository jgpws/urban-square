<?php
// CSS code for Old Standard custom font in the Block
$css .= '
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

:root {
	--font-family: playfair_display_regular, serif;
	--font-bold: playfair_display_bold, serif;
	--font-italic: playfair_display_italic, serif;
}

.editor-post-title__block .editor-post-title__input {
	font-family: var(--font-bold);
	font-variant: small-caps;
}

.wp-block-calendar table {
	font-family: var(--font-family);
}

.editor-styles-wrapper h1,
.editor-styles-wrapper h2,
.editor-styles-wrapper h3,
.editor-styles-wrapper h4,
.editor-styles-wrapper h5,
.editor-styles-wrapper h6 {
	font-variant: small-caps;
}

.editor-styles-wrapper h1,
.editor-styles-wrapper h2,
.editor-styles-wrapper h3,
.editor-styles-wrapper h4,
.editor-styles-wrapper h5,
.editor-styles-wrapper h6,
.editor-styles-wrapper p strong,
.editor-styles-wrapper p b,
.editor-styles-wrapper dl dt,
.editor-styles-wrapper table caption,
.editor-styles-wrapper table th {
	font-family: var(--font-bold);
}

.editor-styles-wrapper em,
.editor-styles-wrapper cite,
.editor-styles-wrapper blockquote,
.editor-styles-wrapper q,
.editor-styles-wrapper dl dd,
.wp-caption-text,
.gallery-caption {
	font-family: var(--font-italic);
}';
