<?php

	$mehndi_tattoo_artist_tp_theme_css = "";

$mehndi_tattoo_artist_theme_lay = get_theme_mod( 'mehndi_tattoo_artist_tp_body_layout_settings','Full');
if($mehndi_tattoo_artist_theme_lay == 'Container'){
$mehndi_tattoo_artist_tp_theme_css .='body{';
	$mehndi_tattoo_artist_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
$mehndi_tattoo_artist_tp_theme_css .='}';
$mehndi_tattoo_artist_tp_theme_css .='@media screen and (max-width:575px){';
		$mehndi_tattoo_artist_tp_theme_css .='body{';
			$mehndi_tattoo_artist_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left: 0px';
		$mehndi_tattoo_artist_tp_theme_css .='} }';
$mehndi_tattoo_artist_tp_theme_css .='.page-template-front-page .menubar{';
	$mehndi_tattoo_artist_tp_theme_css .='position: static;';
$mehndi_tattoo_artist_tp_theme_css .='}';
$mehndi_tattoo_artist_tp_theme_css .='.scrolled{';
	$mehndi_tattoo_artist_tp_theme_css .='width: auto; left:0; right:0;';
$mehndi_tattoo_artist_tp_theme_css .='}';
}else if($mehndi_tattoo_artist_theme_lay == 'Container Fluid'){
$mehndi_tattoo_artist_tp_theme_css .='body{';
	$mehndi_tattoo_artist_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
$mehndi_tattoo_artist_tp_theme_css .='}';
$mehndi_tattoo_artist_tp_theme_css .='@media screen and (max-width:575px){';
		$mehndi_tattoo_artist_tp_theme_css .='body{';
			$mehndi_tattoo_artist_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
		$mehndi_tattoo_artist_tp_theme_css .='} }';
$mehndi_tattoo_artist_tp_theme_css .='.page-template-front-page .menubar{';
	$mehndi_tattoo_artist_tp_theme_css .='width: 99%';
$mehndi_tattoo_artist_tp_theme_css .='}';		
$mehndi_tattoo_artist_tp_theme_css .='.scrolled{';
	$mehndi_tattoo_artist_tp_theme_css .='width: auto; left:0; right:0;';
$mehndi_tattoo_artist_tp_theme_css .='}';
}else if($mehndi_tattoo_artist_theme_lay == 'Full'){
$mehndi_tattoo_artist_tp_theme_css .='body{';
	$mehndi_tattoo_artist_tp_theme_css .='max-width: 100%;';
$mehndi_tattoo_artist_tp_theme_css .='}';
}

$mehndi_tattoo_artist_scroll_position = get_theme_mod( 'mehndi_tattoo_artist_scroll_top_position','Right');
if($mehndi_tattoo_artist_scroll_position == 'Right'){
$mehndi_tattoo_artist_tp_theme_css .='#return-to-top{';
    $mehndi_tattoo_artist_tp_theme_css .='right: 20px;';
$mehndi_tattoo_artist_tp_theme_css .='}';
}else if($mehndi_tattoo_artist_scroll_position == 'Left'){
$mehndi_tattoo_artist_tp_theme_css .='#return-to-top{';
    $mehndi_tattoo_artist_tp_theme_css .='left: 20px;';
$mehndi_tattoo_artist_tp_theme_css .='}';
}else if($mehndi_tattoo_artist_scroll_position == 'Center'){
$mehndi_tattoo_artist_tp_theme_css .='#return-to-top{';
    $mehndi_tattoo_artist_tp_theme_css .='right: 50%;left: 50%;';
$mehndi_tattoo_artist_tp_theme_css .='}';
}

    
//Social icon Font size
$mehndi_tattoo_artist_social_icon_fontsize = get_theme_mod('mehndi_tattoo_artist_social_icon_fontsize');
	$mehndi_tattoo_artist_tp_theme_css .='.media-links a i{';
$mehndi_tattoo_artist_tp_theme_css .='font-size: '.esc_attr($mehndi_tattoo_artist_social_icon_fontsize).'px;';
$mehndi_tattoo_artist_tp_theme_css .='}';

// site title font size option
$mehndi_tattoo_artist_site_title_font_size = get_theme_mod('mehndi_tattoo_artist_site_title_font_size', 25);{
$mehndi_tattoo_artist_tp_theme_css .='.logo h1 , .logo p a{';
	$mehndi_tattoo_artist_tp_theme_css .='font-size: '.esc_attr($mehndi_tattoo_artist_site_title_font_size).'px;';
$mehndi_tattoo_artist_tp_theme_css .='}';
}

