<?php

// Imports
include "includes/function-departments.php";
include "includes/search-department.php";

// Images Sizes
if ( ! function_exists( 'Genesis_setup' ) ) :
    function Genesis_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'project-image', 445, 238, true );
        add_image_size( 'result-image', 528, 560, true);
        add_image_size( 'gallery-size', 370, 278, true );
        add_image_size( 'carrusel-size', 995, 746, true );
        add_image_size( 'member-size', 180, 180, true );
        add_image_size( 'visitalo-size', 660, 290, true );
    }
endif;
add_action( 'after_setup_theme', 'Genesis_setup' );

// Menu
function register_Genesis_menus(){

    register_nav_menus( array(
        'Header'   => __( 'Header Menu', 'Genesis' ),
        'Footer' => __( 'Footer Menu', 'Genesis' )
    ) );
}

add_action('init', 'register_Genesis_menus');

// Setup
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

    // Generales
    wp_enqueue_style( 'general', get_template_directory_uri() . '/css/general.css', array(), filemtime( get_stylesheet_directory() . '/css/general.css' ), 'all');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1.1', 'all');
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);
    wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/custom.js' ), false);
    wp_enqueue_script('search', get_template_directory_uri().'/js/search.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/search.js' ), false);
    wp_enqueue_script('headerjs', get_template_directory_uri().'/js/header.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/header.js' ), false);

    // Home
    if(is_page_template('page-home.php')):
        wp_enqueue_style( 'page-home', get_template_directory_uri() . '/css/page-home.css', array(), filemtime( get_stylesheet_directory() . '/css/page-home.css' ), 'all');
        wp_enqueue_style( 'map', get_template_directory_uri() . '/css/map.css', array(), filemtime( get_stylesheet_directory() . '/css/map.css' ), 'all');

        // Slider
        wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/owl.carousel.min.js' ), false);
        wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), filemtime( get_stylesheet_directory() . '/css/owl.carousel.min.css' ), 'all');
        wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), filemtime( get_stylesheet_directory() . '/css/owl.theme.default.min.css' ), 'all');

        // Script
        wp_enqueue_script('map', get_template_directory_uri().'/js/map.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/map.js' ), false);
    endif;


    // Departamento
    if(is_page_template('page-proyecto.php') || is_page_template('page-proyecto-resultado.php') || get_post_type() === 'departamento' ) :

        wp_enqueue_style( 'page-proyecto', get_template_directory_uri() . '/css/page-proyecto.css', array(), filemtime( get_stylesheet_directory() . '/css/page-proyecto.css' ), 'all');
        wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/owl.carousel.min.js' ), false);
        wp_enqueue_script('owl.carousel.thumbs.min', get_template_directory_uri().'/js/owl.carousel.thumbs.min.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/owl.carousel.thumbs.min.js' ), false);
        wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), filemtime( get_stylesheet_directory() . '/css/owl.carousel.min.css' ), 'all');
        wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), filemtime( get_stylesheet_directory() . '/css/owl.theme.default.min.css' ), 'all');

    endif;

    // desarrollos
    if(is_page_template('page-desarrollos.php') || is_archive()):
        wp_enqueue_style( 'page-desarrollos', get_template_directory_uri() . '/css/page-desarrollos.css', array(), filemtime( get_stylesheet_directory() . '/css/page-desarrollos.css' ), 'all');
        wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/owl.carousel.min.js' ), false);
        wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), filemtime( get_stylesheet_directory() . '/css/owl.carousel.min.css' ), 'all');
        wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), filemtime( get_stylesheet_directory() . '/css/owl.theme.default.min.css' ), 'all');
    endif;

    // Quienes somos
    if(is_page_template('page-quienessomos.php')):
        wp_enqueue_style( 'page-home', get_template_directory_uri() . '/css/page-home.css', array(), filemtime( get_stylesheet_directory() . '/css/page-home.css' ), 'all');
        wp_enqueue_style( 'page-quienessomos', get_template_directory_uri() . '/css/page-quienessomos.css', array(), filemtime( get_stylesheet_directory() . '/css/page-quienessomos.css' ), 'all');

    endif;

    // contacto
    if(is_page_template('page-contacto.php')):
        wp_enqueue_style( 'page-contacto', get_template_directory_uri() . '/css/page-contacto.css', array(), filemtime( get_stylesheet_directory() . '/css/page-contacto.css' ), 'all');
    endif;

    if(is_404()):
        wp_enqueue_style( '404', get_template_directory_uri() . '/css/404.css', array(), filemtime( get_stylesheet_directory() . '/css/404.css' ), 'all');
    endif;

    if( is_user_logged_in()):
        // echo"<style>@media screen and (min-width: 991px) {header {top: 31px !important;}}@media screen and (min-width: 1280px) {header {top: 31px !important;}}</style>";
    endif;

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// Hide unnecesary fields
function wpse344725_taxonomy_css() {
    global $taxonomy;
    $modified_tax_arr = array( 'categorias-desarrollos' );
    if( empty( $taxonomy ) || ! in_array( $taxonomy, $modified_tax_arr ) ) {
        return;
    }

   echo'<style>.form-field.term-slug-wrap,.form-field.term-parent-wrap,.form-field.term-description-wrap {display: none;}</style>';
}
add_action( 'admin_head', 'wpse344725_taxonomy_css' );

