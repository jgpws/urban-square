=== Urban Square ===

Contributors: jgpws
Tags: two-columns, custom-logo, custom-menu, featured-images, microformats, sticky-post, threaded-comments, translation-ready, custom-background, custom-header, custom-colors, right-sidebar
Requires at least: 4.5
Tested up to: 5.4
Stable tag: 1.7.4
License: GPL-3.0-or-later
License URI: https://www.gnu.org/licenses/gpl-3.0-standalone.html

== Description ==
Urban Square is a theme based on a BlankSlate core. With this theme, your template will no longer have to look like anyone else's. You can change the header image, logo, background image and colors behind the background, header/footer/sidebar, menus and widgets. Urban Square is high definition ready, providing retina.js on option for inline images and an image upload for @2x backgrounds. The Header Image section in the Customizer has additions that let you choose two display modes for header images: Responsive- where images stretch with the browser window and Repeating- for simple repeating textures/patterns. Version 1.6 is now compatible with Gutenberg/WP 5.0.

== Changelog ==

= 1.7.4 2020-08-08 =
Added support for the wp_body_open tag.

= 1.7.3 2020-06-01 =
Fixed error in theme support for HTML 5 elements.

= 1.7.2 2020-05-20 to 2020-05-30 =
Continued support for the Block Editor including gradients; Code refactoring and value escaping.

= 1.7.1 2019-12-01 =
* Oops! Forgot the new screenshot

= 1.7.0 2019-11-28 to 2019-11-30 =
* Added default widgets to the sidebar; Implemented CSS Grid beneath the content and sidebar container in order to create a new layout style with the sidebar directly next to the content. Adjusted JavaScript (jQuery) to make resize work correctly for menus and widgets. Added a new screenshot

= 1.6.0 2018-12-07 to 2018-12-13 =
* Fixed fluidvideo script to account for the new container class
* Adjusted the layout in larger screen sizes to have a narrower content area (narrower paragraphs)
* Added compatibility with Gutenberg/WP 5.0 with styling for most blocks, custom color palette and matching editor styling

= 1.5.2 2018-12-03 =
* Fixed incorrect line-height for title in page, single templates

= 1.5.1 2018-11-28 =
* Fixes for Customizer live preview JavaScript

= 1.5.0 2018-11-17 to 2018-11-27 =
* Added flexbox row wrapping to top menu in tablet size and up
* Added a fallback pages menu for custom menus
* Centered images in Attachment template
* Added styling to form elements
* Added responsive styling to footer widgets
* Implemented a workaround for column-span in the Masonry layout to work in browsers that don't support it (Firefox)
* Fixed Sidebars for Page and Single in Masonry, Grid layouts. Sidebar widgets before were set to closed in desktop size and up
* Updated to the latest version of Font Awesome; added and removed icons
* Replaced float layout with flexbox for navigation items, logo
* Implemented the BEM (Block, Element, Modifier) syntax on many elements

= 1.4.3 2018-11-16 =
* Updated to the latest version of the retina.js library. High Definition images now require the .hd2x class
* Adjusted Archive, Categories widgets to use inline styling for when item count number is adjacent
* Changed readme.txt to new standard required by WordPress.org

= 1.4.2 2017-07-17 =
* Fixed header dropdown menu again, giving a minimum width for sub menu items, so the buttons will have space to sit right of the links

= 1.4.1 2017-11-16 =
* Removed unused custom-logo.php file; zipped up theme file without backup files inside
* Changed author name to Jason G. Designs
* Changed get_stylesheet_directory and get_template_directory_uri functions to not be assigned to a constant, but rather use them directly

= 1.4.0 2017-11-11 to 2017-11-14 =
* Removed the Fixed Custom Header option and replaced it with WordPress's native Logo feature. Adjusted the stylesheet accordingly
* Added two new font styles featuring the Arial and Georgia font stacks
* More fixes for the top menu. The top menu now uses flexbox for a cleaner layout. I now added the extra border on the left side of each button in tablet+ sizes
* Adjusted the menu in mobile size to use the same bg color as in the tablet+ sizes. Added an enclosing border around top level ul
* Fixed issue where the Custom Menu widget used inside of the sidebar did not display. I referenced more specific classes in the jQuery slideToggle functions in urban-square-scripts.js
* Fixed widgetized footer by checking if widgets are being used before rendering their enclosing ul
* Changed the bottom border for custom Colors in the Customizer to use the Supporting Border Color

= 1.3.3 2017-02-28 =
* Fixed rendering issues with the header menu. The hover, focus and active states in menu items were not showing background colors in default or customizer color schemes
* Cleaned up the borders and dropdowns in submenus two levels down
* Added padding to the Recent Comments sidebar widget

