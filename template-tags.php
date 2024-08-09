<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Mehndi Tattoo Artist
 * @subpackage mehndi_tattoo_artist
 */

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function mehndi_tattoo_artist_categorized_blog() {
	$mehndi_tattoo_artist_category_count = get_transient( 'mehndi_tattoo_artist_categories' );

	if ( false === $mehndi_tattoo_artist_category_count ) {
		// Create an array of all the categories that are attached to posts.
		$categories = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$mehndi_tattoo_artist_category_count = mehndi_tattoo_artist_count( $categories );

		set_transient( 'mehndi_tattoo_artist_categories', $mehndi_tattoo_artist_category_count );
	}

	// Allow viewing case of 0 or 1 categories in post preview.
	if ( is_preview() ) {
		return true;
	}

	return $mehndi_tattoo_artist_category_count > 1;
}

if ( ! function_exists( 'the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since mehndi_tattoo_artist
 */
function the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

/**
 * Flush out the transients used in mehndi_tattoo_artist_categorized_blog.
 */
function mehndi_tattoo_artist_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'mehndi_tattoo_artist_categories' );
}
add_action( 'edit_category', 'mehndi_tattoo_artist_category_transient_flusher' );
add_action( 'save_post',     'mehndi_tattoo_artist_category_transient_flusher' );