<?php
/* font controls */
$wp_customize->add_section(
	'urban_square_fonts',
	array(
		'title' => __( 'Fonts', 'urban-square' ),
		'description' => sprintf( __( ' %1$s %2$s %3$s', 'urban-square' ), '<p>In this section, you can change the font theme.</p>', '<p>* Note: Page refreshes upon font change.</p>', '<p>** Embedded font</p>' ),
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
		'label' => __( 'Font Theme', 'urban-square' ),
		'section' => 'urban_square_fonts',
		'choices' => array(
			'none' => __( 'Default Font Style (Tahoma, Trebuchet MS, Geneva, sans-serif)', 'urban-square' ),
			'arial' => __( 'Arial, Helvetica, sans-serif', 'urban-square' ),
			'georgia' => __( 'Georgia, Times, Times New Roman, serif', 'urban-square' ),
			'serif1' => __( 'Old Standard (serif)**', 'urban-square' ),
			'serif2' => __( 'Playfair Display (serif)**', 'urban-square' ),
			'sans_serif1' => __( 'Norwester- headings and Afta- body (sans-serif)**', 'urban-square' ),
		),
	)
);
?>