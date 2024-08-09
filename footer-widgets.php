<?php
/**
 * Displays footer widgets if assigned
 *
 * @package Mehndi Tattoo Artist
 * @subpackage mehndi_tattoo_artist
 */

?>
<?php

// Determine the number of columns dynamically for the footer (you can replace this with your logic).
$mehndi_tattoo_artist_number_of_footer_columns = get_theme_mod('mehndi_tattoo_artist_footer_columns', 4); // Change this value as needed.

// Calculate the Bootstrap class for large screens (col-lg-X) for footer.
$mehndi_tattoo_artist_col_lg_footer_class = 'col-lg-' . (12 / $mehndi_tattoo_artist_number_of_footer_columns);

// Calculate the Bootstrap class for medium screens (col-md-X) for footer.
$mehndi_tattoo_artist_col_md_footer_class = 'col-md-' . (12 / $mehndi_tattoo_artist_number_of_footer_columns);
?>
<div class="container">
    <aside class="widget-area row" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'mehndi-tattoo-artist' ); ?>">
        <div class="<?php echo esc_attr($mehndi_tattoo_artist_col_lg_footer_class); ?> <?php echo esc_attr($mehndi_tattoo_artist_col_md_footer_class); ?>">
            <?php dynamic_sidebar('footer-1'); ?>
        </div>
        <?php
        // Footer boxes 2 and onwards.
        for ($mehndi_tattoo_artist_i = 2; $mehndi_tattoo_artist_i <= $mehndi_tattoo_artist_number_of_footer_columns; $mehndi_tattoo_artist_i++) :
            if ($mehndi_tattoo_artist_i <= $mehndi_tattoo_artist_number_of_footer_columns) :
                ?>
               <div class="col-12 <?php echo esc_attr($mehndi_tattoo_artist_col_lg_footer_class); ?> <?php echo esc_attr($mehndi_tattoo_artist_col_md_footer_class); ?>">
                    <?php dynamic_sidebar('footer-' . $mehndi_tattoo_artist_i); ?>
                </div><!-- .footer-one-box -->
                <?php
            endif;
        endfor;
        ?>
    </aside>
</div>