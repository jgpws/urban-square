<?php
	$enqueue_main_style;
	$georgia_css = '
:root {
	--font-family: Georgia, Times, "Times New Roman", serif;
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $georgia_css );
