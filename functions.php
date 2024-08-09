<?php
/**
 * Mehndi Tattoo Artist functions and definitions
 *
 * @package Mehndi Tattoo Artist
 * @subpackage mehndi_tattoo_artist
 */

function mehndi_tattoo_artist_setup() {

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'mehndi-tattoo-artist-featured-image', 2000, 1200, true );
	add_image_size( 'mehndi-tattoo-artist-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary-menu'    => __( 'Primary Menu', 'mehndi-tattoo-artist' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', mehndi_tattoo_artist_fonts_url() ) );
}
add_action( 'after_setup_theme', 'mehndi_tattoo_artist_setup' );

/**
 * Register custom fonts.
 */
function mehndi_tattoo_artist_fonts_url(){
	$mehndi_tattoo_artist_font_url = '';
	$mehndi_tattoo_artist_font_family = array();
	$mehndi_tattoo_artist_font_family[] = 'Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Roboto:wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900';
	$mehndi_tattoo_artist_font_family[] = 'Fira Sans Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$mehndi_tattoo_artist_font_family[] = 'Jura:ital,wght@300;400;500;600;700';
	$mehndi_tattoo_artist_font_family[] = 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$mehndi_tattoo_artist_font_family[] = 'Bad Script';
	$mehndi_tattoo_artist_font_family[] = 'Bebas Neue';
	$mehndi_tattoo_artist_font_family[] = 'Fjalla One';
	$mehndi_tattoo_artist_font_family[] = 'PT Sans:ital,wght@0,400;0,700;1,400;1,700';
	$mehndi_tattoo_artist_font_family[] = 'PT Serif:ital,wght@0,400;0,700;1,400;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Alex Brush';
	$mehndi_tattoo_artist_font_family[] = 'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$mehndi_tattoo_artist_font_family[] = 'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$mehndi_tattoo_artist_font_family[] = 'Playball';
	$mehndi_tattoo_artist_font_family[] = 'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$mehndi_tattoo_artist_font_family[] = 'Julius Sans One';
	$mehndi_tattoo_artist_font_family[] = 'Arsenal:ital,wght@0,400;0,700;1,400;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Slabo 13px';
	$mehndi_tattoo_artist_font_family[] = 'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900';
	$mehndi_tattoo_artist_font_family[] = 'Overpass Mono:wght@300;400;500;600;700';
	$mehndi_tattoo_artist_font_family[] = 'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900';
	$mehndi_tattoo_artist_font_family[] = 'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$mehndi_tattoo_artist_font_family[] = 'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900';
	$mehndi_tattoo_artist_font_family[] = 'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$mehndi_tattoo_artist_font_family[] = 'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$mehndi_tattoo_artist_font_family[] = 'Quicksand:wght@300;400;500;600;700';
	$mehndi_tattoo_artist_font_family[] = 'Padauk:wght@400;700';
	$mehndi_tattoo_artist_font_family[] = 'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$mehndi_tattoo_artist_font_family[] = 'Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900';
	$mehndi_tattoo_artist_font_family[] = 'Inconsolata:wght@200;300;400;500;600;700;800;900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$mehndi_tattoo_artist_font_family[] = 'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$mehndi_tattoo_artist_font_family[] = 'Pacifico';
	$mehndi_tattoo_artist_font_family[] = 'Indie Flower';
	$mehndi_tattoo_artist_font_family[] = 'VT323';
	$mehndi_tattoo_artist_font_family[] = 'Dosis:wght@200;300;400;500;600;700;800';
	$mehndi_tattoo_artist_font_family[] = 'Frank Ruhl Libre:wght@300;400;500;700;900';
	$mehndi_tattoo_artist_font_family[] = 'Fjalla One';
	$mehndi_tattoo_artist_font_family[] = 'Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$mehndi_tattoo_artist_font_family[] = 'Oxygen:wght@300;400;700';
	$mehndi_tattoo_artist_font_family[] = 'Arvo:ital,wght@0,400;0,700;1,400;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Noto Serif:ital,wght@0,400;0,700;1,400;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Lobster';
	$mehndi_tattoo_artist_font_family[] = 'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Yanone Kaffeesatz:wght@200;300;400;500;600;700';
	$mehndi_tattoo_artist_font_family[] = 'Anton';
	$mehndi_tattoo_artist_font_family[] = 'Libre Baskerville:ital,wght@0,400;0,700;1,400';
	$mehndi_tattoo_artist_font_family[] = 'Bree Serif';
	$mehndi_tattoo_artist_font_family[] = 'Gloria Hallelujah';
	$mehndi_tattoo_artist_font_family[] = 'Abril Fatface';
	$mehndi_tattoo_artist_font_family[] = 'Varela Round';
	$mehndi_tattoo_artist_font_family[] = 'Vampiro One';
	$mehndi_tattoo_artist_font_family[] = 'Shadows Into Light';
	$mehndi_tattoo_artist_font_family[] = 'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Rokkitt:wght@100;200;300;400;500;600;700;800;900';
	$mehndi_tattoo_artist_font_family[] = 'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$mehndi_tattoo_artist_font_family[] = 'Francois One';
	$mehndi_tattoo_artist_font_family[] = 'Orbitron:wght@400;500;600;700;800;900';
	$mehndi_tattoo_artist_font_family[] = 'Patua One';
	$mehndi_tattoo_artist_font_family[] = 'Acme';
	$mehndi_tattoo_artist_font_family[] = 'Satisfy';
	$mehndi_tattoo_artist_font_family[] = 'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Architects Daughter';
	$mehndi_tattoo_artist_font_family[] = 'Russo One';
	$mehndi_tattoo_artist_font_family[] = 'Monda:wght@400;700';
	$mehndi_tattoo_artist_font_family[] = 'Righteous';
	$mehndi_tattoo_artist_font_family[] = 'Lobster Two:ital,wght@0,400;0,700;1,400;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Hammersmith One';
	$mehndi_tattoo_artist_font_family[] = 'Courgette';
	$mehndi_tattoo_artist_font_family[] = 'Permanent Marke';
	$mehndi_tattoo_artist_font_family[] = 'Cherry Swash:wght@400;700';
	$mehndi_tattoo_artist_font_family[] = 'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Poiret One';
	$mehndi_tattoo_artist_font_family[] = 'BenchNine:wght@300;400;700';
	$mehndi_tattoo_artist_font_family[] = 'Economica:ital,wght@0,400;0,700;1,400;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Handlee';
	$mehndi_tattoo_artist_font_family[] = 'Cardo:ital,wght@0,400;0,700;1,400';
	$mehndi_tattoo_artist_font_family[] = 'Alfa Slab One';
	$mehndi_tattoo_artist_font_family[] = 'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Cookie';
	$mehndi_tattoo_artist_font_family[] = 'Chewy';
	$mehndi_tattoo_artist_font_family[] = 'Great Vibes';
	$mehndi_tattoo_artist_font_family[] = 'Coming Soon';
	$mehndi_tattoo_artist_font_family[] = 'Philosopher:ital,wght@0,400;0,700;1,400;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Days One';
	$mehndi_tattoo_artist_font_family[] = 'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$mehndi_tattoo_artist_font_family[] = 'Shrikhand';
	$mehndi_tattoo_artist_font_family[] = 'Tangerine:wght@400;700';
	$mehndi_tattoo_artist_font_family[] = 'IM Fell English SC';
	$mehndi_tattoo_artist_font_family[] = 'Boogaloo';
	$mehndi_tattoo_artist_font_family[] = 'Bangers';
	$mehndi_tattoo_artist_font_family[] = 'Fredoka One';
	$mehndi_tattoo_artist_font_family[] = 'Volkhov:ital,wght@0,400;0,700;1,400;1,700';
	$mehndi_tattoo_artist_font_family[] = 'Shadows Into Light Two';
	$mehndi_tattoo_artist_font_family[] = 'Marck Script';
	$mehndi_tattoo_artist_font_family[] = 'Sacramento';
	$mehndi_tattoo_artist_font_family[] = 'Unica One';
	$mehndi_tattoo_artist_font_family[] = 'Dancing Script:wght@400;500;600;700';
	$mehndi_tattoo_artist_font_family[] = 'Exo 2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$mehndi_tattoo_artist_font_family[] = 'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$mehndi_tattoo_artist_font_family[] = 'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$mehndi_tattoo_artist_font_family[] = 'DM Serif Display:ital@0;1';
	$mehndi_tattoo_artist_font_family[] = 'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800';
	
	$mehndi_tattoo_artist_query_args = array(
		'family'	=> rawurlencode(implode('|',$mehndi_tattoo_artist_font_family)),
	);
	$mehndi_tattoo_artist_font_url = add_query_arg($mehndi_tattoo_artist_query_args,'//fonts.googleapis.com/css');
	return $mehndi_tattoo_artist_font_url;
	$contents = wptt_get_webmehndi_tattoo_artist_font_url( esc_url_raw( $fonts_url ) );
}

/**
 * Register widget area.
 */
function mehndi_tattoo_artist_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'mehndi-tattoo-artist' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'mehndi-tattoo-artist' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'mehndi-tattoo-artist' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'mehndi-tattoo-artist' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'mehndi-tattoo-artist' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'mehndi-tattoo-artist' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'mehndi-tattoo-artist' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'mehndi-tattoo-artist' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s py-2">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'mehndi-tattoo-artist' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'mehndi-tattoo-artist' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s py-2">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'mehndi-tattoo-artist' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'mehndi-tattoo-artist' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s py-2">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'mehndi-tattoo-artist' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'mehndi-tattoo-artist' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s py-2">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'mehndi_tattoo_artist_widgets_init' );

