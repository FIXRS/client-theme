<?php
/**
 * Insert scripts tags for tracking, with validation
 *
 * @package {fixrs}-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( function_exists( 'get_field' ) ) {
	add_action(
		'wp_head',
		function () {
            // phpcs:ignore
			echo get_field( 'scripts_head', 'options' );
		},
		1000
	);

	add_action(
		'wp_body_open',
		function () {
            // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			echo get_field( 'scripts_body', 'options' );
		},
		2
	);

	add_action(
		'wp_footer',
		function () {
            // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			echo get_field( 'scripts_footer', 'options' );
		},
		2
	);

	add_filter( 'acf/validate_value/name=scripts_head', 'acf_validate_script_fields', 10, 2 );
	add_filter( 'acf/validate_value/name=scripts_body', 'acf_validate_script_fields', 10, 2 );
	add_filter( 'acf/validate_value/name=scripts_footer', 'acf_validate_script_fields', 10, 2 );
	/**
	 * Summary of acf_validate_script_fields
	 *
	 * @param bool  $valid Is the ACF field value valid.
	 * @param mixed $value The ACF field value.
	 */
	function acf_validate_script_fields( $valid, $value ) {

		// Bail early if the value is already invalid.
		if ( true !== $valid ) {
			return $valid;
		}

		// Empty script tags content so that nothing is left once tags are stripped if the code is valid.
		$value = preg_replace( '/<script\b[^>]*>(.*?)<\/script>/is', '', $value );
		$value = preg_replace( '/\s+/', '', $value );

		// Return validation message if value contains something other than valid script.
		if ( wp_strip_all_tags( $value ) !== '' ) {
			return __( 'The value is invalid. It must contain the <script> tags, otherwise the code will be displayed in the page instead of being properly processed.', '{fixrs}-theme' );
		}

		return true;
	}
}
