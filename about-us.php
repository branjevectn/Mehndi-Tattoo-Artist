<?php 
fgfasgggggsag
/**
 * Template part for displaying service section
 *
 * @package Mehndi Tattoo Artist
 * @subpackage mehndi_tattoo_artist
 */

$mehndi_tattoo_artist_static_image = get_stylesheet_directory_uri() . '/assets/images/header_img.png';

if (get_theme_mod('mehndi_tattoo_artist_service_enable', false) != '') : ?>
<section id="service" class="my-5 px-md-0 px-3">
    <div class="container">
        <?php
        $mehndi_tattoo_artist_about_page_id = absint(get_theme_mod('mehndi_tattoo_artist_about_page'));
        if ($mehndi_tattoo_artist_about_page_id != 0) : 
            $mehndi_tattoo_artist_args = array(
                'post_type' => 'page',
                'p' => $mehndi_tattoo_artist_about_page_id
            );
            $mehndi_tattoo_artist_query = new WP_Query($mehndi_tattoo_artist_args);
            if ($mehndi_tattoo_artist_query->have_posts()) :
                while ($mehndi_tattoo_artist_query->have_posts()) : $mehndi_tattoo_artist_query->the_post(); ?>
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-6 align-self-center">
                            <div class="match-heading">
                                <?php if (get_theme_mod('mehndi_tattoo_artist_service_sub_heading') != '') : ?>
                                    <p class="mb-3 abt-title"><?php echo esc_html(get_theme_mod('mehndi_tattoo_artist_service_sub_heading')); ?></p>
                                <?php endif; ?>
                                <h2 class="mb-5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                            <p class="mb-3 abt-content"><?php echo esc_html(wp_trim_words(get_the_content(), 18)); ?></p>
                            <?php if (get_theme_mod('mehndi_tattoo_artist_tab_heading1') != '' || get_theme_mod('mehndi_tattoo_artist_tab_heading2') != '' || get_theme_mod('mehndi_tattoo_artist_tab_heading3') != '') : ?>
                                <?php for ($mehndi_tattoo_artist_i = 1; $mehndi_tattoo_artist_i <= 3; $mehndi_tattoo_artist_i++) : ?>
                                    <?php if (get_theme_mod('mehndi_tattoo_artist_tab_heading' . $mehndi_tattoo_artist_i) != '') : ?>
                                        <div class="tab-details d-flex align-items-center">
                                            <?php
                                            $mehndi_tattoo_artist_icon_class = get_theme_mod('mehndi_tattoo_artist_tab_icon' . $mehndi_tattoo_artist_i);
                                            if (!$mehndi_tattoo_artist_icon_class) {
                                                $mehndi_tattoo_artist_icon_class = 'fas fa-arrow-right'; // Default icon
                                            }
                                            ?>
                                            <i class="me-3 <?php echo esc_attr($mehndi_tattoo_artist_icon_class); ?>"></i>
                                            <h3><?php echo esc_html(get_theme_mod('mehndi_tattoo_artist_tab_heading' . $mehndi_tattoo_artist_i)); ?></h3>
                                        </div>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-lg-5 col-md-6 align-self-center text-start mt-4">
                                    <?php if( get_theme_mod( 'mehndi_tattoo_artist_abt_link' ) != '' && get_theme_mod( 'mehndi_tattoo_artist_abt_button','Learn More About Us' ) != '') { ?>
                                        <div class="abt-btn text-center">
                                            <a href="<?php echo esc_url( get_theme_mod( 'mehndi_tattoo_artist_abt_link','' ) ); ?>" class="abt-btn"><?php echo esc_html( get_theme_mod( 'mehndi_tattoo_artist_abt_button','Learn More About Us' ) ); ?></a>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-lg-7 col-md-6 align-self-center mt-4 mb-3">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-4 align-self-center designer-photo">
                                            <?php
                                            $mehndi_tattoo_artist_designer_photo = get_theme_mod('mehndi_tattoo_artist_designer_photo');
                                            if (!empty($mehndi_tattoo_artist_designer_photo)) {
                                                echo '<img src="' . esc_url($mehndi_tattoo_artist_designer_photo) . '" alt="Customer Image" />';
                                            } else {
                                            }
                                            ?>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-8 align-self-center">
                                            <div class="Artist-sign text-start">
                                                <?php
                                                $mehndi_tattoo_artist_designer_sign = get_theme_mod('mehndi_tattoo_artist_designer_sign');
                                                if (!empty($mehndi_tattoo_artist_designer_sign)) {
                                                    echo '<img src="' . esc_url($mehndi_tattoo_artist_designer_sign) . '" alt="Customer Image" />';
                                                } else {
                                                }
                                                ?>
                                            </div>
                                            <div class="artist-name text-start">
                                                <?php if ($mehndi_tattoo_artist_design_artist_name = get_theme_mod('mehndi_tattoo_artist_design_artist_name')) : ?>
                                                    <p class="mb-0 mt-3 text-capitalize deisgner-name"><?php echo esc_html($mehndi_tattoo_artist_design_artist_name); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 align-self-center image-abt">
                            <div class="about-block position-relative">
                                <div class="about-image1">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" />
                                    <?php } else { ?>
                                        <img src="<?php echo esc_url($mehndi_tattoo_artist_static_image); ?>" />
                                    <?php } ?>
                                </div>
                                <div class="experience_btn">
                                    <div class="circular-button">
                                        <?php
                                        $mehndi_tattoo_artist_design_artist_experience = get_theme_mod('mehndi_tattoo_artist_design_artist_experience');
                                        if ($mehndi_tattoo_artist_design_artist_experience) : ?>
                                            <p class="mb-0 text-capitalize designer-experi">
                                                <span class="experience-year"><?php echo esc_html($mehndi_tattoo_artist_design_artist_experience); ?></span>
                                                <span class="experience-plus"><?php echo esc_html__('+Y', 'mehndi-tattoo-artist'); ?></span>
                                                <span class="experience-text"><?php echo esc_html__('Experience', 'mehndi-tattoo-artist'); ?></span></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            endif;
        endif; ?>
    </div>
</section>
<?php endif; ?>