// Category count 
function mehndi_tattoo_artist_display_post_category_count() {
    $mehndi_tattoo_artist_category = get_the_category();
    $mehndi_tattoo_artist_category_count = ($mehndi_tattoo_artist_category) ? count($mehndi_tattoo_artist_category) : 0;
    $mehndi_tattoo_artist_category_text = ($mehndi_tattoo_artist_category_count === 1) ? 'category' : 'categories'; // Check for pluralization
    echo $mehndi_tattoo_artist_category_count . ' ' . $mehndi_tattoo_artist_category_text;
}

//post tag
function mehndi_tattoo_artist_custom_tags_filter($mehndi_tattoo_artist_tag_list) {
    // Replace the comma (,) with an empty string
    $mehndi_tattoo_artist_tag_list = str_replace(', ', '', $mehndi_tattoo_artist_tag_list);

    return $mehndi_tattoo_artist_tag_list;
}
add_filter('the_tags', 'mehndi_tattoo_artist_custom_tags_filter');

function mehndi_tattoo_artist_custom_output_tags() {
    $mehndi_tattoo_artist_tags = get_the_tags();

    if ($mehndi_tattoo_artist_tags) {
        $mehndi_tattoo_artist_tags_output = '<div class="post_tag">Tags: ';
        $mehndi_tattoo_artist_first_tag = reset($mehndi_tattoo_artist_tags);
        foreach ($mehndi_tattoo_artist_tags as $tag) {
            $mehndi_tattoo_artist_tags_output .= '<a href="' . esc_url(get_tag_link($tag)) . '" rel="tag" class="mr-2">' . esc_html($tag->name) . '</a>';
            if ($tag !== $mehndi_tattoo_artist_first_tag) {
                $mehndi_tattoo_artist_tags_output .= ' ';
            }
        }
        $mehndi_tattoo_artist_tags_output .= '</div>';
        echo $mehndi_tattoo_artist_tags_output;
    }
}
/**
 * Enqueue scripts and styles.
 */
