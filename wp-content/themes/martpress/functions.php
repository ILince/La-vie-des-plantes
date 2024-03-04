<?php
function martpress_theme_style() {
	$parent_theme_style = 'storepress-parent-style';
	wp_enqueue_style( $parent_theme_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'martpress-style', get_stylesheet_uri(), array( $parent_theme_style ));
	wp_enqueue_script('martpress-custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), false, true);	
}
add_action( 'wp_enqueue_scripts', 'martpress_theme_style',999);


/**
 * Import Settings From Parent Theme
 *
 */
function martpress_theme_options() {
	$storepress_mods = get_option( 'theme_mods_storepress' );
	if ( ! empty( $storepress_mods ) ) {
		foreach ( $storepress_mods as $storepress_mod_k => $storepress_mod_v ) {
			set_theme_mod( $storepress_mod_k, $storepress_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'martpress_theme_options' );

function martpress_setup()	{	

	add_theme_support( 'custom-header', apply_filters( 'martpress_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '232323',
		'width'                  => 2000,
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'storepress_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'martpress_setup' );

require( get_stylesheet_directory() . '/inc/customizer/customizer-upsale/class-customize.php');