<?php
/**
 * Template for displaying search forms in Mehndi Tattoo Artist
 *
 * @package Mehndi Tattoo Artist
 * @subpackage mehndi_tattoo_artist
 */
?>

<?php $mehndi_tattoo_artist_unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">	
	<input type="search" id="<?php echo esc_attr( $mehndi_tattoo_artist_unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'mehndi-tattoo-artist' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'mehndi-tattoo-artist' ); ?></button>
</form>