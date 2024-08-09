<?php

$mehndi_tattoo_artist_tp_theme_css = '';

//preloader

$mehndi_tattoo_artist_tp_preloader_color1_option = get_theme_mod('mehndi_tattoo_artist_tp_preloader_color1_option');
$mehndi_tattoo_artist_tp_preloader_color2_option = get_theme_mod('mehndi_tattoo_artist_tp_preloader_color2_option');
$mehndi_tattoo_artist_tp_preloader_bg_color_option = get_theme_mod('mehndi_tattoo_artist_tp_preloader_bg_color_option');

if($mehndi_tattoo_artist_tp_preloader_color1_option != false){
$mehndi_tattoo_artist_tp_theme_css .='.center1{';
	$mehndi_tattoo_artist_tp_theme_css .='border-color: '.esc_attr($mehndi_tattoo_artist_tp_preloader_color1_option).' !important;';
$mehndi_tattoo_artist_tp_theme_css .='}';
}
if($mehndi_tattoo_artist_tp_preloader_color1_option != false){
$mehndi_tattoo_artist_tp_theme_css .='.center1 .ring::before{';
	$mehndi_tattoo_artist_tp_theme_css .='background: '.esc_attr($mehndi_tattoo_artist_tp_preloader_color1_option).' !important;';
$mehndi_tattoo_artist_tp_theme_css .='}';
}
if($mehndi_tattoo_artist_tp_preloader_color2_option != false){
$mehndi_tattoo_artist_tp_theme_css .='.center2{';
	$mehndi_tattoo_artist_tp_theme_css .='border-color: '.esc_attr($mehndi_tattoo_artist_tp_preloader_color2_option).' !important;';
$mehndi_tattoo_artist_tp_theme_css .='}';
}
if($mehndi_tattoo_artist_tp_preloader_color2_option != false){
$mehndi_tattoo_artist_tp_theme_css .='.center2 .ring::before{';
	$mehndi_tattoo_artist_tp_theme_css .='background: '.esc_attr($mehndi_tattoo_artist_tp_preloader_color2_option).' !important;';
$mehndi_tattoo_artist_tp_theme_css .='}';
}
if($mehndi_tattoo_artist_tp_preloader_bg_color_option != false){
$mehndi_tattoo_artist_tp_theme_css .='.loader{';
	$mehndi_tattoo_artist_tp_theme_css .='background: '.esc_attr($mehndi_tattoo_artist_tp_preloader_bg_color_option).';';
$mehndi_tattoo_artist_tp_theme_css .='}';
}

// footer-bg-color
$mehndi_tattoo_artist_tp_footer_bg_color_option = get_theme_mod('mehndi_tattoo_artist_tp_footer_bg_color_option');

if($mehndi_tattoo_artist_tp_footer_bg_color_option != false){
$mehndi_tattoo_artist_tp_theme_css .='#footer{';
	$mehndi_tattoo_artist_tp_theme_css .='background: '.esc_attr($mehndi_tattoo_artist_tp_footer_bg_color_option).' !important;';
$mehndi_tattoo_artist_tp_theme_css .='}';
}