// widgets
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
        'before_widget' => '<div id="%1$s" class="widget %2$s footer-text">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Footer Columna 2', 'wpb'),
        'id' => 'fcolumn-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s footer-text">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Footer Columna 3', 'wpb'),
        'id' => 'fcolumn-3',
        'before_widget' => '<div id="%1$s" class="widget %2$s footer-menu footer-text">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Footer Columna 4', 'wpb'),
        'id' => 'fcolumn-4',
        'before_widget' => '<div id="%1$s" class="widget %2$s footer-text">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-title">',
        'after_title' => '</h3>',
    ) );


    register_sidebar( array(
        'name' =>__( 'Footer Columna 5', 'wpb'),
        'id' => 'fcolumn-5',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-title">',
        'after_title' => '</h3>',
    ) );


    register_sidebar( array(
        'name' =>__( 'Footer Bottom', 'wpb'),
        'id' => 'fbottom',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );

// Registros de Postype = Miembors
function register_miembros_type(){
    $labels = array(
        'name'               => _x('Miembros', 'Genesis'),
        'singular_name'      => _x( 'Miembro', 'Genesis' ),
		'add_new'            => __( 'Añadir nuevo','Genesis'),
		'add_new_item'       => __( 'Nuevo Miembro','Genesis'),
		'edit_item'          => __( 'Editar Miembro','Genesis' ),
		'new_item'           => __( 'Nuevo Miembro','Genesis' ),
		'all_items'          => __( 'Todos los Miembros','Genesis' ),
		'view_item'          => __( 'Ver Miembro','Genesis'),
		'search_items'       => __( 'Buscar Miembro','Genesis'),
		'not_found'          => __( 'No encontrado!','Genesis' ),
		'not_found_in_trash' => __( 'No encontrado en la papelera','Genesis' ),
		'parent_item_colon'  => '',
        'menu_name'          => __('Miembros','Genesis')
    );

    $args = array(
		'labels'             => $labels,
		'public'             => true,
		'show_ui'            => true,
		'publicly_queryable' => true,
		'rewrite'            => array( 'slug' => 'departamento' ),
		'has_archive'        => true,
		'capability_type'    => 'post',
		'menu_icon'          => 'dashicons-groups',
		'can_export'         => true,
		'menu_position'      =>2,
		'supports'           => array('title','editor','author','thumbnail','excerpt','custom-fields','revisions')
	);
	register_post_type( 'miembros', $args );
}
add_action( 'init', 'register_miembros_type' );
