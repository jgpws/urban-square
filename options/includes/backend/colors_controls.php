<?php
/* Colors controls */
// Add description to Colors section
$wp_customize->get_section( 'colors' )->description = __( '*Refreshes the screen', 'urban-square' );
$wp_customize->get_control( 'header_textcolor' )->label = __( 'Header Text Color*', 'urban-square' );

$wp_customize->add_setting (
	'urban_square_colors_switcher',
	array(
		'default' => 'standard',
		'sanitize_callback' => 'u_s_sanitize_colors_switcher',
	)
);

$wp_customize->add_control (
	'urban_square_colors_switcher',
	array(
		'label' => __( 'Color Scheme', 'urban-square' ),
		'section' => 'colors',
		'settings' => 'urban_square_colors_switcher',
		'type' => 'radio',
		'choices' => array(
			'standard' => __( 'Standard Color Scheme', 'urban-square' ),
			'custom' => __( 'Custom Color Scheme', 'urban-square' ),
		)
	)
);

$wp_customize->add_setting (
	'urban_square_header_footer_bgcolor',
	array(
		'default' => '#f5f5f5',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'urban_square_header_footer_bgcolor',
		array (
			'label' => __( 'Header, Footer and Sidebar Background Color', 'urban-square' ),
			'section' => 'colors',
			'priority' => 35,
			'settings' => 'urban_square_header_footer_bgcolor',
		)
	)
);

$wp_customize->add_setting (
	'urban_square_menu_widgets_bgcolor',
	array (
		'default' => '#f5f5f5',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'urban_square_menu_widgets_bgcolor',
		array (
			'label' => __( 'Menu / Widgets Background Color', 'urban-square' ),
			'section' => 'colors',
			'priority' => 37,
			'settings' => 'urban_square_menu_widgets_bgcolor',
		)
	)
);

$wp_customize->add_setting (
	'urban_square_header_secondary_color',
	array(
		'default' => '#f08080',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'urban_square_header_secondary_color',
		array (
			'label' => __( 'Header Text Hover / Active Color*', 'urban-square' ),
			'section' => 'colors',
			'priority' => 30,
			'settings' => 'urban_square_header_secondary_color',
		)
	)
);

$wp_customize->add_setting (
	'urban_square_link_color',
	array(
		'default' => '#800000',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'urban_square_link_color',
		array (
			'label' => __( 'Link Color', 'urban-square' ),
			'section' => 'colors',
			'priority' => 40,
			'settings' => 'urban_square_link_color',
		)
	)
);

$wp_customize->add_setting (
	'urban_square_link_secondary_color',
	array(
		'default' => '#f08080',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'urban_square_link_secondary_color',
		array (
			'label' => __( 'Link Hover / Active Color*', 'urban-square' ),
			'section' => 'colors',
			'priority' => 50,
			'settings' => 'urban_square_link_secondary_color'
		)
	)
);

$wp_customize->add_setting (
	'urban_square_supporting_color',
	array(
		'default' => '#800000',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'urban_square_supporting_color',
		array (
			'label' => __( 'Supporting Color', 'urban-square' ),
			'section' => 'colors',
			'priority' => 60,
			'settings' => 'urban_square_supporting_color'
		)
	)
);

$wp_customize->add_setting (
	'urban_square_supporting_secondary_color',
	array(
		'default' => '#f08080',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'urban_square_supporting_secondary_color',
		array (
			'label' => __( 'Supporting Hover / Active Color*', 'urban-square' ),
			'section' => 'colors',
			'priority' => 70,
			'settings' => 'urban_square_supporting_secondary_color'
		)
	)
);

$wp_customize->add_setting (
	'urban_square_supporting_border_color',
	array(
		'default' => '#c0c0c0',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'urban_square_supporting_border_color',
		array (
			'label' => __( 'Supporting Border Color', 'urban-square' ),
			'section' => 'colors',
			'priority' => 75,
			'settings' => 'urban_square_supporting_border_color'
		)
	)
);

$wp_customize->add_setting (
	'urban_square_everything_else_bgcolor',
	array(
		'default' => '#f5f5f5',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'urban_square_everything_else_bgcolor',
		array (
			'label' => __( 'Everything Else ( Blockquotes, Pre, etc. ) Background Color', 'urban-square' ),
			'section' => 'colors',
			'priority' => 80,
			'settings' => 'urban_square_everything_else_bgcolor'
		)
	)
);
