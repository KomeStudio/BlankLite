<?php
/**
 * BlankLite functions.
 *
 * @package BlankLite
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'blanklite_setup' ) ) {
	function blanklite_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	}
}
add_action( 'after_setup_theme', 'blanklite_setup' );

function blanklite_assets() {
	wp_enqueue_style( 'blanklite', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'blanklite_assets' );

// Never offer a same-slug wp.org theme as an "update" for this theme.
function blanklite_block_update( $transient ) {
	if ( is_object( $transient ) && isset( $transient->response['blanklite'] ) ) {
		unset( $transient->response['blanklite'] );
	}
	return $transient;
}
add_filter( 'site_transient_update_themes', 'blanklite_block_update' );
