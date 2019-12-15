<?php
/* High Definition controls */
$wp_customize->add_section(
	'urban_square_hidef',
	array(
		'title' => __( 'High Definition', 'urban-square' ),
		'description' => sprintf( __( '%1$s %2$s %3$s %4$s', 'urban-square' ), '<p>In this section, you can enable High Definition support with the retina.js jQuery plugin.</p>', '<p>You can also upload @2x sized background and header images.</p>', '<p>* Note: a header and/or background must be added to the <strong>Header Image</strong> and/or <strong>Background Image</strong> sections in order for the images in this section to display on the frontend.</p>', '<p>@2x header and background must match images in the <strong>Header Image</strong> and <strong>Background Image</strong> sections.</p>' ),
		'priority' => 85,
	)
);
	
$wp_customize->add_setting(
	'enable_retina',
	array(
		'default' => 0,
		'sanitize_callback' => 'u_s_checkbox_sanitize'
	)
);
	
$wp_customize->add_control(
	'enable_retina',
	array(
		'type' => 'checkbox',
		'label' => __( 'Enable Retina Support for Post/Page images', 'urban-square' ),
		'section' => 'urban_square_hidef',
		'priority' => 10
	)
);
	
$wp_customize->add_setting(
	'header_2xbg_upload',
	array(
		'sanitize_callback' => 'esc_url_raw'
	)
);
	
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'header_2xbg_upload',
		array(
			'label' => __( 'Current @2x Header', 'urban-square' ),
			'section' => 'urban_square_hidef',
			'settings' => 'header_2xbg_upload'
		)
	)
);
	
$wp_customize->add_setting(
	'background_2xbg_upload',
	array(
		'sanitize_callback' => 'esc_url_raw'
	)
);
	
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'background_2xbg_upload',
		array(
			'label' => __( 'Current @2x Background', 'urban-square' ),
			'section' => 'urban_square_hidef',
			'settings' => 'background_2xbg_upload'
		)
	)
);
?>