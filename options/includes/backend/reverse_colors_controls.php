<?php
$wp_customize->add_setting (
	'reverse_textcolor',
	array(
		'default' => 0,
		'transport' => 'postMessage',
		'sanitize_callback' => 'u_s_checkbox_sanitize'
	)
);
	
$wp_customize->add_control (
	'reverse_textcolor',
	array(
		'type' => 'checkbox',
		'label' => __( 'Reverse Body Text Color to White', 'urban-square' ),
		'section' => 'colors',
		'priority' => 85,
	)
);
	
$wp_customize->add_setting (
	'reverse_menu_linkcolor',
		array(
			'default' => 0,
			'transport' => 'postMessage',
			'sanitize_callback' => 'u_s_checkbox_sanitize'
		)
);
	
$wp_customize->add_control (
	'reverse_menu_linkcolor',
	array(
		'type' => 'checkbox',
		'label' => __( 'Reverse Menu/Widget Link Color to Black', 'urban-square' ),
		'section' => 'colors',
		'priority' => 86,
	)
);
	
$wp_customize->add_setting (
	'reverse_menu_linkcolor_white',
	array(
		'default' => 0,
		'transport' => 'postMessage',
		'sanitize_callback' => 'u_s_checkbox_sanitize'
	)
);
	
$wp_customize->add_control (
	'reverse_menu_linkcolor_white',
	array(
		'type' => 'checkbox',
		'label' => __( 'Reverse Menu/Widget Link Color to White', 'urban-square' ),
		'section' => 'colors',
		'priority' => 87,
	)
);
	
$wp_customize->add_setting (
	'reverse_supporting_color',
	array(
		'default' => 0,
		'transport' => 'postMessage',
		'sanitize_callback' => 'u_s_checkbox_sanitize'
	)
);
	
$wp_customize->add_control (
	'reverse_supporting_color',
	array(
		'type' => 'checkbox',
		'label' => __( 'Reverse Supporting Color to Black', 'urban-square' ),
		'section' => 'colors',
		'priority' => 88,
	)
);
	
$wp_customize->add_setting (
	'reverse_everything_textcolor',
	array(
		'default' => 0,
		'transport' => 'postMessage',
		'sanitize_callback' => 'u_s_checkbox_sanitize'
	)
);
	
$wp_customize->add_control (
	'reverse_everything_textcolor',
	array(
		'type' => 'checkbox',
		'label' => __( 'Reverse Everything Else Text Color to Black', 'urban-square' ),
		'section' => 'colors',
		'priority' => 89,
	)
);
?>