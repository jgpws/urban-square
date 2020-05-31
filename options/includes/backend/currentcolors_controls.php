<?php
/* Add custom text for the current color scheme */
class urban_square_currentcolors extends WP_Customize_Control { // opens class
	public $type = 'currentcolors_text';

	public function render_content() { // opens render content
	$header_footer_bgcolor = get_theme_mod( 'urban_square_header_footer_bgcolor', '#f5f5f5' );
	$header_secondary_color = get_theme_mod( 'urban_square_header_secondary_color', '#f08080' );
	$menu_widgets_bgcolor = get_theme_mod( 'urban_square_menu_widgets_bgcolor', '#f5f5f5' );
	$border_colors = get_theme_mod( 'urban_square_supporting_border_color', '#c0c0c0' );
	$link_color = get_theme_mod( 'urban_square_link_color', '#800000' );
	$link_secondary_color = get_theme_mod( 'urban_square_link_secondary_color', '#f08080' );
	$supporting_color = get_theme_mod( 'urban_square_supporting_color', '#800000' );
	$supporting_secondary_color = get_theme_mod( 'urban_square_supporting_secondary_color', '#f08080' );
	$everything_else_bgcolor = get_theme_mod( 'urban_square_everything_else_bgcolor', '#f5f5f5' );
	?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		</label>
		<div>
			<p>
				<strong><?php esc_html_e( 'Header Text Color:', 'urban-square' ) ?></strong> #<?php echo esc_html( get_header_textcolor() ); ?><br />
				<strong><?php esc_html_e( 'Background Color:', 'urban-square' ) ?></strong> #<?php background_color(); ?><br />
				<strong><?php esc_html_e( 'Header Text Hover / Active Color:', 'urban-square' ) ?></strong> <?php echo esc_html( $header_secondary_color ); ?><br />
				<strong><?php esc_html_e( 'Header, Footer and Sidebar Background Color:', 'urban-square' ) ?></strong> <?php echo esc_html( $header_footer_bgcolor ); ?><br />
				<strong><?php esc_html_e( 'Menu / Widgets Background Color:', 'urban-square' ) ?></strong> <?php echo esc_html( $menu_widgets_bgcolor ); ?><br />
				<strong><?php esc_html_e( 'Border Colors:', 'urban-square' ) ?></strong> <?php echo esc_html( $border_colors ); ?><br />
				<strong><?php esc_html_e( 'Link Color:', 'urban-square' ) ?></strong> <?php echo esc_html ( $link_color ); ?><br />
				<strong><?php esc_html_e( 'Link Hover / Active Color:', 'urban-square' ) ?></strong> <?php echo esc_html( $link_secondary_color ); ?><br />
				<strong><?php esc_html_e( 'Supporting Color:', 'urban-square' ) ?></strong> <?php echo esc_html( $supporting_color ); ?><br />
				<strong><?php esc_html_e( 'Supporting Hover / Active Color:', 'urban-square' ) ?></strong> <?php echo esc_html( $supporting_secondary_color ); ?><br />
				<strong><?php esc_html_e( 'Everything Else Background Color:', 'urban-square' ) ?></strong> <?php echo esc_html( $everything_else_bgcolor ); ?><br />
				<strong><?php esc_html_e( 'Reverse Body Text Color:', 'urban-square' ) ?></strong>
				<?php if ( get_theme_mod( 'reverse_textcolor' ) == 1 ) {
					echo '#ffffff';
				} else {
					echo '#333333';
				} ?><br />
				<strong><?php esc_html_e( 'Reverse Menu Link Color to Black:', 'urban-square' ) ?></strong>
				<?php if( get_theme_mod( 'urban_square_reverse_menu_linkcolor', 0 ) == 1 ) {
					echo '#333333';
				} else {
					echo esc_html( $link_color );
				} ?><br />
				<strong><?php esc_html_e( 'Reverse Menu Link Color to White:', 'urban-square' ) ?></strong>
				<?php if( get_theme_mod( 'urban_square_reverse_menu_linkcolor_white', 0 ) == 1 ) {
					echo '#ffffff';
				} else {
					echo esc_html( $link_color );
				} ?><br />
				<strong><?php esc_html_e( 'Reverse Supporting Color:', 'urban-square' ) ?></strong>
				<?php if( get_theme_mod( 'urban_square_reverse_supporting_color', 0 ) == 1 ) {
					echo '#333333';
				} else {
					echo '#ffffff';
				} ?><br />
				<strong><?php esc_html_e( 'Reverse Everything Else Text Color:', 'urban-square' ) ?></strong>
				<?php if ( get_theme_mod( 'urban_square_reverse_everything_textcolor', 0 ) == 1 ) {
					echo '#333333';
				}
				?>
				</p>
				<p><?php esc_html_e( '*You must Reload or Refresh your browser after changing the hex values.', 'urban-square' ) ?></p>
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
