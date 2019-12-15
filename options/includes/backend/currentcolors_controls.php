<?php
/* Add custom text for the current color scheme */
class urban_square_currentcolors extends WP_Customize_Control { // opens class
	public $type = 'currentcolors_text';
	
	public function render_content() { // opens render content 
	$header_footer_bgcolor = get_theme_mod( 'header_footer_bgcolor' );
	$header_secondary_color = get_theme_mod( 'header_secondary_color' );
	$menu_widgets_bgcolor = get_theme_mod( 'menu_widgets_bgcolor' );
	$border_colors = get_theme_mod( 'supporting_border_color' );
	$link_color = get_theme_mod( 'link_color' );
	$link_secondary_color = get_theme_mod( 'link_secondary_color' );
	$supporting_color = get_theme_mod( 'supporting_color' );
	$supporting_secondary_color = get_theme_mod( 'supporting_secondary_color' );
	$everything_else_bgcolor = get_theme_mod( 'everything_else_bgcolor' );
	?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		</label>
		<div>
			<p>
				<strong><?php _e( 'Header Text Color:', 'urban-square' ) ?></strong> #<?php echo get_header_textcolor(); ?><br />
				<strong><?php _e( 'Background Color:', 'urban-square' ) ?></strong> #<?php background_color(); ?><br />
				<strong><?php _e( 'Header Text Hover / Active Color:', 'urban-square' ) ?></strong> <?php echo $header_secondary_color; ?><br />
				<strong><?php _e( 'Header, Footer and Sidebar Background Color:', 'urban-square' ) ?></strong> <?php echo $header_footer_bgcolor; ?><br />
				<strong><?php _e( 'Menu / Widgets Background Color:', 'urban-square' ) ?></strong> <?php echo $menu_widgets_bgcolor; ?><br />
				<strong><?php _e( 'Border Colors:', 'urban-square' ) ?></strong> <?php echo $border_colors; ?><br />
				<strong><?php _e( 'Link Color:', 'urban-square' ) ?></strong> <?php echo $link_color; ?><br />
				<strong><?php _e( 'Link Hover / Active Color:', 'urban-square' ) ?></strong> <?php echo $link_secondary_color; ?><br />
				<strong><?php _e( 'Supporting Color:', 'urban-square' ) ?></strong> <?php echo $supporting_color; ?><br />
				<strong><?php _e( 'Supporting Hover / Active Color:', 'urban-square' ) ?></strong> <?php echo $supporting_secondary_color; ?><br />
				<strong><?php _e( 'Everything Else Background Color:', 'urban-square' ) ?></strong> <?php echo $everything_else_bgcolor; ?><br />
				<strong><?php _e( 'Reverse Body Text Color:', 'urban-square' ) ?></strong> 
				<?php if ( get_theme_mod( 'reverse_textcolor' ) == 1 ) { 
					echo '#ffffff';
				} else {
					echo '#333333';
				} ?><br />
				<strong><?php _e( 'Reverse Menu Link Color to Black:', 'urban-square' ) ?></strong> 
				<?php if( get_theme_mod( 'reverse_menu_linkcolor' ) == 1 ) {
					echo '#333333';
				} else {
					echo $link_color;
				} ?><br />
				<strong><?php _e( 'Reverse Menu Link Color to White:', 'urban-square' ) ?></strong>
				<?php if( get_theme_mod( 'reverse_menu_linkcolor_white' ) == 1 ) {
					echo '#ffffff';
				} else {
					echo $link_color;
				} ?><br />
				<strong><?php _e( 'Reverse Supporting Color:', 'urban-square' ) ?></strong>
				<?php if( get_theme_mod( 'reverse_supporting_color' ) == 1 ) {
					echo '#333333';
				} else {
					echo '#ffffff';
				} ?><br />
				<strong><?php _e( 'Reverse Everything Else Text Color:', 'urban-square' ) ?></strong> 
				<?php if ( get_theme_mod( 'reverse_everything_textcolor' ) == 1 ) { 
					echo '#333333';
				}
				?>
				</p>
				<p><?php _e( '*You must Reload or Refresh your browser after changing the hex values.', 'urban-square' ) ?></p>
			</div>
		<?php 
		} // closes render content
	} //closes class
	
	$wp_customize->add_setting( 
		'currentcolors_text',
		array(
			'sanitize_callback' => 'u_s_no_sanitize'
		)
	);
	
	$wp_customize->add_control(
		new urban_square_currentcolors(
			$wp_customize,
			'currentcolors_text',
			array (
				'label' => __( 'Current Color Scheme', 'urban-square' ),
				'section' => 'colors',
				'settings' => 'currentcolors_text',
				'priority' => 90,
			)
		)
	);
?>