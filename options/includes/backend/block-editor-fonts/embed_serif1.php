<?php
// CSS code for Old Standard custom font in the Block Editor

$css .= '
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

:root {
	--font-family: old_standard_ttregular, serif;
	--font-bold: old_standard_ttbold, serif;
	--font-italic: old_standard_ttitalic, serif;
}

.editor-post-title__block .editor-post-title__input {
	font-family: var(--font-bold);
}

.wp-block-calendar table {
	font-family: var(--font-family);
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
.editor-styles-wrapper .wp-caption-text,
.editor-styles-wrapper .gallery-caption {
	font-family: var(--font-italic);
}';
