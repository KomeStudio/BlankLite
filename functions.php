<?php
/**
 * BlankLite functions.
 *
 * @package BlankLite
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! isset( $content_width ) ) {
	$content_width = 736;
}

if ( ! function_exists( 'blanklite_setup' ) ) {
	/**
	 * Registers theme support for core features.
	 */
	function blanklite_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	}
}
add_action( 'after_setup_theme', 'blanklite_setup' );

/**
 * Enqueues the stylesheet and the comment reply script.
 */
function blanklite_assets() {
	wp_enqueue_style( 'blanklite', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blanklite_assets' );
