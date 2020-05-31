//$.noConflict();

( function( $ ) { // opens function

/* --- HideShowWP.js --- */
/* The HideShowWP script was created as part of this theme */
/* The license for this script is GNU General Public License */
/* https://www.gnu.org/licenses/gpl.html */

// define variables to hold data
	var windowWidth;

	var menu = ".menu--header";
	var menuButton = ".button--header-menu";
	var siteNavTitle = ".button--header-site-nav";
	var hasChildrenLink = ".menu--header .page_item_has_children > a";
	var customHasChildrenLink = ".menu-item-has-children > .menu__anchor--header";
	var menuChildren = ".menu--header .children";
	var customMenuChildren = ".menu__item--header > .sub-menu";
	var menuLink = ".menu--header li a";
	var menuChildrenLink = ".menu--header .children .page_item a";
	var customMenuChildrenLink = ".menu--header .sub-menu .menu__anchor--header";
	var menuDownArrow = ".menu--header .fa-caret-down";

	var widgetTitle = ".widget__title--collapsible";
	var widget = ".widget--sidebar > ul";
	var widgetDiv = ".widget--sidebar div";
	var widgetMenu = ".widget--sidebar .menu";
	var widgetChildren = 'widget--sidebar .children';
	var widgetMenuChildren = 'widget--sidebar .sub-menu';
	var widgetSelect = ".widget--sidebar select";
	var widgetLink = ".widget--sidebar ul li a";
	var widgetCalendar = ".widget--sidebar #calendar_wrap";
	var widgetSearch = ".widget--sidebar .search__form";
	var widgetText = ".widget--sidebar .textwidget";
	var widgetTagCloud = ".widget--sidebar .tagcloud";
	var widgetDownArrow = ".widget--sidebar .fa-caret-down";

  var widgetWC = ".widget--sidebar .widget.woocommerce";

	// Setup our initial state in the browser; If this is not set, hidden objects will not be hidden until resizing happens.
	windowWidth = $( window ).width();

	function menuWidgetsInit() {
		$( menuChildren ).hide(); // hide menu children onload in all screen sizes
		$( customMenuChildren ).hide();

		// Desktop size begins at 1025px to exclude tablets in landscape
		if ( 	windowWidth <= 1024 ||
				usScriptParams.layouts === 'masonry' && !$( 'body' ).hasClass( 'single' ) && !$( 'body' ).hasClass( 'page' ) ||
				usScriptParams.layouts === 'grid' && !$( 'body' ).hasClass( 'single' ) && !$( 'body' ).hasClass( 'page' ) ) {
			$( widget ).hide();
			// These widgets have optional titles; the widgets must be shown if there are no titles and dropdown buttons on load.
			if ( $( '.widget_calendar .widget__title--collapsible' ).length > 0 ) {
				$( widgetCalendar ).hide();
			} else {
				$( widgetCalendar ).show();
			}
			if( $( '.widget_search .widget__title--collapsible' ).length > 0 ) {
				$( widgetSearch ).hide();
			} else {
				$( widgetSearch ).show();
			}
			if( $( '.widget_text .widget__title--collapsible' ).length > 0 ) {
				$( widgetText ).hide();
			} else {
				$( widgetText ).show();
			}
			if ( $( '.widget_nav_menu .widget__title--collapsible' ).length > 0 ) {
				$( widgetMenu ).hide();
			} else {
				$( widgetMenu ).show();
			}
			$( widgetTagCloud ).hide();
			$( widgetSelect ).hide();
      $( widgetWC ).hide();
			$( menu ).hide();
		}

		// Change cursor above site navigation link
		$( siteNavTitle ).css( "cursor", "pointer" );
	}

	function appendButtons() {
		// Place arrow icon font next to title dropdowns
		// Place menu icon in Menu title and place Site Nav icon in "Go to site navigation" link
		$( menuButton ).append( "<i class=\"fas fa-bars reverse-supporting-color\"></i><i class=\"fas fa-caret-down reverse-supporting-color\"></i>" );
		$( siteNavTitle ).append( "<i class=\"fas fa-list-ul reverse-supporting-color\"></i><i class=\"fas fa-caret-down reverse-supporting-color\"></i>" );
		$( widgetTitle ).after( "<button class=\"button button--widget fas fa-caret-down reverse-supporting-color\" title=\"Click or Tab and Press Enter to Open/Close Widget\"></button>" );
		$( hasChildrenLink ).after("<button class=\"button button--header-submenu fas fa-caret-down\" title=\"Click or Tab and Press Enter to Open/Close Submenu\"></button>"); // add arrow icon
		$( customHasChildrenLink ).after( "<button class=\"button button--header-submenu fas fa-caret-down\" title=\"Click or Tab and Press Enter to Open/Close Submenu\"></button>" );
	}

	function toggleMenusWidgets() {
		// Toggle menu
		$( menuButton ).click( function() {
			$( menu ).slideToggle( "slow" );
		});

		// Toggle on click for menu down arrow icon
		$( menuDownArrow ).click( function() {
			$(this).next().slideToggle( "slow" ); // this = .button--header-submenu; next = .children/.sub-menu
		});

		// Toggle widgets when down arrow is clicked
		$( widgetDownArrow ).click( function() {
			$(this).closest( "li" ).find( "ul" ).slideToggle( "slow" ); // this = .widget-container .icon-sort-desc
			$(this).closest( "li" ).find( ".calendar_wrap" ).slideToggle( "slow" );
			$(this).closest( "li" ).find( "select" ).slideToggle( "slow" );
			$(this).closest( "li" ).find( ".search__form" ).slideToggle( "slow" );
			$(this).closest( "li" ).find( ".tagcloud" ).slideToggle( "slow" );
			$(this).closest( "li" ).find( ".textwidget" ).slideToggle( "slow" );
      $(this).closest( "li" ).find( ".widget_shopping_cart_content" ).slideToggle( "slow" );
			// using this selects one widget title at a time.
			//console.log($(this));
		});
	}

	function resizeMenusWidgets() {
		var docWidth = $( document ).width();
		if ( docWidth < 1025 ) {
			//console.log( docWidth );
			$( menu ).slideUp( "slow" );
			$( widget ).slideUp( "slow" );

			if ( $( '.widget_calendar .widget__title--collapsible' ).length > 0 ) {
				$( widgetCalendar ).slideUp( "slow" );
			} else {
				$( widgetCalendar ).slideDown( "slow" );
			}

			if( $( '.widget_search .widget__title--collapsible' ).length > 0 ) {
				$( widgetSearch ).slideUp( "slow" );
				//console.log( "Search slid up" );
			} else {
				$( widgetSearch ).slideDown( "slow" );
				//console.log( "Search slid down" );
			}

			$( widgetSelect ).slideUp( "slow" );
			$( widgetText ).slideUp( "slow" );

		} else {

			if ( $( "body" ).hasClass( "masonry" ) || $( "body" ).hasClass( "grid" ) ) {
				$( ".masonry " + menu ).slideUp( "slow" );
				$( ".grid " + menu ).slideUp( "slow" );
				$( ".masonry " + widget ).slideUp( "slow" );
				$( ".grid " + widget ).slideUp( "slow" );

				if ( $( ".masonry .widget_calendar .widget__title--collapsible" ).length > 0 || $( ".grid .widget_calendar .widget__title--collapsible" ).length > 0 ) {
					$( ".masonry " + widgetCalendar ).slideUp( "slow" );
					$( ".grid " + widgetCalendar ).slideUp( "slow" );
				} else {
					$( widgetCalendar ).slideDown( "slow" );
				}

				if( $( '.masonry .widget_search .widget__title--collapsible' ).length > 0 || $( '.grid .widget_search .widget__title--collapsible' ).length > 0 ) {
				$( ".masonry " + widgetSearch ).slideUp( "slow" );
				$( ".grid " + widgetSearch ).slideUp( "slow" );

				} else {
					$( widgetSearch ).slideDown( "slow" );
				}
				$( widgetSelect ).slideUp( "slow" );
				$( widgetText ).slideUp( "slow" );

			} else {
				$( menu ).slideDown( "slow" );
				$( widget ).slideDown( "slow" );
				$( widgetCalendar ).slideDown( "slow" );
				$( widgetSelect ).slideDown( "slow" );
				$( widgetText ).slideDown( "slow" );
			}

		}
	}

	// To test the above for accessibility, press Enter or Return when tabbing over the down arrow buttons

	function menuWidgetsFocus() {
		// Hide menu children after last child link loses focus
		$( menuChildrenLink ).last().blur( function() {
			$( menuChildren ).hide();
		});

		$( customMenuChildrenLink ).last().blur( function() {
			$( customMenuChildren ).hide();
		});

		// Hide entire menu when last top level link loses focus
		// only in tablet size and under
		if ( windowWidth <= 1024 ) {
			$( menuLink ).last().blur( function() {
				$( menu ).hide();
			});
		}

		// Hide when last widget link has lost focus
		if ( windowWidth <= 1024 ) {
			$( widgetLink ).last().blur( function() {
				$( widget ).hide();
				$( widgetDiv ).hide();
			});
		}
	}

	/*$( window ).on( 'resize', function() {
		menuWidgetsInit();
		console.log( "menu and widgets resized." );
	} );*/

	// Load essential functions on page load
	menuWidgetsInit();
	appendButtons();
	toggleMenusWidgets();
	menuWidgetsFocus();

	var resizeId;

	$( window ).resize( function() {
		clearTimeout( resizeId );
		setTimeout( resizeMenusWidgets, 500 );
	} );

/* --- --- */

/* --- backToTop.js --- */
/* see http://www.developerdrive.com/2013/07/using-jquery-to-add-a-dynamic-back-to-top-floating-button-with-smooth-scroll/ */

	var offset = 220;
	var duration = 500;
	var backToTop = ".back-to-top";

	$( window ).scroll(function () {
		if ( $(this).scrollTop() > offset ) {
			$( backToTop ).fadeIn( duration );
		} else {
			$( backToTop ).fadeOut( duration );
		}
	});

	$( backToTop ).click(function (event) {
		event.preventDefault();
		$("html, body").animate({scrollTop: 0}, duration);
		return false;
	});
/* --- --- */

/* --- fluidVideo.js --- */
/*

Fluid videos on responsive websites; see this CSS-Tricks.com page:
http://css-tricks.com/NetMag/FluidWidthVideo/Article-FluidWidthVideo.php

*/

	// Find all YouTube videos
		var $allVideos = $("iframe[src^='http://www.youtube.com'], iframe[src^='https://www.youtube.com'], iframe[src^='http://player.vimeo.com'], object, embed"),

			// The element that has fluid width; change this value to the parent container of the video in your theme
			$fluidEl = $('.post__content');

		// Figure out and save aspect ratio for each video
		$allVideos.each(function() {

		$(this)
			// jQuery .data does not work on object/embed elements
			//.data('aspectRatio', this.height/this.width)
			.attr('data-aspectRatio', this.height / this.width)

			// and remove the hard coded width/height
			.removeAttr('height')
			.removeAttr('width');

		});

		// When the window is resized
		$(window).resize(function() { // opens window resize function

			var newWidth = $fluidEl.width();

			// Resize all videos according the their own aspect ratio
			$allVideos.each(function() {

				var $el = $(this);
				$el
					.width(newWidth)
					.height(newWidth * $el.attr('data-aspectRatio'));

			});

		}).resize(); // closes window resize function
/* --- --- */

/* --- Add data attribute to img tags --- */

var imgs = $('img.hd2x');
var imgsGtnbg = $('.hd2x img');

// Apply data-rjs attribute to all images with the class .hd2x, letting retina.js find @2x images
imgsGtnbg.attr('data-rjs', '2');
imgs.attr('data-rjs', '2');
//console.log(imgs);
/* --- --- */

} )( jQuery ); // closes function
