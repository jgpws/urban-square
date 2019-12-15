<?php
/* Layout controls */
$wp_customize->add_section(
	'urban_square_layout',
	array(
		'title' => __( 'Layout', 'urban-square' ),
		'description' => __( 'In this section, you can choose two additional layout options and hide/show the search box.', 'urban-square' ),
		'priority' => 37,
	)
);

$wp_customize->add_setting(
	'urban_square_layout_choices',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'default' => 'dflt',
		'transport' => 'refresh',
		'sanitize_callback' => 'u_s_sanitize_layout_choices',
		'sanitize_js_callback' => 'u_s_sanitize_layout_choices',
	)
);

$wp_customize->add_control(
	'urban_square_layout_choices',
	array(
		'type' => 'radio',
		'label' => __( 'Layout Options', 'urban-square' ),
		'section' => 'urban_square_layout',
		'priority' => 10,
		'choices' => array(
			'dflt' => __( 'Default', 'urban-square' ),
			'content_sidebar' => __( 'Sidebar Directly Next to Content', 'urban-square' ),
			'masonry' => __( 'Masonry', 'urban-square' ),
			'grid' => __( 'Grid', 'urban-square' ),
		)
	)
);

$wp_customize->add_setting(
	'urban_square_contentlength_choices',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'default' => 'full',
		'transport' => 'refresh',
		'sanitize_callback' => 'u_s_sanitize_content_choices',
		'sanitize_js_callback' => 'u_s_sanitize_content_choices',
	)
);

$wp_customize->add_control(
	'urban_square_contentlength_choices',
	array(
		'type' => 'radio',
		'label' => __( 'Content Length', 'urban-square' ),
		'description' => __( 'Choose between full length content or excerpts on the blog posts page.', 'urban-square' ),
		'section' => 'urban_square_layout',
		'priority' => 20,
		'choices' => array(
			'full' => __( 'Full Content', 'urban-square' ),
			'excerpt' => __( 'Excerpt', 'urban-square' ),
		),
	)
);

$wp_customize->add_setting(
	'urban_square_hide_searchbox',
	array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'u_s_checkbox_sanitize',
		'sanitize_js_callback' => 'u_s_checkbox_sanitize',
	)
);

$wp_customize->add_control(
	'urban_square_hide_searchbox',
	array(
		'type' => 'checkbox',
		'label' => __( 'Hide Search Box', 'urban-square' ),
		'description' => __( 'Hide the Header Search Box.', 'urban-square' ),
		'section' => 'urban_square_layout',
		'priority' => 30,
	)
);
?>