//site tagline font size option
$mehndi_tattoo_artist_site_tagline_font_size = get_theme_mod('mehndi_tattoo_artist_site_tagline_font_size', 15);{
$mehndi_tattoo_artist_tp_theme_css .='.logo p{';
	$mehndi_tattoo_artist_tp_theme_css .='font-size: '.esc_attr($mehndi_tattoo_artist_site_tagline_font_size).'px;';
$mehndi_tattoo_artist_tp_theme_css .='}';
}

// related post
$mehndi_tattoo_artist_related_post_mob = get_theme_mod('mehndi_tattoo_artist_related_post_mob', true);
$mehndi_tattoo_artist_related_post = get_theme_mod('mehndi_tattoo_artist_remove_related_post', true);
$mehndi_tattoo_artist_tp_theme_css .= '.related-post-block {';
if ($mehndi_tattoo_artist_related_post == false) {
    $mehndi_tattoo_artist_tp_theme_css .= 'display: none;';
}
$mehndi_tattoo_artist_tp_theme_css .= '}';
$mehndi_tattoo_artist_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($mehndi_tattoo_artist_related_post == false || $mehndi_tattoo_artist_related_post_mob == false) {
    $mehndi_tattoo_artist_tp_theme_css .= '.related-post-block { display: none; }';
}
$mehndi_tattoo_artist_tp_theme_css .= '}';

//return to header mobile				
$mehndi_tattoo_artist_return_to_header_mob = get_theme_mod('mehndi_tattoo_artist_return_to_header_mob', true);
$mehndi_tattoo_artist_return_to_header = get_theme_mod('mehndi_tattoo_artist_return_to_header', true);
$mehndi_tattoo_artist_tp_theme_css .= '.return-to-header{';
if ($mehndi_tattoo_artist_return_to_header == false) {
    $mehndi_tattoo_artist_tp_theme_css .= 'display: none;';
}
$mehndi_tattoo_artist_tp_theme_css .= '}';
$mehndi_tattoo_artist_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($mehndi_tattoo_artist_return_to_header == false || $mehndi_tattoo_artist_return_to_header_mob == false) {
    $mehndi_tattoo_artist_tp_theme_css .= '.return-to-header{ display: none; }';
}
$mehndi_tattoo_artist_tp_theme_css .= '}';


//footer image
$mehndi_tattoo_artist_footer_widget_image = get_theme_mod('mehndi_tattoo_artist_footer_widget_image');
if($mehndi_tattoo_artist_footer_widget_image != false){
$mehndi_tattoo_artist_tp_theme_css .='#footer{';
	$mehndi_tattoo_artist_tp_theme_css .='background: url('.esc_attr($mehndi_tattoo_artist_footer_widget_image).');';
$mehndi_tattoo_artist_tp_theme_css .='}';
}

// related product
$mehndi_tattoo_artist_related_product = get_theme_mod('mehndi_tattoo_artist_related_product',true);
if($mehndi_tattoo_artist_related_product == false){
$mehndi_tattoo_artist_tp_theme_css .='.related.products{';
	$mehndi_tattoo_artist_tp_theme_css .='display: none;';
$mehndi_tattoo_artist_tp_theme_css .='}';
}

//menu font size
$mehndi_tattoo_artist_menu_font_size = get_theme_mod('mehndi_tattoo_artist_menu_font_size', '');{
$mehndi_tattoo_artist_tp_theme_css .='.main-navigation a, .main-navigation li.page_item_has_children:after,.main-navigation li.menu-item-has-children:after{';
	$mehndi_tattoo_artist_tp_theme_css .='font-size: '.esc_attr($mehndi_tattoo_artist_menu_font_size).'px;';
$mehndi_tattoo_artist_tp_theme_css .='}';
}

// menu text tranform
$mehndi_tattoo_artist_menu_text_tranform = get_theme_mod( 'mehndi_tattoo_artist_menu_text_tranform','');
if($mehndi_tattoo_artist_menu_text_tranform == 'Uppercase'){
$mehndi_tattoo_artist_tp_theme_css .='.main-navigation a {';
	$mehndi_tattoo_artist_tp_theme_css .='text-transform: uppercase;';
$mehndi_tattoo_artist_tp_theme_css .='}';
}else if($mehndi_tattoo_artist_menu_text_tranform == 'Lowercase'){
$mehndi_tattoo_artist_tp_theme_css .='.main-navigation a {';
	$mehndi_tattoo_artist_tp_theme_css .='text-transform: lowercase;';
$mehndi_tattoo_artist_tp_theme_css .='}';
}
else if($mehndi_tattoo_artist_menu_text_tranform == 'Capitalize'){
$mehndi_tattoo_artist_tp_theme_css .='.main-navigation a {';
	$mehndi_tattoo_artist_tp_theme_css .='text-transform: capitalize;';
$mehndi_tattoo_artist_tp_theme_css .='}';
}
