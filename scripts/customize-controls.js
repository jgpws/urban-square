/**
 * Scripts to alter the behavior of Customizer controls.
 */
( function ( $ ) {
  wp.customize.bind( 'ready', function() {
    function hideShowColorControls() {
      /* Hide and show controls for the color scheme when "Custom" is chosen */
      var colorControlIds = [
        'urban_square_header_footer_bgcolor',
        'urban_square_menu_widgets_bgcolor',
        'urban_square_header_secondary_color',
        'urban_square_link_color',
        'urban_square_link_secondary_color',
        'urban_square_supporting_color',
        'urban_square_supporting_secondary_color',
        'urban_square_supporting_border_color',
        'urban_square_everything_else_bgcolor',
        'urban_square_reverse_textcolor',
        'urban_square_reverse_menu_linkcolor',
        'urban_square_reverse_menu_linkcolor_white',
        'urban_square_reverse_supporting_color',
        'urban_square_reverse_everything_textcolor'
      ];

      if ( wp.customize.instance( 'urban_square_colors_switcher' ).get() === 'custom' ) {
        $.each( colorControlIds, function ( i, value ) {
          $( '#customize-control-' + value ).show();
        } );
      } else {
        $.each( colorControlIds, function ( i, value ) {
          $( '#customize-control-' + value ).hide();
        } );
      }

      return hideShowColorControls;
    }

    // Call functions on page load
    hideShowColorControls();

    // ... and on radio button change
    $( '#customize-control-urban_square_colors_switcher' ).on( 'change', hideShowColorControls );
  } );
} ) ( jQuery );
