<?php
// CSS code for Norwester/Afta custom font in the Block Editor

$css .= '
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

:root {
  --font-family: afta_sansregular, sans-serif;
}

.editor-styles-wrapper {
  font-family: var(--font-family) !important;
}

.editor-styles-wrapper .editor-post-title__block .editor-post-title__input {
  font-family: norwester_regular, sans-serif !important;
}

.editor-styles-wrapper h1,
.editor-styles-wrapper h2,
.editor-styles-wrapper h3,
.editor-styles-wrapper h4,
.editor-styles-wrapper h5,
.editor-styles-wrapper h6 {
  font-family: norwester_regular, sans-serif;
}

.wp-block-calendar table {
	font-family: var(--font-family);
}';
