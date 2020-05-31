<?php
/* font controls */
$wp_customize->add_section(
	'urban_square_fonts',
	array(
		'title' => __( 'Fonts', 'urban-square' ),
		'description' => sprintf( /* translators: %1$s: opening paragraph tag, %2$s: closing paragraph tag */ esc_html__( ' %1$sIn this section, you can change the font theme.%2$s%1$s* Note: Page refreshes upon font change.%2$s%1$s** Embedded font%2$s', 'urban-square' ), '<p>', '</p>' ),
		'priority' => 35,
	)
);

$wp_customize->add_setting(
	'font_choices',
	array(
		'default' => 'none',
		'transport' => 'refresh',
		'sanitize_callback' => 'u_s_sanitize_font_choices'
	)
);

$wp_customize->add_control(
	'font_choices',
	array(
		'type' => 'radio',
		'label' => esc_html__( 'Font Theme', 'urban-square' ),
		'section' => 'urban_square_fonts',
		'choices' => array(
			'none' => esc_html__( 'Default Font Style (Tahoma, Trebuchet MS, Geneva, sans-serif)', 'urban-square' ),
			'arial' => esc_html__( 'Arial, Helvetica, sans-serif', 'urban-square' ),
			'georgia' => esc_html__( 'Georgia, Times, Times New Roman, serif', 'urban-square' ),
			'serif1' => esc_html__( 'Old Standard (serif)**', 'urban-square' ),
			'serif2' => esc_html__( 'Playfair Display (serif)**', 'urban-square' ),
			'sans_serif1' => esc_html__( 'Norwester- headings and Afta- body (sans-serif)**', 'urban-square' ),
		),
	)
);
