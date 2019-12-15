<?php
/* Custom header controls */
$wp_customize->add_setting(  
	'image_size_type',
	array(
		'default' => 'responsive',
		'transport' => 'refresh',
		'sanitize_callback' => 'u_s_sanitize_image_type',
	)
);
	
$wp_customize->add_control(
	'image_size_type',
	array(
		'type' => 'radio',
		'label' => __( 'Image displayed as:', 'urban-square' ),
		'description' => sprintf( __( '%1$s %2$s', 'urban-square' ), '<p>* Page refreshes upon changing image background image display mode.</p>', '<p>* If a Logo is not selected, Header Text will always show on the front end under the Repeating display state.</p>' ),
		'section' => 'header_image',
		'priority' => 20,
		'choices' => array(
			'responsive' => __( 'Responsive (rectangular horizontal image)', 'urban-square' ),
			'repeating' => __( 'Repeating (repeating textures- fixed size)', 'urban-square' ),
		),
	)
);
	
/* Footer controls */
$wp_customize->add_section( 
	'urban_square_footerinfo',
	array(
		'title' => __( 'Footer', 'urban-square' ),
		'description' => __( 'In this section, you can edit the footer.', 'urban-square' ),
		'priority' => 130,
	)
);
	
$wp_customize->add_setting(
	'urban_square_edit_footer', 
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'u_s_sanitize_footerhtml',
		'sanitize_js_callback' => 'u_s_sanitize_footerhtml'
	)
);
			
$wp_customize->add_control(
	'urban_square_edit_footer', 
	array(
		'type' => 'text',
		'label' => __( 'Change the footer information', 'urban-square' ),
		'description' => sprintf( __( '* Does not support HTML. For a copyright symbol, add %1$s. %2$s', 'urban-square' ), '<strong>&amp;copy;</strong>.', '<p>To add HTML content above this text, you can add a text widget to the <strong>Footer Full Width Widget Area</strong>.</p>' ),
		'section' => 'urban_square_footerinfo',
		'priority' => 10,
	)
);
	
$wp_customize->add_setting(
	'urban_square_footercredits',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'default' => 0,
		'transport' => 'postMessage',
		'sanitize_callback' => 'u_s_checkbox_sanitize',
		'sanitize_js_callback' => 'u_s_checkbox_sanitize',
	)
);
	
$wp_customize->add_control(
	'urban_square_footercredits',
	array(
		'type' => 'checkbox',
		'label' => __( 'Show theme author credits', 'urban-square' ),
		'section' => 'urban_square_footerinfo',
		'priority' => 20,
	)
);
?>