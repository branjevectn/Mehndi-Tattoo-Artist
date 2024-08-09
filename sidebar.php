<?php
/**
 * The sidebar containing the main widget area
 * @package Mehndi Tattoo Artist
 * @subpackage mehndi_tattoo_artist
 */
?>

<aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'mehndi-tattoo-artist' ); ?>">
    <?php if (!dynamic_sidebar('sidebar-1')) : ?>
        <section id="search" class="widget widget_search">
            <h3 class="widget-title"><?php esc_html_e('Search', 'mehndi-tattoo-artist'); ?></h3>
            <?php get_search_form(); ?>
        </section>

        <section id="meta" class="widget widget_meta">
            <h3 class="widget-title"><?php esc_html_e('Meta', 'mehndi-tattoo-artist'); ?></h3>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </section>

        <section id="archives" class="widget widget_archive">
            <h3 class="widget-title"><?php esc_html_e('Archives', 'mehndi-tattoo-artist'); ?></h3>
            <ul>
                <?php wp_get_archives(); ?>
            </ul>
        </section>

        <section id="tag-cloud" class="widget widget_tag_cloud">
            <h3 class="widget-title"><?php esc_html_e('Tag Cloud', 'mehndi-tattoo-artist'); ?></h3>
            <?php wp_tag_cloud(); ?>
        </section>
    <?php endif; ?>
</aside>