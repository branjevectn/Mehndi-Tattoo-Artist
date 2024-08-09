<?php
/**
 * Template Name: Custom Home Page
 *
 * @package Mehndi Tattoo Artist
 * @subpackage mehndi_tattoo_artist
 */

get_header(); ?>

<main id="tp_content" role="main">
	<div>
		<?php do_action('mehndi_tattoo_artist_before_slider'); ?>
		<?php get_template_part('template-parts/home/slider'); ?>
		<?php do_action('mehndi_tattoo_artist_after_slider'); ?>
	</div>
	<div>
		<?php get_template_part('template-parts/home/about-us'); ?>
		<?php do_action('mehndi_tattoo_artist_after_about_us'); ?>
		<?php get_template_part('template-parts/home/home-content'); ?>
		<?php do_action('mehndi_tattoo_artist_after_home_content'); ?>
	</div>
</main>

<?php get_footer(); ?>
