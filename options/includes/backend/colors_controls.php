<?php
/* Colors controls */
// Add description to Colors section
$wp_customize->get_section( 'colors' )->description = __( '*Refreshes the screen', 'urban-square' );
$wp_customize->get_control( 'header_textcolor' )->label = __( 'Header Text Color*', 'urban-square' );
	
$wp_customize->add_setting (
	'header_footer_bgcolor',
	array(
		'default' => '#f5f5f5',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
	
$wp_customize->add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'header_footer_bgcolor',
		array (
			'label' => __( 'Header, Footer and Sidebar Background Color', 'urban-square' ),
			'section' => 'colors',
			'priority' => 35,
			'settings' => 'header_footer_bgcolor',
		)
	)
);
	
$wp_customize->add_setting (
	'menu_widgets_bgcolor',
	array (
		'default' => '#f5f5f5',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
	
$wp_customize->add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'menu_widgets_bgcolor',
		array (
			'label' => __( 'Menu / Widgets Background Color', 'urban-square' ),
			'section' => 'colors',
			'priority' => 37,
			'settings' => 'menu_widgets_bgcolor',
		)
	)
);
	
$wp_customize->add_setting (  
	'header_secondary_color',
	array(
		'default' => '#f08080',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
	
$wp_customize->add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'header_secondary_color',
		array (
			'label' => __( 'Header Text Hover / Active Color*', 'urban-square' ),
			'section' => 'colors',
			'priority' => 30,
			'settings' => 'header_secondary_color'
		)
	)
);
	
$wp_customize->add_setting (  
	'link_color',
	array(
		'default' => '#800000',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
	
$wp_customize->add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'link_color',
		array (
			'label' => __( 'Link Color', 'urban-square' ),
			'section' => 'colors',
			'priority' => 40,
			'settings' => 'link_color'
		)
	)
);
	
$wp_customize->add_setting (  
	'link_secondary_color',
	array(
		'default' => '#f08080',
		'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
	
$wp_customize->add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'link_secondary_color',
		array (
			'label' => __( 'Link Hover / Active Color*', 'urban-square' ),
			'section' => 'colors',
			'priority' => 50,
			'settings' => 'link_secondary_color'
		)
	)
);
	
$wp_customize->add_setting (  
	'supporting_color',
	array(
		'default' => '#800000',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
	
$wp_customize->add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'supporting_color',
		array (
			'label' => __( 'Supporting Color', 'urban-square' ),
			'section' => 'colors',
			'priority' => 60,
			'settings' => 'supporting_color'
		)
	)
);
	
$wp_customize->add_setting (  
	'supporting_secondary_color',
	array(
		'default' => '#f08080',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
	
$wp_customize->add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'supporting_secondary_color',
		array (
			'label' => __( 'Supporting Hover / Active Color*', 'urban-square' ),
			'section' => 'colors',
			'priority' => 70,
			'settings' => 'supporting_secondary_color'
		)
	)
);
	
$wp_customize->add_setting (
	'supporting_border_color',
	array(
		'default' => '#c0c0c0',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
	
$wp_customize->add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'supporting_border_color',
		array (
			'label' => __( 'Supporting Border Color', 'urban-square' ),
			'section' => 'colors',
			'priority' => 75,
			'settings' => 'supporting_border_color'
		)
	)
);
	
$wp_customize->add_setting (  
	'everything_else_bgcolor',
	array(
		'default' => '#f5f5f5',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);
	
$wp_customize->add_control (
	new WP_Customize_Color_Control (
		$wp_customize,
		'everything_else_bgcolor',
		array (
			'label' => __( 'Everything Else ( Blockquotes, Pre, etc. ) Background Color', 'urban-square' ),
			'section' => 'colors',
			'priority' => 80,
			'settings' => 'everything_else_bgcolor'
		)
	)
);
?>