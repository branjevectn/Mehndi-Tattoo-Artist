<?php
/*
* Display header
*/
?>

<div class="headerbox">
    <div class="header-main">
        <div class="row m-0">
            <div class="col-lg-3 col-md-3 logo-col">
                <div class="logo text-center">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php endif; ?>

                    <?php if (get_theme_mod('mehndi_tattoo_artist_site_title', true)) : ?>
                        <?php if (is_front_page() && is_home()) : ?>
                            <p class="text-capitalize">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                            </p>
                        <?php else : ?>
                            <h1 class="text-capitalize">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                            </h1>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php
                    $description = get_bloginfo('description', 'display');
                    if ($description || is_customize_preview()) :
                        if (get_theme_mod('mehndi_tattoo_artist_site_tagline', false)) :
                            ?>
                            <p class="site-description my-1 text-capitalize"><?php echo esc_html($description); ?></p>
                        <?php endif; 
                    endif;
                    ?>
                </div>
            </div>

            <div class="col-lg-9 col-md-9 p-0">
                <div class="top-main">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 align-self-center">
                            <div class="contact">
                                <?php if (get_theme_mod('mehndi_tattoo_artist_location')) : ?>
                                    <p class="mb-md-0 mb-2 ps-md-3 contact-content">
                                        <?php echo esc_html(get_theme_mod('mehndi_tattoo_artist_location')); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center">
                            <div class="contact">
                                <?php if (get_theme_mod('mehndi_tattoo_artist_mail')) : ?>
                                    <p class="mb-md-0 mb-2 contact-content">
                                        <span class="email-us me-2"><?php echo esc_html__('E-mail Us:', 'mehndi-tattoo-artist'); ?></span><a href="mailto:<?php echo esc_html(get_theme_mod('mehndi_tattoo_artist_mail')); ?>">
                                            <?php echo esc_html(get_theme_mod('mehndi_tattoo_artist_mail')); ?>
                                        </a>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 align-self-center">
                            <div class="contact message">
                                <?php if (get_theme_mod('mehndi_tattoo_artist_message_text')) : ?>
                                    <p class="mb-md-0 mb-2 ps-md-3 ps-lg-0 contact-content">
                                        <i class="fas fa-comment me-2"></i><?php echo esc_html(get_theme_mod('mehndi_tattoo_artist_message_text')); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 align-self-center">
                            <div class="social-media text-lg-end text-md-start text-center my-2">
                                <?php
                                $mehndi_tattoo_artist_fb_url = get_theme_mod('mehndi_tattoo_artist_facebook_url');
                                $mehndi_tattoo_artist_twt_url = get_theme_mod('mehndi_tattoo_artist_twitter_url');
                                $mehndi_tattoo_artist_ins_url = get_theme_mod('mehndi_tattoo_artist_instagram_url');
                                $mehndi_tattoo_artist_linkedin_url = get_theme_mod('mehndi_tattoo_artist_linkedin_url');

                                $mehndi_tattoo_artist_fb_new_tab = esc_attr(get_theme_mod('mehndi_tattoo_artist_header_fb_new_tab', 'true'));
                                $mehndi_tattoo_artist_twt_new_tab = esc_attr(get_theme_mod('mehndi_tattoo_artist_header_twt_new_tab', 'true'));
                                $mehndi_tattoo_artist_ins_new_tab = esc_attr(get_theme_mod('mehndi_tattoo_artist_header_ins_new_tab', 'true'));
                                $mehndi_tattoo_artist_linkedin_new_tab = esc_attr(get_theme_mod('mehndi_tattoo_artist_header_linkedin_new_tab', 'true'));

                                if ($mehndi_tattoo_artist_fb_url || $mehndi_tattoo_artist_twt_url || $mehndi_tattoo_artist_ins_url || $mehndi_tattoo_artist_linkedin_url) : ?>
                                    <span class="social-follow me-2"><?php echo esc_html__('Follow Us :', 'mehndi-tattoo-artist'); ?></span>
                                    
                                    <?php if ($mehndi_tattoo_artist_fb_url) : ?>
                                        <a <?php if ($mehndi_tattoo_artist_fb_new_tab != false) : ?>target="_blank" <?php endif; ?>href="<?php echo esc_url($mehndi_tattoo_artist_fb_url); ?>"><i class="me-lg-3 me-md-2 <?php echo esc_attr(get_theme_mod('mehndi_tattoo_artist_facebook_icon', 'fab fa-facebook-f')); ?>"></i></a>
                                    <?php endif; ?>
                                    
                                    <?php if ($mehndi_tattoo_artist_twt_url) : ?>
                                        <a <?php if ($mehndi_tattoo_artist_twt_new_tab != false) : ?>target="_blank" <?php endif; ?>href="<?php echo esc_url($mehndi_tattoo_artist_twt_url); ?>"><i class="me-lg-3 me-md-2 <?php echo esc_attr(get_theme_mod('mehndi_tattoo_artist_twitter_icon', 'fab fa-twitter')); ?>"></i></a>
                                    <?php endif; ?>
                                    
                                    <?php if ($mehndi_tattoo_artist_linkedin_url) : ?>
                                        <a <?php if ($mehndi_tattoo_artist_linkedin_new_tab != false) : ?>target="_blank" <?php endif; ?>href="<?php echo esc_url($mehndi_tattoo_artist_linkedin_url); ?>"><i class="me-lg-3 me-md-2 <?php echo esc_attr(get_theme_mod('mehndi_tattoo_artist_linkedin_icon', 'fab fa-linkedin-in')); ?>"></i></a>
                                    <?php endif; ?>
                                    
                                    <?php if ($mehndi_tattoo_artist_ins_url) : ?>
                                        <a <?php if ($mehndi_tattoo_artist_ins_new_tab != false) : ?>target="_blank" <?php endif; ?>href="<?php echo esc_url($mehndi_tattoo_artist_ins_url); ?>"><i class="<?php echo esc_attr(get_theme_mod('mehndi_tattoo_artist_instagram_icon', 'fab fa-instagram')); ?>"></i></a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row menu-box-col">
                    <div class="col-lg-7 col-md-2 col-5 align-self-center">
                        <div class="main-navhead">
                            <div class="menubox text-start">
                                <div class="container-fluid">
                                    <div class="menu-content">
                                        <?php get_template_part('template-parts/navigation/site-nav'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-7 align-self-center">
                        <div class="contact call py-3">
                            <?php if (get_theme_mod('mehndi_tattoo_artist_call_text') || get_theme_mod('mehndi_tattoo_artist_call')) : ?>
                                <div class="align-self-center text-lg-start contact-col call">
                                    <p class="infotext text-capitalize"><?php echo esc_html(get_theme_mod('mehndi_tattoo_artist_call_text')); ?></p>
                                    <p class="mb-0 contact-content call">
                                        <i class="fas fa-phone-volume"></i><a href="tel:<?php echo esc_html(get_theme_mod('mehndi_tattoo_artist_call')); ?>">
                                            <?php echo esc_html(get_theme_mod('mehndi_tattoo_artist_call')); ?>
                                        </a>
                                    </p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-7 align-self-center">
                        <?php if (get_theme_mod('mehndi_tattoo_artist_header_link') || get_theme_mod('mehndi_tattoo_artist_header_button')) : ?>
                            <div class="header-btn text-center">
                                <a href="<?php echo esc_url(get_theme_mod('mehndi_tattoo_artist_header_link')); ?>" class="book-appoin"><?php echo esc_html(get_theme_mod('mehndi_tattoo_artist_header_button')); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-1 col-md-2 col-5 align-self-center d-flex justify-content-center align-items-center">
                        <span class="search-bar">
                            <button type="button" class="open-search"><i class="fas fa-search"></i></button>
                        </span>
                    </div>
                    <div class="search-outer">
                        <div class="inner_searchbox w-100 h-100">
                            <?php get_search_form(); ?>
                        </div>
                        <button type="button" class="search-close"><?php esc_html_e('CLOSE', 'mehndi-tattoo-artist'); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>