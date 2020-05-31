<?php
$wp_customize->add_setting (
	'urban_square_reverse_textcolor',
	array(
		'default' => 0,
		'transport' => 'postMessage',
		'sanitize_callback' => 'u_s_checkbox_sanitize'
	)
);

$wp_customize->add_control (
	'urban_square_reverse_textcolor',
	array(
		'type' => 'checkbox',
		'label' => esc_html__( 'Reverse Body Text Color to White', 'urban-square' ),
		'section' => 'colors',
		'priority' => 85,
	)
);

$wp_customize->add_setting (
	'urban_square_reverse_menu_linkcolor',
		array(
			'default' => 0,
			'transport' => 'postMessage',
			'sanitize_callback' => 'u_s_checkbox_sanitize'
		)
);

$wp_customize->add_control (
	'urban_square_reverse_menu_linkcolor',
	array(
		'type' => 'checkbox',
		'label' => esc_html__( 'Reverse Menu/Widget Link Color to Black', 'urban-square' ),
		'section' => 'colors',
		'priority' => 86,
	)
);

$wp_customize->add_setting (
	'urban_square_reverse_menu_linkcolor_white',
	array(
		'default' => 0,
		'transport' => 'postMessage',
		'sanitize_callback' => 'u_s_checkbox_sanitize'
	)
);

$wp_customize->add_control (
	'urban_square_reverse_menu_linkcolor_white',
	array(
		'type' => 'checkbox',
		'label' => esc_html__( 'Reverse Menu/Widget Link Color to White', 'urban-square' ),
		'section' => 'colors',
		'priority' => 87,
	)
);

$wp_customize->add_setting (
	'urban_square_reverse_supporting_color',
	array(
		'default' => 0,
		'transport' => 'postMessage',
		'sanitize_callback' => 'u_s_checkbox_sanitize'
	)
);

$wp_customize->add_control (
	'urban_square_reverse_supporting_color',
	array(
		'type' => 'checkbox',
		'label' => esc_html__( 'Reverse Supporting Color to Black', 'urban-square' ),
		'section' => 'colors',
		'priority' => 88,
	)
);

$wp_customize->add_setting (
	'urban_square_reverse_everything_textcolor',
	array(
		'default' => 0,
		'transport' => 'postMessage',
		'sanitize_callback' => 'u_s_checkbox_sanitize'
	)
);

$wp_customize->add_control (
	'urban_square_reverse_everything_textcolor',
	array(
		'type' => 'checkbox',
		'label' => esc_html__( 'Reverse Everything Else Text Color to Black', 'urban-square' ),
		'section' => 'colors',
		'priority' => 89,
	)
);
