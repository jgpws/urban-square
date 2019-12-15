<?php
/* Everything Else background colors */
if( $everything_else_bgcolor != '' ) {
	$enqueue_main_style;
	$everything_else_bgcolor_css = '
/* Everything Else background colors */
blockquote,
q,
pre,
table tbody {
	background-color: ' . $everything_else_bgcolor . ';
}
			
.sticky {
	background-color: ' . $everything_else_bgcolor . ';
}
		
.bypostauthor .comment-author {
	background-color: ' . $everything_else_bgcolor . ';
}
			
#commentform {
	background-color: ' . $everything_else_bgcolor . ';
}
		
#wp-calendar,
#wp-calendar tbody {
	background-color: ' . $everything_else_bgcolor . ';
}';
	wp_add_inline_style( 'urban-square-main-stylesheet', $everything_else_bgcolor_css );
}
?>