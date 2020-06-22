<?php

include "includes/function-departments.php";

if ( ! isset ( $content_width) )
$content_width = 800;

if ( ! function_exists( 'Genesis_setup' ) ) :
    function Genesis_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbnails' );
    }
endif;
add_action( 'after_setup_theme', 'Genesis_setup' );


function register_Genesis_menus(){

    register_nav_menus( array(
        'Header'   => __( 'Header Menu', 'Genesis' ),
        'Footer' => __( 'Footer Menu', 'Genesis' )
    ) );
}

add_action('init', 'register_Genesis_menus');

function Genesis_setup_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
    }
add_action( 'after_setup_theme', 'Genesis_setup_custom_logo_setup' );

function add_theme_scripts() {


    wp_enqueue_style( 'general', get_template_directory_uri() . '/css/general.css', array(), filemtime( get_stylesheet_directory() . '/css/general.css' ), 'all');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1.1', 'all');

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);
    wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/custom.js' ), false);

    if(is_page_template('page-home.php')):
        wp_enqueue_style( 'page-home', get_template_directory_uri() . '/css/page-home.css', array(), filemtime( get_stylesheet_directory() . '/css/page-home.css' ), 'all');
    endif;

    if(is_page_template('page-comparacion.php')):
        wp_enqueue_style( 'page-comparacion', get_template_directory_uri() . '/css/page-comparacion.css', array(), filemtime( get_stylesheet_directory() . '/css/page-comparacion.css' ), 'all');
    endif;

    if(is_page_template('page-proyecto.php') || is_page_template('page-proyecto-resultado.php')):
        wp_enqueue_style( 'page-proyecto', get_template_directory_uri() . '/css/page-proyecto.css', array(), filemtime( get_stylesheet_directory() . '/css/page-proyecto.css' ), 'all');
        wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/owl.carousel.min.js' ), false);
        wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), filemtime( get_stylesheet_directory() . '/css/owl.carousel.min.css' ), 'all');
        wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), filemtime( get_stylesheet_directory() . '/css/owl.theme.default.min.css' ), 'all');
        // wp_enqueue_script('headerjs', get_template_directory_uri().'/js/header.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/header.js' ), false);
    endif;

    if(is_page_template('page-desarrollos.php')):
        wp_enqueue_style( 'page-desarrollos', get_template_directory_uri() . '/css/page-desarrollos.css', array(), filemtime( get_stylesheet_directory() . '/css/page-desarrollos.css' ), 'all');
        wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/owl.carousel.min.js' ), false);
        wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), filemtime( get_stylesheet_directory() . '/css/owl.carousel.min.css' ), 'all');
        wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), filemtime( get_stylesheet_directory() . '/css/owl.theme.default.min.css' ), 'all');
    endif;

    if(is_page_template('page-quienessomos.php')):
        wp_enqueue_style( 'page-home', get_template_directory_uri() . '/css/page-home.css', array(), filemtime( get_stylesheet_directory() . '/css/page-home.css' ), 'all');
        wp_enqueue_style( 'page-quienessomos', get_template_directory_uri() . '/css/page-quienessomos.css', array(), filemtime( get_stylesheet_directory() . '/css/page-quienessomos.css' ), 'all');
        wp_enqueue_script('headerjs', get_template_directory_uri().'/js/header.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/header.js' ), false);
    endif;

  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function wpb_widgets_init() {

    register_sidebar( array(
        'name' =>__( 'Header Right', 'wpb'),
        'id' => 'header-right',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Columna 1', 'wpb' ),
        'id' => 'fcolumn-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Footer Columna 2', 'wpb'),
        'id' => 'fcolumn-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Footer Columna 3', 'wpb'),
        'id' => 'fcolumn-3',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Footer Columna 4', 'wpb'),
        'id' => 'fcolumn-4',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );


    register_sidebar( array(
        'name' =>__( 'Footer Columna 5', 'wpb'),
        'id' => 'fcolumn-5',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );



}
add_action( 'widgets_init', 'wpb_widgets_init' );
