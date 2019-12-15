( function ( $ ) {
	// Update the Site Title in real time...
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.header__site-title-link' ).html( to );
		} );
	} );

	// Update the Site Description in real time...
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.header__site-description' ).html( to );
		} );
	} );

	// Update site background color...
	wp.customize( 'background_color', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).css( 'background-color', to );
			$( 'body.custom-background .menu--header .current_page_item a:link, body.custom-background .menu--header .current_page_item a:visited, body.custom-background .menu--header .current_page_item .icon-sort-desc' ).css( 'background-color', to );
		} );
	} );

	// Other colors
	wp.customize( 'header_footer_bgcolor', function( value ) {
		value.bind( function( to ) {
			$( '.wrapper .header-footer-bgcolor' ).css( 'background-color', to );
		} );
	} );

	wp.customize( 'link_color', function( value ) {
		value.bind( function( to ) {
			$( 'article a:link, article a:visited, .menu--header a:link, .menu--header a:visited, #comments a:link, #comments a:visited' ).css( 'color', to );
			$( '.post__edit-link:link, .post__edit-link:visited' ).addClass( 'white-text' );
			$( '.post__entry-links a:link, .post__entry-links a:link' ).addClass( 'white-text' );
			$( '.comment-reply-link:link, .comment-reply-link:visited' ).addClass( 'white-text' );
		} );
	} );

	wp.customize( 'supporting_color', function( value ) {
		value.bind( function( to ) {
			$( 'button, input[type="reset"], input[type="submit"], .header__panel .supporting-bgcolor, .content .supporting-bgcolor a:link, .content .supporting-bgcolor a:visited, .sidebar .supporting-bgcolor, .sidebar .button--widget, .page-numbers, .comment-reply-link:link, .comment-reply-link:visited, #wp-calendar tr th, #wp-calendar td a' ).css( 'background-color', to );
			$( '.search__field' ).css( { 'border' : '1px solid' + to } );
			$( '.button--header-submenu' ).css( 'color', to );
			if( ( 'supporting_color' !== '' ) || ( 'supporting_color' !== '#800000' ) ) {
				$( '.back-to-top:link, .back-to-top:visited' ).css( { 'background-color' : 'rgba( 51, 51, 51, 0.8 )' } );
			} else {
				$( '.back-to-top:link, .back-to-top:visited' ).css( { 'background-color' : '#800000' } );
			}
		} );
	} );

	wp.customize( 'menu_widgets_bgcolor', function( value ) {
		value.bind( function( to ) {
			$( '.menu--header, .menu--header .page_item a:link, .menu--header .page_item a:visited, .menu__anchor--header:link, .menu__anchor--header:visited, .button--header-submenu, .menu--header .children, .menu--header .sub-menu, .sidebar__widget-area, .footer__widgets' ).css( 'background-color', to );
			var windowWidth = $( window ).width();
			if( windowWidth >= 768 ) {
				$( '.menu--header' ).css( { 'background-color' : 'transparent' } );
			}
		} );
	} );

	wp.customize( 'supporting_border_color', function( value ) {
		value.bind( function( to ) {
			$( '.sidebar__widget-area' ).css( { 'border-bottom-color' : to } );
			var windowWidth = $( window ).width();
			if( windowWidth >= 768 ) {
				$( '.menu--header .page_item, .menu__item--header' ).css( { 'border-right-color' : to, 'border-top-color' : to, 'border-left-color' : to } );
				$( '.menu--header .children, .menu--header .sub-menu' ).css( { 'border-color' : to } );
				$( '.button--header-submenu' ).css( { 'border-left-color' : to } );
			} else {
				$( '.menu--header' ).css( { 'border-color' : to } );
				$( '.button--header-submenu' ).css( { 'border' : '1px solid' + to } );
			}
			if( windowWidth >= 1025 ) {
				$( '.content-sidebar .sidebar' ).css( { 'border-top-color' : to, 'border-bottom-color' : to } );
			}
			$( 'article' ).css( 'border-color', to );
			$( 'input, select, table, textarea' ).css( 'border-color', to );
			$( '.sticky' ).css( { 'border-bottom-color' : to, 'border-top-color' : to } );
			$( '.bypostauthor .comment-author' ).css( 'border-bottom-color', to );
			$( '.footer__widgets' ).css( 'border-bottom-color', to );
		} );
	} );

	wp.customize( 'everything_else_bgcolor', function( value ) {
		value.bind( function( to ) {
			$( 'blockquote, q, pre, table tbody, .sticky, .bypostauthor .comment-author, #commentform, #wp-calendar, #wp-calendar tbody' ).css( 'background-color', to );
			$( '.wp-block-pullquote blockquote' ).css( 'background-color', 'transparent' );
		} );
	} );

	// Append style sheet with classes to head tag; switch color reverses on/off; previewing for header image
	$( 'head' ).append(
	'<style type="text/css" id="preview-classes">' + "\n" +
	'.white-text { color: #ffffff !important; }' + "\n\n" +
	'.black-text { color: #333333 !important; }' +
	'</style>' );

	wp.customize( 'reverse_textcolor', function( value ) {
		value.bind( function( to ) {
			if( to === true ) {
				$( '.header__site-description' ).addClass( 'white-text' ).removeClass( 'black-text' );
				$( '.content' ).addClass( 'white-text' ).removeClass( 'black-text' );
				$( '.wp-block-image figcaption' ).addClass( 'white-text' ).removeClass( 'black-text' );
				$( '.footer__copyright, .footer__credits' ).css( { 'color' : '#f5f5f5' } );
				$( '.footer__credits a, .footer__credits a:focus, .footer__credits a:hover' ).addClass( 'white-text' ).removeClass( 'black-text' );
			} else {
				$( '.header__site-description' ).addClass( 'black-text' ).removeClass( 'white-text' );
				$( '.content' ).removeClass( 'white-text' ).addClass( 'black-text' );
				$( '.wp-block-image figcaption' ).addClass( 'black-text' ).removeClass( 'white-text' );
				$( '.footer__copyright, .footer__credits' ).css( { 'color' : '#333333' } );
				$( '.footer__credits a, .footer__credits a:focus, .footer__credits a:hover' ).removeClass( 'white-text' ).addClass( 'black-text' );
			}
		} );
	} );

	wp.customize( 'reverse_menu_linkcolor', function( value ) {
		value.bind( function( to ) {
			if( to === true ) {
				$( '.menu--header .page_item a, .menu__anchor--header, .widget ul li a, .footer__widgets a' ).addClass( 'black-text' );
			} else {
				$( '.menu--header .page_item a, .menu__anchor--header, .widget ul li a, .footer__widgets a' ).removeClass( 'black-text' );
			}
		} );
	} );

	wp.customize( 'reverse_menu_linkcolor_white', function( value ) {
		value.bind( function( to ) {
			if( to === true ) {
				$( '.menu--header .page_item a, .menu__anchor--header, .widget ul li a, .tag-cloud-link:link, .tag-cloud-link:visited, .footer__widgets a' ).addClass( 'white-text' ).removeClass( 'black-text' );
				$( '.widget, .footer__widgets' ).css( { 'color' : '#f5f5f5' } );
				$( '#wp-calendar tbody' ).css( { 'color' : '#333333' } );
				$( '.footer' ).css( { 'color' : '#f5f5f5' } )
			} else {
				$( '.menu--header .page_item a, .menu__anchor--header, .widget ul li a, .footer__widgets a' ).removeClass( 'white-text' ).addClass( 'black-text' );
				$( '.widget, .footer__widgets' ).css( { 'color' : '#333333' } );
				$( '#wp-calendar tbody' ).css( { 'color' : '#333333' } );
			}
		} );
	} );

	wp.customize( 'reverse_supporting_color', function( value ) {
		value.bind( function( to ) {
			if( to === true ) {
				$( '.search .reverse-supporting-color, .header__button-panel .reverse-supporting-color, .sidebar .reverse-supporting-color, .content .reverse-supporting-color a:link, .content .reverse-supporting-color a:visited, .comment-reply-link:link, .comment-reply-link:visited, #wp-calendar tr th, #wp-calendar td a, .widget__title--collapsible .rsswidget' ).addClass( 'black-text' );
				$( '.button--widget' ).css( { 'border-left' : '1px solid #333333' } );
			} else {
				$( '.search .reverse-supporting-color, .header__button-panel .reverse-supporting-color, .sidebar .reverse-supporting-color, .content .reverse-supporting-color a:link, .content .reverse-supporting-color a:visited, .comment-reply-link:link, .comment-reply-link:visited, #wp-calendar tr th, #wp-calendar td a' ).removeClass( 'black-text' ).addClass( 'white-text' );
				$( '.button--widget' ).css( { 'border-left' : '1px solid #ffffff' } );
			}
		} );
	} );

	wp.customize( 'reverse_everything_textcolor', function( value ) {
		value.bind( function( to ) {
			if( to === true ) {
				$( 'blockquote, q, table, tbody, pre, body .sticky, body #commentform, body .bypostauthor .comment-author' ).addClass( 'black-text' );
				$( '.content table caption, .content table thead' ).addClass( 'white-text' ).removeClass( 'black-text' );
			} else {
				$( 'blockquote, q, table, tbody, pre, body .sticky, body #commentform, body .bypostauthor .comment-author' ).removeClass( 'black-text' );
				$( '.content table caption, .content table thead' ).removeClass( 'white-text' ).addClass( 'black-text' );
			}
		} );
	} );

	// Header Images


	// Footer options
	wp.customize( 'urban_square_edit_footer', function( value ) {
		value.bind( function( to ) {
			$( '#copyright' ).html( to );
		} );
	} );

	wp.customize( 'urban_square_footercredits', function( value ) {
		value.bind( function( to ) {
			$( '#credits' ).show();
			if( to === true ) {
				$( '#credits' ).show();
			} else {
				$( '#credits' ).hide();
			}
		} );
	} );
} ) ( jQuery );
