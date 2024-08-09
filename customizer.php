<?php
/**
 * Mehndi Tattoo Artist: Customizer
 *
 * @package Mehndi Tattoo Artist
 * @subpackage mehndi_tattoo_artist
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function Mehndi_Tattoo_Artist_Customize_register( $wp_customize ) {

	require get_parent_theme_file_path('/inc/controls/icon-changer.php');

	require get_parent_theme_file_path('/inc/controls/range-slider-control.php');

	// Register the custom control type.
	$wp_customize->register_control_type( 'Mehndi_Tattoo_Artist_Toggle_Control' );

	//Register the sortable control type.
	$wp_customize->register_control_type( 'Mehndi_Tattoo_Artist_Control_Sortable' );	

	//add home page setting pannel
	$wp_customize->add_panel( 'mehndi_tattoo_artist_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Custom Home page', 'mehndi-tattoo-artist' ),
	    'description' => __( 'Description of what this panel does.', 'mehndi-tattoo-artist' ),
	) );

	//TP Genral Option
	$wp_customize->add_section('mehndi_tattoo_artist_tp_general_settings',array(
        'title' => __('TP General Option', 'mehndi-tattoo-artist'),
        'priority' => 1,
        'panel' => 'mehndi_tattoo_artist_panel_id'
    ) );
 	$wp_customize->add_setting('mehndi_tattoo_artist_tp_body_layout_settings',array(
		'default' => 'Full',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_choices'
	));

 	$wp_customize->add_control('mehndi_tattoo_artist_tp_body_layout_settings',array(
		'type' => 'radio',
		'label'     => __('Body Layout Setting', 'mehndi-tattoo-artist'),
		'description'   => __('This option work for complete body, if you want to set the complete website in container.', 'mehndi-tattoo-artist'),
		'section' => 'mehndi_tattoo_artist_tp_general_settings',
		'choices' => array(
		'Full' => __('Full','mehndi-tattoo-artist'),
		'Container' => __('Container','mehndi-tattoo-artist'),
		'Container Fluid' => __('Container Fluid','mehndi-tattoo-artist')
		),
	) );

    // Add Settings and Controls for Post Layout
	$wp_customize->add_setting('mehndi_tattoo_artist_sidebar_post_layout',array(
     'default' => 'right',
     'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_choices'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_sidebar_post_layout',array(
     'type' => 'radio',
     'label'     => __('Post Sidebar Position', 'mehndi-tattoo-artist'),
     'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'mehndi-tattoo-artist'),
     'section' => 'mehndi_tattoo_artist_tp_general_settings',
     'choices' => array(
         'full' => __('Full','mehndi-tattoo-artist'),
         'left' => __('Left','mehndi-tattoo-artist'),
         'right' => __('Right','mehndi-tattoo-artist'),
         'three-column' => __('Three Columns','mehndi-tattoo-artist'),
         'four-column' => __('Four Columns','mehndi-tattoo-artist'),
         'grid' => __('Grid Layout','mehndi-tattoo-artist')
     ),
	) );

	// Add Settings and Controls for single post sidebar Layout
	$wp_customize->add_setting('mehndi_tattoo_artist_sidebar_single_post_layout',array(
        'default' => 'right',
        'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_choices'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_sidebar_single_post_layout',array(
        'type' => 'radio',
        'label'     => __('Single Post Sidebar Position', 'mehndi-tattoo-artist'),
        'description'   => __('This option work for single blog page', 'mehndi-tattoo-artist'),
        'section' => 'mehndi_tattoo_artist_tp_general_settings',
        'choices' => array(
            'full' => __('Full','mehndi-tattoo-artist'),
            'left' => __('Left','mehndi-tattoo-artist'),
            'right' => __('Right','mehndi-tattoo-artist'),
        ),
	) );

	// Add Settings and Controls for Page Layout
	$wp_customize->add_setting('mehndi_tattoo_artist_sidebar_page_layout',array(
     'default' => 'right',
     'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_choices'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_sidebar_page_layout',array(
     'type' => 'radio',
     'label'     => __('Page Sidebar Position', 'mehndi-tattoo-artist'),
     'description'   => __('This option work for pages.', 'mehndi-tattoo-artist'),
     'section' => 'mehndi_tattoo_artist_tp_general_settings',
     'choices' => array(
         'full' => __('Full','mehndi-tattoo-artist'),
         'left' => __('Left','mehndi-tattoo-artist'),
         'right' => __('Right','mehndi-tattoo-artist')
     ),
	) );
	//tp typography option
	$mehndi_tattoo_artist_font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One',
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower',
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit',
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two',
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda',
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli',
		'Marck Script'           => 'Marck Script',
		'Noto Serif'             => 'Noto Serif',
		'Open Sans'              => 'Open Sans',
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen',
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display',
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik',
		'Rokkitt'                => 'Rokkitt',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Slabo'                  => 'Slabo',
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two',
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn',
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	$wp_customize->add_section('mehndi_tattoo_artist_typography_option',array(
		'title'         => __('TP Typography Option', 'mehndi-tattoo-artist'),
		'priority' => 1,
		'panel' => 'mehndi_tattoo_artist_panel_id'
   	));

   	$wp_customize->add_setting('mehndi_tattoo_artist_heading_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_choices',
	));
	$wp_customize->add_control(	'mehndi_tattoo_artist_heading_font_family', array(
		'section' => 'mehndi_tattoo_artist_typography_option',
		'label'   => __('heading Fonts', 'mehndi-tattoo-artist'),
		'type'    => 'select',
		'choices' => $mehndi_tattoo_artist_font_array,
	));

	$wp_customize->add_setting('mehndi_tattoo_artist_body_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_choices',
	));
	$wp_customize->add_control(	'mehndi_tattoo_artist_body_font_family', array(
		'section' => 'mehndi_tattoo_artist_typography_option',
		'label'   => __('Body Fonts', 'mehndi-tattoo-artist'),
		'type'    => 'select',
		'choices' => $mehndi_tattoo_artist_font_array,
	));

	//TP Preloader Option
	$wp_customize->add_section('mehndi_tattoo_artist_prelaoder_option',array(
		'title'         => __('TP Preloader Option', 'mehndi-tattoo-artist'),
		'priority' => 1,
		'panel' => 'mehndi_tattoo_artist_panel_id'
	) );
	$wp_customize->add_setting( 'mehndi_tattoo_artist_preloader_show_hide', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_preloader_show_hide', array(
		'label'       => esc_html__( 'Show / Hide Preloader Option', 'mehndi-tattoo-artist' ),
		'section'     => 'mehndi_tattoo_artist_prelaoder_option',
		'type'        => 'toggle',
		'settings'    => 'mehndi_tattoo_artist_preloader_show_hide',
	) ) );
	$wp_customize->add_setting( 'mehndi_tattoo_artist_tp_preloader_color1_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mehndi_tattoo_artist_tp_preloader_color1_option', array(
			'label'     => __('Preloader First Ring Color', 'mehndi-tattoo-artist'),
	    'description' => __('It will change the complete theme preloader ring 1 color in one click.', 'mehndi-tattoo-artist'),
	    'section' => 'mehndi_tattoo_artist_prelaoder_option',
	    'settings' => 'mehndi_tattoo_artist_tp_preloader_color1_option',
  	)));
  	$wp_customize->add_setting( 'mehndi_tattoo_artist_tp_preloader_color2_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mehndi_tattoo_artist_tp_preloader_color2_option', array(
			'label'     => __('Preloader Second Ring Color', 'mehndi-tattoo-artist'),
	    'description' => __('It will change the complete theme preloader ring 2 color in one click.', 'mehndi-tattoo-artist'),
	    'section' => 'mehndi_tattoo_artist_prelaoder_option',
	    'settings' => 'mehndi_tattoo_artist_tp_preloader_color2_option',
  	)));
  	$wp_customize->add_setting( 'mehndi_tattoo_artist_tp_preloader_bg_color_option', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mehndi_tattoo_artist_tp_preloader_bg_color_option', array(
			'label'     => __('Preloader Background Color', 'mehndi-tattoo-artist'),
	    'description' => __('It will change the complete theme preloader bg color in one click.', 'mehndi-tattoo-artist'),
	    'section' => 'mehndi_tattoo_artist_prelaoder_option',
	    'settings' => 'mehndi_tattoo_artist_tp_preloader_bg_color_option',
  	)));

	//TP Blog Option
	$wp_customize->add_section('mehndi_tattoo_artist_blog_option',array(
		'title' => __('TP Blog Option', 'mehndi-tattoo-artist'),
		'priority' => 1,
		'panel' => 'mehndi_tattoo_artist_panel_id'
	) );

	$wp_customize->add_setting('blog_meta_order', array(
        'default' => array('date', 'author', 'comment', 'category'),
        'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_sortable',
    ));
    $wp_customize->add_control(new Mehndi_Tattoo_Artist_Control_Sortable($wp_customize, 'blog_meta_order', array(
    	'label' => esc_html__('Meta Order', 'mehndi-tattoo-artist'),
        'description' => __('Drag & Drop post items to re-arrange the order and also hide and show items as per the need by clicking on the eye icon.', 'mehndi-tattoo-artist') ,
        'section' => 'mehndi_tattoo_artist_blog_option',
        'choices' => array(
            'date' => __('date', 'mehndi-tattoo-artist') ,
            'author' => __('author', 'mehndi-tattoo-artist') ,
            'comment' => __('comment', 'mehndi-tattoo-artist') ,
            'category' => __('category', 'mehndi-tattoo-artist') ,
        ) ,
    )));

    $wp_customize->add_setting( 'mehndi_tattoo_artist_excerpt_count', array(
		'default'              => 35,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'mehndi_tattoo_artist_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'mehndi_tattoo_artist_excerpt_count', array(
		'label'       => esc_html__( 'Edit Excerpt Limit','mehndi-tattoo-artist' ),
		'section'     => 'mehndi_tattoo_artist_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('mehndi_tattoo_artist_read_more_text',array(
		'default'=> __('Read More','mehndi-tattoo-artist'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_read_more_text',array(
		'label'	=> __('Edit Button Text','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_blog_option',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'mehndi_tattoo_artist_remove_read_button', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_remove_read_button', array(
		'label'       => esc_html__( 'Show / Hide Read More Button', 'mehndi-tattoo-artist' ),
		'section'     => 'mehndi_tattoo_artist_blog_option',
		'type'        => 'toggle',
		'settings'    => 'mehndi_tattoo_artist_remove_read_button',
	) ) );

    $wp_customize->selective_refresh->add_partial( 'mehndi_tattoo_artist_remove_read_button', array(
		'selector' => '.readmore-btn',
		'render_callback' => 'Mehndi_Tattoo_Artist_Customize_partial_mehndi_tattoo_artist_remove_read_button',
	 ));

	 $wp_customize->add_setting( 'mehndi_tattoo_artist_remove_tags', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_remove_tags', array(
		'label'       => esc_html__( 'Show / Hide Tags Option', 'mehndi-tattoo-artist' ),
		'section'     => 'mehndi_tattoo_artist_blog_option',
		'type'        => 'toggle',
		'settings'    => 'mehndi_tattoo_artist_remove_tags',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'mehndi_tattoo_artist_remove_tags', array(
		'selector' => '.box-content a[rel="tag"]',
		'render_callback' => 'Mehndi_Tattoo_Artist_Customize_partial_mehndi_tattoo_artist_remove_tags',
	));
	$wp_customize->add_setting( 'mehndi_tattoo_artist_remove_category', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_remove_category', array(
		'label'       => esc_html__( 'Show / Hide Category Option', 'mehndi-tattoo-artist' ),
		'section'     => 'mehndi_tattoo_artist_blog_option',
		'type'        => 'toggle',
		'settings'    => 'mehndi_tattoo_artist_remove_category',
	) ) );
    $wp_customize->selective_refresh->add_partial( 'mehndi_tattoo_artist_remove_category', array(
		'selector' => '.box-content a[rel="category"]',
		'render_callback' => 'Mehndi_Tattoo_Artist_Customize_partial_mehndi_tattoo_artist_remove_category',
	));
	$wp_customize->add_setting( 'mehndi_tattoo_artist_remove_comment', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_remove_comment', array(
	 'label'       => esc_html__( 'Show / Hide Comment Form', 'mehndi-tattoo-artist' ),
	 'section'     => 'mehndi_tattoo_artist_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'mehndi_tattoo_artist_remove_comment',
	) ) );

	$wp_customize->add_setting( 'mehndi_tattoo_artist_remove_related_post', array(
	 'default'           => true,
	 'transport'         => 'refresh',
	 'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
 	) );

	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_remove_related_post', array(
	 'label'       => esc_html__( 'Show / Hide Related Post', 'mehndi-tattoo-artist' ),
	 'section'     => 'mehndi_tattoo_artist_blog_option',
	 'type'        => 'toggle',
	 'settings'    => 'mehndi_tattoo_artist_remove_related_post',
	) ) );
	$wp_customize->add_setting( 'mehndi_tattoo_artist_related_post_per_page', array(
		'default'              => 3,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'mehndi_tattoo_artist_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'mehndi_tattoo_artist_related_post_per_page', array(
		'label'       => esc_html__( 'Related Post Per Page','mehndi-tattoo-artist' ),
		'section'     => 'mehndi_tattoo_artist_blog_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 3,
			'max'              => 9,
		),
	) );

	 //MENU TYPOGRAPHY
	$wp_customize->add_section( 'mehndi_tattoo_artist_menu_typography', array(
    	'title'      => __( 'Menu Typography', 'mehndi-tattoo-artist' ),
    	'priority' => 2,
		'panel' => 'mehndi_tattoo_artist_panel_id'
	) );
	$wp_customize->add_setting('mehndi_tattoo_artist_menu_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_choices',
	));
	$wp_customize->add_control(	'mehndi_tattoo_artist_menu_font_family', array(
		'section' => 'mehndi_tattoo_artist_menu_typography',
		'label'   => __('Menu Fonts', 'mehndi-tattoo-artist'),
		'type'    => 'select',
		'choices' => $mehndi_tattoo_artist_font_array,
	));

	$wp_customize->add_setting('mehndi_tattoo_artist_menu_text_tranform',array(
		'default' => '',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_choices'
 	));
 	$wp_customize->add_control('mehndi_tattoo_artist_menu_text_tranform',array(
		'type' => 'select',
		'label' => __('Menu Text Transform','mehndi-tattoo-artist'),
		'section' => 'mehndi_tattoo_artist_menu_typography',
		'choices' => array(
		   'Uppercase' => __('Uppercase','mehndi-tattoo-artist'),
		   'Lowercase' => __('Lowercase','mehndi-tattoo-artist'),
		   'Capitalize' => __('Capitalize','mehndi-tattoo-artist'),
		),
	) );
	
	$wp_customize->add_setting('mehndi_tattoo_artist_menu_font_size', array(
	  'default' => '',
      'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_number_range',
	));
	$wp_customize->add_control(new Mehndi_Tattoo_Artist_Range_Slider($wp_customize, 'mehndi_tattoo_artist_menu_font_size', array(
       'section' => 'mehndi_tattoo_artist_menu_typography',
      'label' => esc_html__('Font Size', 'mehndi-tattoo-artist'),
      'input_attrs' => array(
        'min' => 0,
        'max' => 20,
        'step' => 1
    )
	)));

	// Top bar Section
	$wp_customize->add_section( 'mehndi_tattoo_artist_topbar', array(
    	'title'      => __( 'Contact Details', 'mehndi-tattoo-artist' ),
    	'description' => __( 'Add your contact details', 'mehndi-tattoo-artist' ),
		'panel' => 'mehndi_tattoo_artist_panel_id',
      'priority' => 2,
	) );

	$wp_customize->add_setting('mehndi_tattoo_artist_location',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_location',array(
		'label'	=> __('Add location','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_topbar',
		'type'=> 'text'
	));
	
	$wp_customize->add_setting('mehndi_tattoo_artist_mail',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_mail',array(
		'label'	=> __('Add Mail Address','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mehndi_tattoo_artist_message_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_message_text',array(
		'label'	=> __('Add Message','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mehndi_tattoo_artist_call_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_call_text',array(
		'label'	=> __('Add Call Text','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mehndi_tattoo_artist_call',array(
		'default'=> '',
		'sanitize_callback'	=> 'mehndi_tattoo_artist_sanitize_phone_number'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_call',array(
		'label'	=> __('Add Phone Number','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mehndi_tattoo_artist_header_button',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_header_button',array(
		'label'	=> __('Header Button Text','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mehndi_tattoo_artist_header_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_header_link',array(
		'label'	=> __('Header Button Link','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_topbar',
		'type'=> 'url'
	));

	// Social Link
	$wp_customize->add_section( 'mehndi_tattoo_artist_social_media', array(
    	'title'      => __( 'Social Media Links', 'mehndi-tattoo-artist' ),
    	'description' => __( 'Add your Social Links', 'mehndi-tattoo-artist' ),
		'panel' => 'mehndi_tattoo_artist_panel_id',
      'priority' => 2,
	) );

	$wp_customize->add_setting( 'mehndi_tattoo_artist_header_fb_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_header_fb_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'mehndi-tattoo-artist' ),
		'section'     => 'mehndi_tattoo_artist_social_media',
		'type'        => 'toggle',
		'settings'    => 'mehndi_tattoo_artist_header_fb_new_tab',
	) ) );

	$wp_customize->add_setting('mehndi_tattoo_artist_facebook_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_facebook_url',array(
		'label'	=> __('Facebook Link','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_social_media',
		'type'=> 'url'
	));

	$wp_customize->selective_refresh->add_partial( 'mehndi_tattoo_artist_facebook_url', array(
		'selector' => '.social-media',
		'render_callback' => 'Mehndi_Tattoo_Artist_Customize_partial_mehndi_tattoo_artist_facebook_url',
	) );
	$wp_customize->add_setting('mehndi_tattoo_artist_facebook_icon',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control(new Mehndi_Tattoo_Artist_Icon_Changer(
        $wp_customize,'mehndi_tattoo_artist_facebook_icon',array(
		'label'	=> __('Facebook Icon','mehndi-tattoo-artist'),
		'transport' => 'refresh',
		'section'	=> 'mehndi_tattoo_artist_social_media',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting( 'mehndi_tattoo_artist_header_twt_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
	) );

	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_header_twt_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'mehndi-tattoo-artist' ),
		'section'     => 'mehndi_tattoo_artist_social_media',
		'type'        => 'toggle',
		'settings'    => 'mehndi_tattoo_artist_header_twt_new_tab',
	) ) );
	$wp_customize->add_setting('mehndi_tattoo_artist_twitter_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('mehndi_tattoo_artist_twitter_url',array(
		'label'	=> __('Twitter Link','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_social_media',
		'type'=> 'url'
	));
	$wp_customize->add_setting('mehndi_tattoo_artist_twitter_icon',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mehndi_Tattoo_Artist_Icon_Changer(
        $wp_customize,'mehndi_tattoo_artist_twitter_icon',array(
		'label'	=> __('Twitter Icon','mehndi-tattoo-artist'),
		'transport' => 'refresh',
		'section'	=> 'mehndi_tattoo_artist_social_media',
		'type'		=> 'icon'
	)));
	
	
	$wp_customize->add_setting( 'mehndi_tattoo_artist_header_pint_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_header_pint_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'mehndi-tattoo-artist' ),
		'section'     => 'mehndi_tattoo_artist_social_media',
		'type'        => 'toggle',
		'settings'    => 'mehndi_tattoo_artist_header_pint_new_tab',
	) ) );

	$wp_customize->add_setting('mehndi_tattoo_artist_linkedin_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_linkedin_url',array(
		'label'	=> __('Linkedin Link','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('mehndi_tattoo_artist_linkedin_icon',array(
		'default'	=> 'fab fa-linkedin-in',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mehndi_Tattoo_Artist_Icon_Changer(
        $wp_customize,'mehndi_tattoo_artist_linkedin_icon',array(
		'label'	=> __('Linkedin Icon','mehndi-tattoo-artist'),
		'transport' => 'refresh',
		'section'	=> 'mehndi_tattoo_artist_social_media',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'mehndi_tattoo_artist_header_ins_new_tab', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_header_ins_new_tab', array(
		'label'       => esc_html__( 'Open in new tab', 'mehndi-tattoo-artist' ),
		'section'     => 'mehndi_tattoo_artist_social_media',
		'type'        => 'toggle',
		'settings'    => 'mehndi_tattoo_artist_header_ins_new_tab',
	) ) );

	$wp_customize->add_setting('mehndi_tattoo_artist_instagram_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_instagram_url',array(
		'label'	=> __('Instagram Link','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_social_media',
		'type'=> 'url'
	));

	$wp_customize->add_setting('mehndi_tattoo_artist_instagram_icon',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mehndi_Tattoo_Artist_Icon_Changer(
        $wp_customize,'mehndi_tattoo_artist_instagram_icon',array(
		'label'	=> __('Instagram Icon','mehndi-tattoo-artist'),
		'transport' => 'refresh',
		'section'	=> 'mehndi_tattoo_artist_social_media',
		'type'		=> 'icon'
	)));

	//home page slider
	$wp_customize->add_section( 'mehndi_tattoo_artist_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'mehndi-tattoo-artist' ),
		'panel' => 'mehndi_tattoo_artist_panel_id',
      'priority' => 6,
	) );

	$wp_customize->add_setting( 'mehndi_tattoo_artist_slider_arrows', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_slider_arrows', array(
		'label'       => esc_html__( 'Show / Hide slider', 'mehndi-tattoo-artist' ),
		'section'     => 'mehndi_tattoo_artist_slider_section',
		'type'        => 'toggle',
		'settings'    => 'mehndi_tattoo_artist_slider_arrows',
	) ) );

    $wp_customize->selective_refresh->add_partial( 'mehndi_tattoo_artist_slider_arrows', array(
		'selector' => '#slider .carousel-caption',
		'render_callback' => 'Mehndi_Tattoo_Artist_Customize_partial_mehndi_tattoo_artist_slider_arrows',
	) );

	$wp_customize->add_setting('mehndi_tattoo_artist_slider_short_heading',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_slider_short_heading',array(
		'label'	=> __('Add short Heading','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_slider_section',
		'type'=> 'text'
	));


	for ( $mehndi_tattoo_artist_count = 1; $mehndi_tattoo_artist_count <= 4; $mehndi_tattoo_artist_count++ ) {

	// Add color scheme setting and control.
	$wp_customize->add_setting( 'mehndi_tattoo_artist_slider_page' . $mehndi_tattoo_artist_count, array(
		'default'           => '',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_dropdown_pages'
	) );

	$wp_customize->add_control( 'mehndi_tattoo_artist_slider_page' . $mehndi_tattoo_artist_count, array(
		'label'    => __( 'Select Slide Image Page', 'mehndi-tattoo-artist' ),
		'section'  => 'mehndi_tattoo_artist_slider_section',
		'type'     => 'dropdown-pages'
	) );
	}

	$wp_customize->add_setting('mehndi_tattoo_artist_product_btn_text1',array(
		'default'=> 'Read More',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_product_btn_text1',array(
		'label'	=> esc_html__('Add Slider Button 1 Text','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_slider_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mehndi_tattoo_artist_product_btn_link1',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_product_btn_link1',array(
		'label'	=> esc_html__('Add Slider Button 1 link','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_slider_section',
		'type'=> 'url'
	));
	
	// About Us Section
	$wp_customize->add_section('mehndi_tattoo_artist_service_section', array(
	    'title'    => __('About Us Section', 'mehndi-tattoo-artist'),
	    'panel'    => 'mehndi_tattoo_artist_panel_id',
	    'priority' => 7,
	));

	$wp_customize->add_setting('mehndi_tattoo_artist_service_enable', array(
	    'default'           => false,
	    'transport'         => 'refresh',
	    'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
	));
	$wp_customize->add_control(new Mehndi_Tattoo_Artist_Toggle_Control($wp_customize, 'mehndi_tattoo_artist_service_enable', array(
	    'label'    => esc_html__('Show / Hide Services', 'mehndi-tattoo-artist'),
	    'section'  => 'mehndi_tattoo_artist_service_section',
	    'type'     => 'toggle',
	    'settings' => 'mehndi_tattoo_artist_service_enable',
	)));

	$wp_customize->add_setting('mehndi_tattoo_artist_service_sub_heading', array(
	    'default'           => '',
	    'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_service_sub_heading', array(
	    'label'    => __('Section Sub Title', 'mehndi-tattoo-artist'),
	    'section'  => 'mehndi_tattoo_artist_service_section',
	    'type'     => 'text'
	));

	// Add a default "Select" option to the dropdown
	$wp_customize->add_setting('mehndi_tattoo_artist_about_page', array(
	    'default'           => '0', 
	    'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_dropdown_pages'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_about_page', array(
	    'label'    => __('Select Services Page', 'mehndi-tattoo-artist'),
	    'section'  => 'mehndi_tattoo_artist_service_section',
	    'type'     => 'dropdown-pages'
	));

	for($mehndi_tattoo_artist_i=1;$mehndi_tattoo_artist_i<=3;$mehndi_tattoo_artist_i++) {

	    $wp_customize->add_setting('mehndi_tattoo_artist_tab_icon'.$mehndi_tattoo_artist_i,array(
			'default'	=> 'fas fa-arrow-right',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control(new Mehndi_Tattoo_Artist_Icon_Changer(
	        $wp_customize,'mehndi_tattoo_artist_tab_icon'.$mehndi_tattoo_artist_i,array(
			'label'	=> __('Services Icon','mehndi-tattoo-artist').$mehndi_tattoo_artist_i,
			'transport' => 'refresh',
			'section'	=> 'mehndi_tattoo_artist_service_section',
			'type'		=> 'icon'
		)));

	    $wp_customize->add_setting('mehndi_tattoo_artist_tab_heading'.$mehndi_tattoo_artist_i,array(
	        'default'=> '',
	        'sanitize_callback' => 'sanitize_text_field'
	    ));
	    $wp_customize->add_control('mehndi_tattoo_artist_tab_heading'.$mehndi_tattoo_artist_i,array(
	        'label' => __('Service Title ','mehndi-tattoo-artist').$mehndi_tattoo_artist_i,
	        'section'=> 'mehndi_tattoo_artist_service_section',
	        'setting'=> 'mehndi_tattoo_artist_tab_heading'.$mehndi_tattoo_artist_i,
	        'type'=> 'text'
	    ));
  	}

  $wp_customize->add_setting('mehndi_tattoo_artist_abt_button',array(
		'default'=> 'Learn More About Us',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_abt_button',array(
		'label'	=> __('About Button Text','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_service_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('mehndi_tattoo_artist_abt_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_abt_link',array(
		'label'	=> __('About Button Link','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_service_section',
		'type'=> 'url'
	));

	$wp_customize->add_setting('mehndi_tattoo_artist_designer_photo',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'mehndi_tattoo_artist_designer_photo',array(
	    'label' => __('Add Designer Photo','mehndi-tattoo-artist'),
	     'section' => 'mehndi_tattoo_artist_service_section'
	)));

	$wp_customize->add_setting('mehndi_tattoo_artist_designer_sign',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'mehndi_tattoo_artist_designer_sign',array(
	    'label' => __('Add Designer Signiture','mehndi-tattoo-artist'),
	     'section' => 'mehndi_tattoo_artist_service_section'
	)));

	$wp_customize->add_setting('mehndi_tattoo_artist_design_artist_name',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_design_artist_name',array(
		'label'	=> __('Add Design Artist Name','mehndi-tattoo-artist'),
		'section'	=> 'mehndi_tattoo_artist_service_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('mehndi_tattoo_artist_design_artist_experience',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_design_artist_experience',array(
		'label'	=> __('Add Design Artist Experience','mehndi-tattoo-artist'),
		'section'	=> 'mehndi_tattoo_artist_service_section',
		'type'		=> 'text'
	));

	//footer
	$wp_customize->add_section('mehndi_tattoo_artist_footer_section',array(
		'title'	=> __('Footer Text','mehndi-tattoo-artist'),
		'description'	=> __('Add copyright text.','mehndi-tattoo-artist'),
		'panel' => 'mehndi_tattoo_artist_panel_id',
		'priority' => 7,
	));
	$wp_customize->add_setting('mehndi_tattoo_artist_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_footer_text',array(
		'label'	=> __('Copyright Text','mehndi-tattoo-artist'),
		'section'	=> 'mehndi_tattoo_artist_footer_section',
		'type'		=> 'text'
	));
	// footer columns
	$wp_customize->add_setting('mehndi_tattoo_artist_footer_columns',array(
		'default'	=> 4,
		'sanitize_callback'	=> 'mehndi_tattoo_artist_sanitize_number_absint'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_footer_columns',array(
		'label'	=> __('Footer Widget Columns','mehndi-tattoo-artist'),
		'section'	=> 'mehndi_tattoo_artist_footer_section',
		'setting'	=> 'mehndi_tattoo_artist_footer_columns',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 4,
		),
	));
	$wp_customize->add_setting( 'mehndi_tattoo_artist_tp_footer_bg_color_option', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mehndi_tattoo_artist_tp_footer_bg_color_option', array(
			'label'     => __('Footer Widget Background Color', 'mehndi-tattoo-artist'),
			'description' => __('It will change the complete footer widget backgorund color.', 'mehndi-tattoo-artist'),
			'section' => 'mehndi_tattoo_artist_footer_section',
			'settings' => 'mehndi_tattoo_artist_tp_footer_bg_color_option',
	)));
	$wp_customize->add_setting('mehndi_tattoo_artist_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'mehndi_tattoo_artist_footer_widget_image',array(
        'label' => __('Footer Widget Background Image','mehndi-tattoo-artist'),
         'section' => 'mehndi_tattoo_artist_footer_section'
	)));
	$wp_customize->add_setting( 'mehndi_tattoo_artist_return_to_header', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_return_to_header', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'mehndi-tattoo-artist' ),
		'section'     => 'mehndi_tattoo_artist_footer_section',
		'type'        => 'toggle',
		'settings'    => 'mehndi_tattoo_artist_return_to_header',
	) ) );
    $wp_customize->add_setting('mehndi_tattoo_artist_scroll_top_icon',array(
	  'default'	=> 'fas fa-arrow-up',
	  'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Mehndi_Tattoo_Artist_Icon_Changer(
	        $wp_customize,'mehndi_tattoo_artist_scroll_top_icon',array(
		'label'	=> __('Scroll to top Icon','mehndi-tattoo-artist'),
		'transport' => 'refresh',
		'section'	=> 'mehndi_tattoo_artist_footer_section',
			'type'		=> 'icon'
	)));

    // Add Settings and Controls for Scroll top
	$wp_customize->add_setting('mehndi_tattoo_artist_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_choices'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_scroll_top_position',array(
        'type' => 'radio',
        'label'     => __('Scroll to top Position', 'mehndi-tattoo-artist'),
        'description'   => __('This option work for scroll to top', 'mehndi-tattoo-artist'),
       'section' => 'mehndi_tattoo_artist_footer_section',
       'choices' => array(
            'Right' => __('Right','mehndi-tattoo-artist'),
            'Left' => __('Left','mehndi-tattoo-artist'),
            'Center' => __('Center','mehndi-tattoo-artist')
     ),
	) );
	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'Mehndi_Tattoo_Artist_Customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'Mehndi_Tattoo_Artist_Customize_partial_blogdescription',
	) );

	//Mobile Respnsive
	$wp_customize->add_section('mehndi_tattoo_artist_mobile_media_option',array(
		'title'         => __('Mobile Responsive media', 'mehndi-tattoo-artist'),
		'description' => __('Control will not function if the toggle in the main settings is off.', 'mehndi-tattoo-artist'),
		'priority' => 8,
		'panel' => 'mehndi_tattoo_artist_panel_id'
	) );
	$wp_customize->add_setting( 'mehndi_tattoo_artist_return_to_header_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_return_to_header_mob', array(
		'label'       => esc_html__( 'Show / Hide Return to header', 'mehndi-tattoo-artist' ),
		'section'     => 'mehndi_tattoo_artist_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'mehndi_tattoo_artist_return_to_header_mob',
	) ) );
	$wp_customize->add_setting( 'mehndi_tattoo_artist_related_post_mob', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_related_post_mob', array(
		'label'       => esc_html__( 'Show / Hide Related Post', 'mehndi-tattoo-artist' ),
		'section'     => 'mehndi_tattoo_artist_mobile_media_option',
		'type'        => 'toggle',
		'settings'    => 'mehndi_tattoo_artist_related_post_mob',
	) ) );

	//Site Identity
	$wp_customize->add_setting( 'mehndi_tattoo_artist_site_title', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_site_title', array(
		'label'       => esc_html__( 'Show / Hide Site Title', 'mehndi-tattoo-artist' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'mehndi_tattoo_artist_site_title',
	) ) );
	$wp_customize->add_setting('mehndi_tattoo_artist_site_title_font_size',array(
		'default'	=> 25,
		'sanitize_callback'	=> 'mehndi_tattoo_artist_sanitize_number_absint'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_site_title_font_size',array(
		'label'	=> __('Site Title Font Size in PX','mehndi-tattoo-artist'),
		'section'	=> 'title_tagline',
		'setting'	=> 'mehndi_tattoo_artist_site_title_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 80,
		),
	));
	$wp_customize->add_setting( 'mehndi_tattoo_artist_site_tagline', array(
	    'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_site_tagline', array(
		'label'       => esc_html__( 'Show / Hide Site Tagline', 'mehndi-tattoo-artist' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'mehndi_tattoo_artist_site_tagline',
	) ) );

	// logo site tagline size
	$wp_customize->add_setting('mehndi_tattoo_artist_site_tagline_font_size',array(
		'default'	=> 15,
		'sanitize_callback'	=> 'mehndi_tattoo_artist_sanitize_number_absint'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_site_tagline_font_size',array(
		'label'	=> __('Site Tagline Font Size in PX','mehndi-tattoo-artist'),
		'section'	=> 'title_tagline',
	    'setting'	=> 'mehndi_tattoo_artist_site_tagline_font_size',
		'type'	=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	));
    $wp_customize->add_setting('mehndi_tattoo_artist_logo_width',array(
		'default' => 50,
		'sanitize_callback'	=> 'mehndi_tattoo_artist_sanitize_number_absint'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_logo_width',array(
		'label'	=> esc_html__('Here You Can Customize Your Logo Size','mehndi-tattoo-artist'),
		'section'	=> 'title_tagline',
		'type'		=> 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 150,
		),
	));

	//Woo Coomerce
	$wp_customize->add_setting('mehndi_tattoo_artist_per_columns',array(
		'default'=> 3,
		'sanitize_callback'	=> 'mehndi_tattoo_artist_sanitize_number_absint'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_per_columns',array(
		'label'	=> __('Product Per Row','mehndi-tattoo-artist'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));
	$wp_customize->add_setting('mehndi_tattoo_artist_product_per_page',array(
		'default'=> 9,
		'sanitize_callback'	=> 'mehndi_tattoo_artist_sanitize_number_absint'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_product_per_page',array(
		'label'	=> __('Product Per Page','mehndi-tattoo-artist'),
		'section'=> 'woocommerce_product_catalog',
		'type'=> 'number'
	));
   	$wp_customize->add_setting( 'mehndi_tattoo_artist_product_sidebar', array(
		 'default'           => true,
		 'transport'         => 'refresh',
		 'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Shop Page Sidebar', 'mehndi-tattoo-artist' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'mehndi_tattoo_artist_product_sidebar',
	) ) );

	$wp_customize->add_setting( 'mehndi_tattoo_artist_single_product_sidebar', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_single_product_sidebar', array(
		'label'       => esc_html__( 'Show / Hide Product Page Sidebar', 'mehndi-tattoo-artist' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'mehndi_tattoo_artist_single_product_sidebar',
	) ) );
	$wp_customize->add_setting( 'mehndi_tattoo_artist_related_product', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'mehndi_tattoo_artist_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Mehndi_Tattoo_Artist_Toggle_Control( $wp_customize, 'mehndi_tattoo_artist_related_product', array(
		'label'       => esc_html__( 'Show / Hide related product', 'mehndi-tattoo-artist' ),
		'section'     => 'woocommerce_product_catalog',
		'type'        => 'toggle',
		'settings'    => 'mehndi_tattoo_artist_related_product',
	) ) );
	// 404 PAGE
	$wp_customize->add_section('mehndi_tattoo_artist_404_page_section',array(
		'title'         => __('404 Page', 'mehndi-tattoo-artist'),
		'description'   => 'Here you can customize 404 Page content.',
	) );
	$wp_customize->add_setting('mehndi_tattoo_artist_not_found_title',array(
		'default'=> __('Oops! That page cant be found.','mehndi-tattoo-artist'),
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('mehndi_tattoo_artist_not_found_title',array(
		'label'	=> __('Edit Title','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_404_page_section',
		'type'=> 'text',
	));
	$wp_customize->add_setting('mehndi_tattoo_artist_not_found_text',array(
		'default'=> __('It looks like nothing was found at this location. Maybe try a search?','mehndi-tattoo-artist'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('mehndi_tattoo_artist_not_found_text',array(
		'label'	=> __('Edit Text','mehndi-tattoo-artist'),
		'section'=> 'mehndi_tattoo_artist_404_page_section',
		'type'=> 'text'
	));

}
add_action( 'customize_register', 'Mehndi_Tattoo_Artist_Customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Mehndi Tattoo Artist 1.0
 * @see Mehndi_Tattoo_Artist_Customize_register()
 *
 * @return void
 */
