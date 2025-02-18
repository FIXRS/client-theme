<?php
/**
 * This file adds functions to the WordPress theme.
 *
 * @package {fixrs}-theme
 * @author  FIXRS
 * @license GNU General Public License v3
 * @link    https://fixrs.ca/
 */

if ( ! function_exists( '{fixrs}_theme_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.8.0
	 *
	 * @return void
	 */
	function {fixrs}_theme_setup() {

		// Make theme available for translation.
		load_theme_textdomain( '{fixrs}-theme', get_template_directory() . '/languages' );

		// Set the year the site was launched.
		define( 'COPYRIGHT_YEAR_FROM', 2025 );

		// Set the name of the organisation that owns the site.
		define( 'COPYRIGHT_OWNER', _x( 'Organisation name', 'Copyright owner', '{fixrs}-theme' ) );

		// Enqueue editor stylesheet.
		add_editor_style( get_template_directory_uri() . '/style.css' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', '{fixrs}_theme_setup' );

// Enqueue stylesheet.
add_action( 'wp_enqueue_scripts', '{fixrs}_theme_enqueue_stylesheet' );
/**
 * Enqueue theme stylesheet.
 */
function {fixrs}_theme_enqueue_stylesheet() {

	$version = SCRIPT_DEBUG ? time() : wp_get_theme()->get( 'Version' );

	wp_enqueue_style( '{fixrs}-theme', get_template_directory_uri() . '/style.css', array(), $version );
}

/**
 * Register block styles.
 *
 * @since 0.9.2
 */
function {fixrs}_theme_register_block_styles() {

	$block_styles = array(
		'core/columns'      => array(
			'columns-reverse' => __( 'Reverse', '{fixrs}-theme' ),
		),
		'core/group'        => array(
			'shadow-light' => __( 'Shadow', '{fixrs}-theme' ),
			'shadow-solid' => __( 'Solid', '{fixrs}-theme' ),
		),
		'core/list'         => array(
			'no-disc' => __( 'No Disc', '{fixrs}-theme' ),
		),
		'core/quote'        => array(
			'shadow-light' => __( 'Shadow', '{fixrs}-theme' ),
			'shadow-solid' => __( 'Solid', '{fixrs}-theme' ),
		),
		'core/social-links' => array(
			'outline' => __( 'Outline', '{fixrs}-theme' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', '{fixrs}_theme_register_block_styles' );

/**
 * Register block pattern categories.
 *
 * @since 1.0.4
 */
function {fixrs}_theme_register_block_pattern_categories() {

	register_block_pattern_category(
		'theme-page',
		array(
			'label'       => __( 'Page', '{fixrs}-theme' ),
			'description' => __( 'Create a full page with multiple patterns that are grouped together.', '{fixrs}-theme' ),
		)
	);
	register_block_pattern_category(
		'theme-pricing',
		array(
			'label'       => __( 'Pricing', '{fixrs}-theme' ),
			'description' => __( 'Compare features for your digital products or service plans.', '{fixrs}-theme' ),
		)
	);
}

add_action( 'init', '{fixrs}_theme_register_block_pattern_categories' );


/**
 * That's it, stop editing!
 */
require_once trailingslashit( get_template_directory() ) . 'inc/wp-customization.php';
require_once trailingslashit( get_template_directory() ) . 'inc/wc-customization.php';
require_once trailingslashit( get_template_directory() ) . 'inc/code-insertion.php';