function mehndi_tattoo_artist_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'mehndi-tattoo-artist-fonts', mehndi_tattoo_artist_fonts_url(), array(), null );

	// owl
	wp_enqueue_style( 'owl-carousel-css', get_theme_file_uri( '/assets/css/owl.carousel.css' ) );

	// Bootstrap
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

	// Theme stylesheet.
	wp_enqueue_style( 'mehndi-tattoo-artist-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/tp-theme-color.php' );
	wp_add_inline_style( 'mehndi-tattoo-artist-style',$mehndi_tattoo_artist_tp_theme_css );
	require get_parent_theme_file_path( '/tp-body-width-layout.php' );
	wp_add_inline_style( 'mehndi-tattoo-artist-style',$mehndi_tattoo_artist_tp_theme_css );
	wp_style_add_data('mehndi-tattoo-artist-style', 'rtl', 'replace');
	
	// Theme block stylesheet.
	wp_enqueue_style( 'mehndi-tattoo-artist-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'mehndi-tattoo-artist-style' ), '1.0' );

	// Fontawesome
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( '/assets/css/fontawesome-all.css' ) );

	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ), true );

	wp_enqueue_script( 'owl-carousel-js', get_theme_file_uri( '/assets/js/owl.carousel.js' ), array( 'jquery' ), true );
	
	wp_enqueue_script( 'mehndi-tattoo-artist-custom-scripts', esc_url( get_template_directory_uri() ) . '/assets/js/mehndi-tattoo-artist-custom.js', array('jquery'), true);

	wp_enqueue_script( 'mehndi-tattoo-artist-focus-nav', esc_url( get_template_directory_uri() ) . '/assets/js/focus-nav.js', array('jquery'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	$mehndi_tattoo_artist_body_font_family = get_theme_mod('mehndi_tattoo_artist_body_font_family', '');

	$mehndi_tattoo_artist_heading_font_family = get_theme_mod('mehndi_tattoo_artist_heading_font_family', '');

	$mehndi_tattoo_artist_menu_font_family = get_theme_mod('mehndi_tattoo_artist_menu_font_family', '');

	$mehndi_tattoo_artist_tp_theme_css = '
		body{
		    font-family: '.esc_html($mehndi_tattoo_artist_body_font_family).';
		}
		.more-btn a{
		    font-family: '.esc_html($mehndi_tattoo_artist_body_font_family).';
		}
		h1{
		    font-family: '.esc_html($mehndi_tattoo_artist_heading_font_family).';
		}
		h2{
		    font-family: '.esc_html($mehndi_tattoo_artist_heading_font_family).';
		}
		h3{
		    font-family: '.esc_html($mehndi_tattoo_artist_heading_font_family).';
		}
		h4{
		    font-family: '.esc_html($mehndi_tattoo_artist_heading_font_family).';
		}
		h5{
		    font-family: '.esc_html($mehndi_tattoo_artist_heading_font_family).';
		}
		h6{
		    font-family: '.esc_html($mehndi_tattoo_artist_heading_font_family).';
		}
		#theme-sidebar .wp-block-search .wp-block-search__label{
		    font-family: '.esc_html($mehndi_tattoo_artist_heading_font_family).';
		}
		.menubar,.main-navigation a{
		    font-family: '.esc_html($mehndi_tattoo_artist_menu_font_family).';
		}
	';
	wp_add_inline_style('mehndi-tattoo-artist-style', $mehndi_tattoo_artist_tp_theme_css);
}
add_action( 'wp_enqueue_scripts', 'mehndi_tattoo_artist_scripts' );