function Mehndi_Tattoo_Artist_Customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Mehndi Tattoo Artist 1.0
 * @see Mehndi_Tattoo_Artist_Customize_register()
 *
 * @return void
 */
function Mehndi_Tattoo_Artist_Customize_partial_blogdescription() {
	bloginfo( 'description' );
}

if ( ! defined( 'MEHNDI_TATTOO_ARTIST_PRO_THEME_NAME' ) ) {
	define( 'MEHNDI_TATTOO_ARTIST_PRO_THEME_NAME', esc_html__( 'Mehndi Tattoo Artist Pro', 'mehndi-tattoo-artist' ));
}
if ( ! defined( 'MEHNDI_TATTOO_ARTIST_PRO_THEME_URL' ) ) {
	define( 'MEHNDI_TATTOO_ARTIST_PRO_THEME_URL', esc_url('https://www.themespride.com/products/mehndi-artist-wordpress-theme'));
}
if ( ! defined( 'MEHNDI_TATTOO_ARTIST_DOCS_URL' ) ) {
	define( 'MEHNDI_TATTOO_ARTIST_DOCS_URL', esc_url('https://page.themespride.com/demo/docs/mehndi-tattoo-artist/'));
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Mehndi_Tattoo_Artist_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Mehndi_Tattoo_Artist_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Mehndi_Tattoo_Artist_Customize_Section_Pro(
				$manager,
				'mehndi_tattoo_artist_section_pro',
				array(
					'priority'   => 9,
					'title'    => MEHNDI_TATTOO_ARTIST_PRO_THEME_NAME,
					'pro_text' => esc_html__( 'Upgrade Pro', 'mehndi-tattoo-artist' ),
					'pro_url'  => esc_url( MEHNDI_TATTOO_ARTIST_PRO_THEME_URL, 'mehndi-tattoo-artist' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'mehndi-tattoo-artist-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'mehndi-tattoo-artist-customize-controls', trailingslashit( esc_url( get_template_directory_uri() ) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Mehndi_Tattoo_Artist_Customize::get_instance();
