<?php

function register_departmentos_type(){
    $labels = array(
        'name'               => _x('Departamentos', 'Genesis'),
        'singular_name'      => _x( 'Departamento', 'Genesis' ),
		'add_new'            => __( 'Añadir nuevo','Genesis'),
		'add_new_item'       => __( 'Nuevo departamento','Genesis'),
		'edit_item'          => __( 'Editar departamento','Genesis' ),
		'new_item'           => __( 'Nuevo departamento','Genesis' ),
		'all_items'          => __( 'Todos los departamentos','Genesis' ),
		'view_item'          => __( 'Ver departamento','Genesis'),
		'search_items'       => __( 'Buscar departamento','Genesis'),
		'not_found'          => __( 'No encontrado!','Genesis' ),
		'not_found_in_trash' => __( 'No encontrado en la papelera','Genesis' ),
		'parent_item_colon'  => '',
        'menu_name'          => __('Departamentos','Genesis')
    );

    $args = array(
		'labels'             => $labels,
		'public'             => true,
		'show_ui'            => true,
		'publicly_queryable' => true,
		'rewrite'            => array( 'slug' => 'departamento' ),
		'has_archive'        => true,
		'capability_type'    => 'post',
		'menu_icon'          => 'dashicons-building',
		'can_export'         => true,
		'menu_position'      => 2,
		'supports'           => array('title','editor','author','thumbnail','excerpt','custom-fields','revisions')
	);
	register_post_type( 'departamento', $args );
}


/*
**** TAXONOMY categorias-departamentos ****
*/
function taxonomia_departamentos_category() {
	register_taxonomy( 'categorias-ubicaciones',
	array (0 => 'departamento'),
	array(
		'hierarchical'      => true,
		'label'             => __('Ubicaciones','Genesis'),
		'show_ui'           => true,
		'query_var'         => true,
		'show_admin_column' => true,
		'labels'            => array (
			'search_items'               => __('Buscar categorías','Genesis'),
			'popular_items'              => __('Más populares','Genesis'),
			'all_items'                  => __('Todas','Genesis'),
			'parent_item'                => __('Superior','Genesis'),
			'parent_item_colon'          => __('Categoría superior','Genesis'),
			'edit_item'                  => __('Editar categoría','Genesis'),
			'update_item'                => __('Actualizar categoría','Genesis'),
			'add_new_item'               => __('Añadir nueva categoría','Genesis'),
			'new_item_name'              => __('Nueva categoría','Genesis'),
			'separate_items_with_commas' => __('Separar por comas','Genesis'),
			'add_or_remove_items'        => __('Añadir o borrar','Genesis'),
			'choose_from_most_used'      => __('Elegir de las más usadas','Genesis'),
		)
	) );


	register_taxonomy( 'categorias-desarrollos',
	array (0 => 'departamento'),
	array(
		'hierarchical'      => true,
		'label'             => __('Desarrollos','Genesis'),
		'show_ui'           => true,
		'query_var'         => true,
		'show_admin_column' => true,
		'labels'            => array (
			'search_items'               => __('Buscar categorías','Genesis'),
			'popular_items'              => __('Más populares','Genesis'),
			'all_items'                  => __('Todas','Genesis'),
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => __('Editar categoría','Genesis'),
			'update_item'                => __('Actualizar categoría','Genesis'),
			'add_new_item'               => __('Añadir nueva categoría','Genesis'),
			'new_item_name'              => __('Nueva categoría','Genesis'),
			'separate_items_with_commas' => __('Separar por comas','Genesis'),
			'add_or_remove_items'        => __('Añadir o borrar','Genesis'),
			'choose_from_most_used'      => __('Elegir de las más usadas','Genesis'),
		)
	) );
}

add_action( 'init', 'register_departmentos_type' );
add_action( 'init', 'taxonomia_departamentos_category');