/*radio button sanitization*/
function mehndi_tattoo_artist_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

// Sanitize Sortable control.
function mehndi_tattoo_artist_sanitize_sortable( $val, $setting ) {
	if ( is_string( $val ) || is_numeric( $val ) ) {
		return array(
			esc_attr( $val ),
		);
	}
	$sanitized_value = array();
	foreach ( $val as $item ) {
		if ( isset( $setting->manager->get_control( $setting->id )->choices[ $item ] ) ) {
			$sanitized_value[] = esc_attr( $item );
		}
	}
	return $sanitized_value;
}

function mehndi_tattoo_artist_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}


// Change number or products per row to 3
add_filter('loop_shop_columns', 'mehndi_tattoo_artist_loop_columns');
if (!function_exists('mehndi_tattoo_artist_loop_columns')) {
	function mehndi_tattoo_artist_loop_columns() {
		$mehndi_tattoo_artist_columns = get_theme_mod( 'mehndi_tattoo_artist_per_columns', 3 );
		return $mehndi_tattoo_artist_columns;
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'mehndi_tattoo_artist_per_page', 20 );
function mehndi_tattoo_artist_per_page( $mehndi_tattoo_artist_cols ) {
  	$mehndi_tattoo_artist_cols = get_theme_mod( 'mehndi_tattoo_artist_product_per_page', 9 );
	return $mehndi_tattoo_artist_cols;
}

function mehndi_tattoo_artist_sanitize_number_range( $number, $setting ) {

	// Ensure input is an absolute integer.
	$number = absint( $number );

	// Get the input attributes associated with the setting.
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;

	// Get minimum number in the range.
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );

	// Get maximum number in the range.
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );

	// Get step.
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

	// If the number is within the valid range, return it; otherwise, return the default
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

function mehndi_tattoo_artist_sanitize_checkbox( $input ) {
	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}


function mehndi_tattoo_artist_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function mehndi_tattoo_artist_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );

	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

/**
 * Use front-page.php when Front page displays is set to a static page.
 */
function mehndi_tattoo_artist_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template','mehndi_tattoo_artist_front_page_template' );

/**
 * Logo Custamization.
 */

function mehndi_tattoo_artist_logo_width(){

	$mehndi_tattoo_artist_logo_width   = get_theme_mod( 'mehndi_tattoo_artist_logo_width', 50 );

	echo "<style type='text/css' media='all'>"; ?>
		img.custom-logo{
		    width: <?php echo absint( $mehndi_tattoo_artist_logo_width ); ?>px;
		    max-width: 100%;
		}
	<?php echo "</style>";
}

add_action( 'wp_head', 'mehndi_tattoo_artist_logo_width' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );
/**
 * Load Theme Web File
 */
require get_parent_theme_file_path('/inc/wptt-webfont-loader.php' );
/**
 * Load Toggle file
 */
require get_parent_theme_file_path( '/inc/controls/customize-control-toggle.php' );

/**
 * load sortable file
 */
require get_parent_theme_file_path( '/inc/controls/sortable-control.php' );