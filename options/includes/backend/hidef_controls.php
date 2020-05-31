<?php
/* High Definition controls */
$wp_customize->add_section(
	'urban_square_hidef',
	array(
		'title' => esc_html__( 'High Definition', 'urban-square' ),
		'description' => sprintf( /* translators: %1$s: opening paragraph tag, %2$s: closing paragraph tag, %3$s: opening strong tag, %4$s: closing strong tag */ esc_html__( '%1$sIn this section, you can enable High Definition support with the retina.js jQuery plugin.%2$s%1$sYou can also upload @2x sized background and header images.%2$s%1$s* Note: a header and/or background must be added to the %3$sHeader Image%4$s and/or %3$sBackground Image%4$s sections in order for the images in this section to display on the frontend.%2$s', 'urban-square' ), '<p>', '</p>', '<strong>', '</strong>' ),
		'priority' => 85,
	)
);

$wp_customize->add_setting(
	'urban_square_enable_retina',
	array(
		'default' => 0,
		'sanitize_callback' => 'u_s_checkbox_sanitize'
	)
);

$wp_customize->add_control(
	'urban_square_enable_retina',
	array(
		'type' => 'checkbox',
		'label' => esc_html__( 'Enable Retina Support for Post/Page images', 'urban-square' ),
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
			'label' => esc_html__( 'Current @2x Header', 'urban-square' ),
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
			'label' => esc_html__( 'Current @2x Background', 'urban-square' ),
			'section' => 'urban_square_hidef',
			'settings' => 'background_2xbg_upload'
		)
	)
);
