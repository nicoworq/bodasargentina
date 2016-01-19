<?php


function custom_post_type_presupuesto() {

    $labels = array(
        'name' => _x('Presupuestos', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Presupuesto', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Presupuestos', 'text_domain'),
        'name_admin_bar' => __('Presupuestos', 'text_domain'),
        'parent_item_colon' => __('Parent Item:', 'text_domain'),
        'all_items' => __('Todos los Presupuestos', 'text_domain'),
        'add_new_item' => __('Agregar Presupuesto', 'text_domain'),
        'add_new' => __('Agregar', 'text_domain'),
        'new_item' => __('Nuevo Presupuesto', 'text_domain'),
        'edit_item' => __('Editar Presupuesto', 'text_domain'),
        'update_item' => __('Actualizar Presupuesto', 'text_domain'),
        'view_item' => __('Ver Presupuesto', 'text_domain'),
        'search_items' => __('Buscar Presupuesto', 'text_domain'),
        'not_found' => __('No encontrado', 'text_domain'),
        'not_found_in_trash' => __('No encontrado', 'text_domain'),
    );
    $args = array(
        'label' => __('Presupuesto', 'text_domain'),
        'description' => __('Presupuestos', 'text_domain'),
        'labels' => $labels,
        'supports' => array(),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-clipboard',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('presupuesto', $args);
}

add_action('init', 'custom_post_type_presupuesto', 0);

// Register Custom Post Type
function custom_post_type_bodas_reales() {

    $labels = array(
        'name' => _x('Bodas Reales', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Boda Real', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Bodas Reales', 'text_domain'),
        'name_admin_bar' => __('Bodas Reales', 'text_domain'),
        'parent_item_colon' => __('Parent Item:', 'text_domain'),
        'all_items' => __('Todas', 'text_domain'),
        'add_new_item' => __('Agregar', 'text_domain'),
        'add_new' => __('Agregar Nueva', 'text_domain'),
        'new_item' => __('Nuevo', 'text_domain'),
        'edit_item' => __('Editar', 'text_domain'),
        'update_item' => __('Actualizar', 'text_domain'),
        'view_item' => __('Ver', 'text_domain'),
        'search_items' => __('Buscar', 'text_domain'),
        'not_found' => __('No encontrado', 'text_domain'),
        'not_found_in_trash' => __('No encontrado', 'text_domain'),
        'items_list' => __('Lista', 'text_domain'),
        'items_list_navigation' => __('Navegacion ', 'text_domain'),
        'filter_items_list' => __('Filtro', 'text_domain'),
    );
    $args = array(
        'label' => __('Boda Real', 'text_domain'),
        'description' => __('Bodas Reales', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'hierarchical' => false,
        'public' => true,
        'taxonomies' => array('category', 'post_tag'),
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-palmtree',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('bodas-reales', $args);
}

add_action('init', 'custom_post_type_bodas_reales', 0);

// Register Custom Post Type
function custom_post_slide_home() {

    $labels = array(
        'name' => _x('Slides Home', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Slide Home', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Slides Home', 'text_domain'),
        'name_admin_bar' => __('Slides Home', 'text_domain'),
        'archives' => __('Item Archives', 'text_domain'),
        'parent_item_colon' => __('Parent Item:', 'text_domain'),
        'all_items' => __('Todos', 'text_domain'),
        'add_new_item' => __('Agregar Nuevo Slide', 'text_domain'),
        'add_new' => __('Agregar Nuevo', 'text_domain'),
        'new_item' => __('Nuevo Slide', 'text_domain'),
        'edit_item' => __('Editar Slide', 'text_domain'),
        'update_item' => __('Actualizar Slide', 'text_domain'),
        'view_item' => __('Ver Slide', 'text_domain'),
        'search_items' => __('Buscar Slide', 'text_domain'),
        'not_found' => __('No encontrado', 'text_domain'),
        'not_found_in_trash' => __('No encontrado en Papelera', 'text_domain'),
        'featured_image' => __('Imagen Destacada', 'text_domain'),
        'set_featured_image' => __('Ver Imagen Destacada', 'text_domain'),
        'remove_featured_image' => __('Remover Imagen Destacada', 'text_domain'),
        'use_featured_image' => __('Usar como imagen destacada', 'text_domain'),
        'insert_into_item' => __('Insert into item', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
        'items_list' => __('Items list', 'text_domain'),
        'items_list_navigation' => __('Items list navigation', 'text_domain'),
        'filter_items_list' => __('Filter items list', 'text_domain'),
    );
    $args = array(
        'label' => __('Slide Home', 'text_domain'),
        'description' => __('Slides de la Home', 'text_domain'),
        'labels' => $labels,
        'supports' => array(),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-images-alt2',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('slide_home', $args);
}

add_action('init', 'custom_post_slide_home', 0);



// Register Custom Post Type
function custom_post_type_concursos() {

	$labels = array(
		'name'                  => _x( 'Concursos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Concurso', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Concursos', 'text_domain' ),
		'name_admin_bar'        => __( 'Concursos', 'text_domain' ),
		'archives'              => __( 'Archivo Concurso', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todos los Concursos', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nuevo Concurso', 'text_domain' ),
		'add_new'               => __( 'Agregar nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo Concurso', 'text_domain' ),
		'edit_item'             => __( 'Editar Concurso', 'text_domain' ),
		'update_item'           => __( 'Actualizar Concurso', 'text_domain' ),
		'view_item'             => __( 'Ver Concurso', 'text_domain' ),
		'search_items'          => __( 'Buscar Concurso', 'text_domain' ),
		'not_found'             => __( 'Concurso no encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Concurso no encontrado en papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Setear Imagen Destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar Imagen Destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como Imagen Destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Concurso', 'text_domain' ),
		'description'           => __( 'Concursos ', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'concursos', $args );

}
add_action( 'init', 'custom_post_type_concursos', 0 );
