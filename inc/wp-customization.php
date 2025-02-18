<?php
/**
 * This file adds functions to the WordPress theme.
 *
 * @package {fixrs}-theme
 * @author  FIXRS
 * @license GNU General Public License v3
 * @link    https://fixrs.ca/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Echo Copyright
 */
function the_copyright() {
	echo esc_html( get_the_copyright() );
}

/**
 * Return Copyright
 *
 * @return string
 */
function get_the_copyright() {

	$now = wp_date( 'Y' );

	$years = ( COPYRIGHT_YEAR_FROM == $now ) ? $now : COPYRIGHT_YEAR_FROM . '-' . $now;

	/**
	 * Outputs a formatted copyright notice.
	 *
	 * @param string $years The years to display in the copyright notice.
	 * @param string $COPYRIGHT_OWNER The name of the copyright owner.
	 *
	 * translators:
	 * %1$s: The years to display in the copyright notice.
	 * %2$s: The name of the copyright owner.
	 */
	$output = sprintf( __( '© %1$s %2$s. All rights reserved.', '{fixrs}-theme' ), $years, COPYRIGHT_OWNER );

	return apply_filters( 'get_the_copyright', $output, $years );
}


/**
 * Summary of set_default_oembed_author.
 *
 * @param array $data oembed_author default data.
 * @param mixed $post WP_Post object.
 */
function set_default_oembed_author( $data, $post ) {
	// If normal usage of author is needed for the embed for specific post types, update the condition.
	if ( true ) {
		$data['author_name'] = COPYRIGHT_OWNER;
		$data['author_url']  = WP_HOME;
	}
	return $data;
}
add_filter( 'oembed_response_data', 'set_default_oembed_author', 10, 2 );


// Add custom column to show when and by who was the last page modification done.
add_filter( 'manage_edit-page_columns', 'add_page_columns' );
add_filter( 'manage_edit-page_sortable_columns', 'last_modified_column_register_sortable' );
add_action( 'manage_pages_custom_column', 'custom_columns', 10, 2 );

/**
 * Summary of add_page_columns
 *
 * @param array $columns Columns name and title.
 */
function add_page_columns( $columns ) {
	$columns['modified'] = __( 'Last modified', '{fixrs}-theme' );
	return $columns;
}

/**
 * Summary of last_modified_column_register_sortable
 *
 * @param array $columns Columns name and title.
 */
function last_modified_column_register_sortable( $columns ) {
	$columns['modified'] = 'last_modified';
	return $columns;
}

/**
 * Summary of custom_columns
 *
 * @param string $column Column key.
 * @param int    $post_id Post ID.
 * @return void
 */
function custom_columns( $column, $post_id ) {
	switch ( $column ) {
		case 'modified':
			$modified_user_id = get_last_modified_user_id( $post_id );
			$user_info        = get_userdata( $modified_user_id );
			echo '<div class="modified-date">';
			echo esc_html( the_modified_date( __( 'F j Y at g:i A', '{fixrs}-theme' ) ) );
			if ( $modified_user_id ) {
				echo '<br/>' . esc_html_x( 'by', 'Last modified', '{fixrs}-theme' ) . ' ';
				echo '<a href="/wp-admin/edit.php?post_type=page&author=' . absint( $modified_user_id ) . '">' . esc_html( $user_info->display_name ) . '</a>';
			}
			echo '</div>';
			break;
	}
}

/**
 * Get the user who did the last edit
 *
 * @param int $post_id WP_Post ID.
 */
function get_last_modified_user_id( $post_id ) {
	$lock = get_post_meta( $post_id, '_edit_lock', true );
	if ( ! $lock ) {
		return 0; }
	$lock = explode( ':', $lock );
	return $lock[1] ?? get_post_meta( $post_id, '_edit_last', true );
}
