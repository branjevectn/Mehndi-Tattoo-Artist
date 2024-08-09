<?php
/**
 * Template part for displaying slider section
 *
 * @package Mehndi Tattoo Artist
 * @subpackage mehndi_tattoo_artist
 */

?>
<?php $mehndi_tattoo_artist_static_image = get_stylesheet_directory_uri() . '/assets/images/header_img.png'; ?>
<?php if (get_theme_mod('mehndi_tattoo_artist_slider_arrows') != '') : ?>

<section id="slider">
    <div class="slide-inner-shadow-one"></div>
    <div class="slide-inner-shadow-two"></div>
  <div id="owl-carousel" class="owl-carousel">
    <?php
    $mehndi_tattoo_artist_slide_pages = array();
    for ($mehndi_tattoo_artist_count = 1; $mehndi_tattoo_artist_count <= 4; $mehndi_tattoo_artist_count++) {
        $mehndi_tattoo_artist_mod = intval(get_theme_mod('mehndi_tattoo_artist_slider_page' . $mehndi_tattoo_artist_count));
        if ('page-none-selected' != $mehndi_tattoo_artist_mod) {
            $mehndi_tattoo_artist_slide_pages[] = $mehndi_tattoo_artist_mod;
        }
    }
    if (!empty($mehndi_tattoo_artist_slide_pages)) :
        $mehndi_tattoo_artist_args = array(
            'post_type' => 'page',
            'post__in' => $mehndi_tattoo_artist_slide_pages,
            'orderby' => 'post__in'
        );
        $mehndi_tattoo_artist_query = new WP_Query($mehndi_tattoo_artist_args);
        if ($mehndi_tattoo_artist_query->have_posts()) :
            while ($mehndi_tattoo_artist_query->have_posts()) : $mehndi_tattoo_artist_query->the_post(); ?>
                <div class="item">
                    <div class="slider-border">
                        <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" />
                        <?php } else { ?>
                            <img src="<?php echo esc_url($mehndi_tattoo_artist_static_image); ?>" />
                        <?php } ?>
                    </div>
                    <div class="carousel-caption">
                        <div class="inner_carousel">
                            <?php if (get_theme_mod('mehndi_tattoo_artist_slider_short_heading') != '') { ?>
                                <p class="slidetop-text m-0"><?php echo esc_html(get_theme_mod('mehndi_tattoo_artist_slider_short_heading', '')); ?></p>
                            <?php } ?>
                            <h1 class="custom-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <p class="mb-0"><?php echo esc_html(wp_trim_words(get_the_content(), 24)); ?></p>
                            <div class="more-btn mt-4">
                                <?php if ( get_theme_mod('mehndi_tattoo_artist_product_btn_text1','true') != "" || get_theme_mod('mehndi_tattoo_artist_product_btn_link1') != '') { ?>
                                    <a target="_blank" class="text-capitalize me-2 mb-3 slider-btn1" href="<?php echo esc_url(get_theme_mod('mehndi_tattoo_artist_product_btn_link1')!= '') ? esc_url(get_theme_mod('mehndi_tattoo_artist_product_btn_link1')) : esc_url(get_permalink()); ?>">
                                    <?php echo esc_html(get_theme_mod('mehndi_tattoo_artist_product_btn_text1',__('Read More','mehndi-tattoo-artist'))); ?>
                                  </a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        <?php else : ?>
            <div class="no-postfound"></div>
        <?php endif;
    endif; ?>
  </div>
</section>
<?php endif; ?>