= 1.3.2 2016-04-02 =
* Fixed discrepancies between the Customizer Live Preview and front end display
* Adjusted the full length widget to reflect the same color schemes as the sidebar widgets for better integration with reversed colors

= 1.3.1 2016-03-24 =
* Fixed excerpt issue (excerpts shown on single pages) by specifying excerpts chosen from the Customizer option display on the blog posts page only

= 1.3 2016-02-16 to 2016-03-22 =
* Added support for WP 4.1 title tags. In the future, WordPress will let users control document titles from the admin panel or a plugin. Not hard coding the title supports this
* Used percentages for layout under widescreen desktop media query, instead of max-width, for a cleaner width spread
* Fixed error in style.css: Missing opening comment tag that caused the first (reset) style rule to be invalid
* Added footer editing capabilities for users to customize the footer. Also, author credit link can be hidden or shown via the Customizer
* Changed front end Customizer display code to use wp_add_inline_style, putting the code into WordPress's enqueue system
* Cleaned up sidebar background alignments. Made widgets two across in tablet screen size. Cleaned up display issues with RSS, Custom Menu widgets
* Added a custom callback to the Custom Background feature, integrating the 2x background with its equivalent background (it follows repeat, position, etc.)
* Added three page templates: Full Width No Comments, Landing Page (with a thin header, no comments) and Blank (with nothing)
* Added widget area in footer for additional information

= 1.2.1 2015-05-12 =
* Switched serif custom font used in the Customizer from Latin Modern Roman 10 to Old Standard TT, as the former font has a license that is incompatible with the GPL license
* Adjusted the Menu and Site Navigation label underlying code
* Prefixed handle titles under wp_enqueue_style function in urban_square_load_scripts

= 1.2 2015-03-20 to 2015-03-23 =
* Having no default colors for the Customizer resulted in the settings when stored to the database to not be removed when clearing the color value. Default colors have been restored for the Color settings
* Custom menus didn't render correctly when applied! For some reason, I thought the menu was already applied, but wasn't. This has been fixed by adding the custom menu auto generated classes to the menu display css
* Used a filter in functions.php to conditionally add the .desktop class to the body class tag
* Made menu buttons (hide/show menus, go to site nav) larger for mobile displays
* Changed overlooked blankslate text domain to urban-square in nav-above.php and nav-below.php template parts
* Added some sanitization functions to the output in urban_square_customizer-frontend.php. Particularly, esc_html was added to background urls

= 1.1.2 2015-03-09 =
* Fixed the top dropdown menu to render correctly in Opera (desktop version 12.12), by setting relative positioning on the menu's top and child level ul tags

= 1.1.1 2015-03-08 =
* Fixed the backend code to not set default colors for Customizer settings. If a color is not set, it doesn't display a style rule for it in the frontend. This leaves the default color styles provided by style.css

= 1.1 2015-03-06 to 2015-03-08 =
* Made dropdown icon buttons wider with a minimum width of 4.5em for touch screens (finger friendly design)
* Added border outlines around buttons in mobile and tablet views for clarity and updated the Customizer frontend display options to match
* Eliminated hiding of menus/widgets when clicked outside of said items, as this caused usability issues (widgets being hidden while tapping inside of the widget). For small screens with limited screen space, this feature isn't necessary
* Heights were being rendered differently for menu and widget dropdown buttons in Chromium and Firefox. This issue has been fixed

== About the Screenshot ==
The "Urban Square Theme" logo in the screenshot is included with this theme and is licensed under the Creative Commons Zero (CC0) license. The image can be found in this theme's images folder.

== Upgrade Notice ==

== Resources ==

= Libraries =
* retina.js, Copyright (c) 2013-2017 Steven Truesdell, John Newman, Ben Atkin, and other contributors, MIT, https://github.com/strues/retinajs

= Fonts =
* Afta Sans, Copyright (c) 2010 Oriol Esparraguera (hi@parqink.com), SIL Open Font
* Norwester, Copyright (c) 2013 Jamie Wilson (jamiewilson.io), SIL Open Font
* Old Standard TT, Copyright (c) Alexey Kryukov, SIL Open Font
* Playfair, Copyright (c) 2010-2012 Claus Eggers Sorensen (es@forthehearts.net), SIL Open Font
* Font Awesome Fonts, Copyright (c) 2018, SIL Open Font

== Credits ==
* Based on BlankSlate, (c) 2011-2014 TidyThemes, GNU General Public License | https://www.gnu.org/licenses/gpl.html

== Installation ==
* Please see the page About JG's Themes at Jason G. Designs: https://www.jasong-designs.com/about-jgs-wp-themes/

== Documentation ==
* The documentation for Urban Square can be found on its homepage http://www.jasong-designs.com/2015/03/04/urban-square/#documentation
