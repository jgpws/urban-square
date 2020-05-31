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
		'label' => esc_html__( 'Image displayed as:', 'urban-square' ),
		'description' => sprintf( /* translators: %1$s: opening paragraph tag, %2$s: closing paragraph tag */ esc_html__( '%1$s* Page refreshes upon changing image background image display mode.%2$s%1$s* If a Logo is not selected, Header Text will always show on the front end under the Repeating display state.%2$s', 'urban-square' ), '<p>', '</p>' ),
		'section' => 'header_image',
		'priority' => 20,
		'choices' => array(
			'responsive' => esc_html__( 'Responsive (rectangular horizontal image)', 'urban-square' ),
			'repeating' => esc_html__( 'Repeating (repeating textures- fixed size)', 'urban-square' ),
		),
	)
);

/* Footer controls */
$wp_customize->add_section(
	'urban_square_footerinfo',
	array(
		'title' => esc_html__( 'Footer', 'urban-square' ),
		'description' => esc_html__( 'In this section, you can edit the footer.', 'urban-square' ),
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
		'label' => esc_html__( 'Change the footer information', 'urban-square' ),
		'description' => sprintf( /* translators: %1$s: opening paragraph tag, %2$s: closing paragraph tag, %3$s: copyright HTML example, %4$s: opening strong tag, %5$s: closing strong tag */ esc_html__( '%1$s* Does not support HTML. For a copyright symbol, add %3$s.%2$s%1$sTo add HTML content above this text, you can add a text widget to the %4$sFooter Full Width Widget Area%5$s%2$s', 'urban-square' ), '<p>', '</p>', '<strong>&amp;copy;</strong>.', '<strong>', '</strong>' ),
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
		'label' => esc_html__( 'Show theme author credits', 'urban-square' ),
		'section' => 'urban_square_footerinfo',
		'priority' => 20,
	)
);
