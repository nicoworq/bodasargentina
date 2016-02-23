<?php

/**
 * BodasArgentinas functions and definitions
 *
 * @package BodasArgentinas
 */
if (!function_exists('bodasargentinas_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function bodasargentinas_setup() {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on BodasArgentinas, use a find and replace
         * to change 'bodasargentinas' to the name of your theme in all the template files
         */
        load_theme_textdomain('bodasargentinas', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary Menu', 'bodasargentinas'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ));

        /*
         * Enable support for Post Formats.
         * See http://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', array(
            'aside', 'image', 'video', 'quote', 'link',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('bodasargentinas_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }

endif; // bodasargentinas_setup
add_action('after_setup_theme', 'bodasargentinas_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bodasargentinas_content_width() {
    $GLOBALS['content_width'] = apply_filters('bodasargentinas_content_width', 640);
}

add_action('after_setup_theme', 'bodasargentinas_content_width', 0);

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function bodasargentinas_widgets_init() {
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'bodasargentinas'),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
}

add_action('widgets_init', 'bodasargentinas_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function bodasargentinas_scripts() {
    wp_enqueue_style('bodasargentinas-reset', get_stylesheet_uri());

    wp_enqueue_style('bodasargentinas-style', get_template_directory_uri() . '/css/estilosBodas.css');

    wp_enqueue_style('bodasargentinas-pluginscss', get_template_directory_uri() . '/css/externalCss.css');



    wp_enqueue_script('bodasargentinas-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true);

    wp_enqueue_script('bodasargentinas-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20150527', true);

    wp_enqueue_script('bodasargentinas-plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '20150527', true);

    wp_enqueue_script('bodasargentinas-scripts', get_template_directory_uri() . '/js/scriptsBodas.js', array('jquery'), '20150527', true);



    wp_enqueue_script('bodasargentinas-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20150527', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'bodasargentinas_scripts');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Register Custom Post Type
function custom_post_type_fotografos() {

    $labels = array(
        'name' => _x('Fotografos', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Fotografo', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Fotografos', 'text_domain'),
        'name_admin_bar' => __('Fotografos', 'text_domain'),
        'parent_item_colon' => __('Parent Item:', 'text_domain'),
        'all_items' => __('Todos los Fotografos', 'text_domain'),
        'add_new_item' => __('Agregar Fotografos', 'text_domain'),
        'add_new' => __('Agregar', 'text_domain'),
        'new_item' => __('Nuevo Fotografo', 'text_domain'),
        'edit_item' => __('Editar Fotografo', 'text_domain'),
        'update_item' => __('Actualizar Fotografo', 'text_domain'),
        'view_item' => __('Ver Fotografo', 'text_domain'),
        'search_items' => __('Buscar Fotografo', 'text_domain'),
        'not_found' => __('No encontrado', 'text_domain'),
        'not_found_in_trash' => __('No encontrado en papelera', 'text_domain'),
    );
    $args = array(
        'label' => __('Fotografo', 'text_domain'),
        'description' => __('Fotografos', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'author'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'taxonomies' => array('category',),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-camera',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => FALSE,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('fotografos', $args);
}

add_action('init', 'custom_post_type_fotografos', 0);

// Register Custom Post Type
function custom_post_type_galerias() {

    $labels = array(
        'name' => _x('Galerías', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Galería', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Galerías', 'text_domain'),
        'name_admin_bar' => __('Galerías', 'text_domain'),
        'parent_item_colon' => __('Parent Item:', 'text_domain'),
        'all_items' => __('Todas', 'text_domain'),
        'add_new_item' => __('Agregar Galería', 'text_domain'),
        'add_new' => __('Agregar nueva', 'text_domain'),
        'new_item' => __('Nueva Galería', 'text_domain'),
        'edit_item' => __('Editar Galería', 'text_domain'),
        'update_item' => __('Actualizar Galería', 'text_domain'),
        'view_item' => __('Ver Galería', 'text_domain'),
        'search_items' => __('Buscar Galería', 'text_domain'),
        'not_found' => __('No encontrada', 'text_domain'),
        'not_found_in_trash' => __('No encontrada en papelera', 'text_domain'),
        'items_list' => __('Items list', 'text_domain'),
        'items_list_navigation' => __('Items list navigation', 'text_domain'),
        'filter_items_list' => __('Filter items list', 'text_domain'),
    );
    $args = array(
        'label' => __('Galería', 'text_domain'),
        'description' => __('Galerías', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail',),
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
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('galerias', $args);
}

add_action('init', 'custom_post_type_galerias', 0);

// Register Custom Taxonomy
function custom_taxonomy_galerias() {

    $labels = array(
        'name' => _x('Categorías Galerias', 'Taxonomy General Name', 'text_domain'),
        'singular_name' => _x('Categoría Galerias', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name' => __('Categoría Galerias', 'text_domain'),
        'all_items' => __('Todas', 'text_domain'),
        'parent_item' => __('Padre', 'text_domain'),
        'parent_item_colon' => __('Padre:', 'text_domain'),
        'new_item_name' => __('Nueva Categoría Galerias', 'text_domain'),
        'add_new_item' => __('Agregar Categoría Galerias', 'text_domain'),
        'edit_item' => __('Editar Categoría Galerias', 'text_domain'),
        'update_item' => __('Actualizar Categoría Galerias', 'text_domain'),
        'view_item' => __('Ver Categoría Galerias', 'text_domain'),
        'separate_items_with_commas' => __('Separar con comas', 'text_domain'),
        'add_or_remove_items' => __('Agregar o quitar', 'text_domain'),
        'choose_from_most_used' => __('Elegir mas usadas', 'text_domain'),
        'popular_items' => __('Populares', 'text_domain'),
        'search_items' => __('Buscar Categorías', 'text_domain'),
        'not_found' => __('No encontrada', 'text_domain'),
        'items_list' => __('Lista galerias', 'text_domain'),
        'items_list_navigation' => __('Items list navigation', 'text_domain'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
    );
    register_taxonomy('categoria-galerias', array('galerias'), $args);
}

add_action('init', 'custom_taxonomy_galerias', 0);




// Register Custom Taxonomy
function premios_galeria() {

	$labels = array(
		'name'                       => _x( 'Premios Galerias', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Premio Galerias', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Premios Galerias', 'text_domain' ),
		'all_items'                  => __( 'Todos', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'Nuevo Premio', 'text_domain' ),
		'add_new_item'               => __( 'Agregar nuevo Premio', 'text_domain' ),
		'edit_item'                  => __( 'Editar Premio', 'text_domain' ),
		'update_item'                => __( 'Actualizar Premio', 'text_domain' ),
		'view_item'                  => __( 'Ver Premio', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Agregar o Remover Premios', 'text_domain' ),
		'choose_from_most_used'      => __( 'Elegir los mas usados', 'text_domain' ),
		'popular_items'              => __( 'Premios Populares', 'text_domain' ),
		'search_items'               => __( 'Buscar Premios', 'text_domain' ),
		'not_found'                  => __( 'No encontrado', 'text_domain' ),
		'no_terms'                   => __( 'No Premios', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'premio-galerias', array( 'galerias' ), $args );

}
add_action( 'init', 'premios_galeria', 0 );


function taxonomia_user() {
    register_taxonomy('usuario', 'fotografos', array(
        'hierarchical' => true, 'label' => 'Tipo de usuario',
        'query_var' => true, 'rewrite' => true));
}

add_action('init', 'taxonomia_user', 0);

function filter_search($query) {
    if (is_category()) {
        $query->set('post_type', array('post', 'fotografos', 'nav_menu_item'));
    }
    return $query;
}

add_filter('pre_get_posts', 'filter_search');



/*
 * ROLES
 */

$role = add_role('premium', 'Premium', array(
        ));

$role2 = add_role('standard', 'Standard', array(
        ));

function exclude_role($roles) {

    //Hide Defualt Roles
    if (isset($roles['author'])) {
        unset($roles['author']);
    }

    if (isset($roles['editor'])) {
        unset($roles['editor']);
    }

    if (isset($roles['subscriber'])) {
        unset($roles['subscriber']);
    }

    if (isset($roles['contributor'])) {
        unset($roles['contributor']);
    }

    return $roles;
}

add_filter('editable_roles', 'exclude_role');


/*
 *  PROFILE
 * 
 */

// Register User Contact Methods
function custom_user_contact_methods($user_contact_method) {

    $user_contact_method['correo'] = __('Correo electrónico (público):', 'text_domain');
    $user_contact_method['empresa'] = __('Empresa', 'text_domain');
    $user_contact_method['blog'] = __('Blog', 'text_domain');
    $user_contact_method['provincia'] = __('Provincia', 'text_domain');
    $user_contact_method['localidad'] = __('Localidad', 'text_domain');
    $user_contact_method['telefono'] = __('Télefono', 'text_domain');
    $user_contact_method['facebook'] = __('Facebook', 'text_domain');
    $user_contact_method['twitter'] = __('Twitter', 'text_domain');
    $user_contact_method['pinterest'] = __('Pinterest', 'text_domain');
    $user_contact_method['flickr'] = __('Flickr', 'text_domain');
    $user_contact_method['googleplus'] = __('Google+:', 'text_domain');
    $user_contact_method['instagram'] = __('Instagram:', 'text_domain');

    unset($user_contact_method['aim']);
    unset($user_contact_method['jabber']);
    unset($user_contact_method['yim']);
    unset($user_contact_method['description']);


    return $user_contact_method;
}

add_filter('user_contactmethods', 'custom_user_contact_methods');


/*
 * HELPERS
 */

function traer_categorias_provincia() {

    $categorias = array();

    $prem = get_category_by_slug('prem');
    $gral = get_category_by_slug('gral');

    $id_category = array($gral->term_id, $prem->term_id);

    foreach (get_categories() as $category) {

        if (!in_array($category->term_id, $id_category)) {
            $categorias[] = $category;
        }
    }
    return $categorias;
}

//excluir categorias prem y gral
function mt_categorias_post($id) {
    $seperator = ', ';

    $prem = get_category_by_slug('prem');
    $gral = get_category_by_slug('gral');

    $categorias = array();

    $id_category = array($gral->term_id, $prem->term_id);
    foreach ((get_the_category($id)) as $category) {
        if (!in_array($category->term_id, $id_category)) {
            $categorias[] = $category;
            $output.= '<a href="' . get_category_link($category->term_id) . '" title="' . esc_attr(sprintf(__("Ver todos los Fotógrafos en %s"), $category->name)) . '">' . $category->cat_name . '</a>' . $seperator;
        }
    }

    return trim($output, $seperator);
}

function fotografo_aplico($id_presupuesto) {

    $usuario_logueado = wp_get_current_user();
    $id_fotografo = $usuario_logueado->ID;

    $args = array(
        'author' => $id_fotografo,
        'post_type' => 'fotografos',
        'orderby' => 'post_date',
        'order' => 'ASC',
        'posts_per_page' => 1
    );

    $posts_fotografo = get_posts($args);

    $id_post_fotografo = $posts_fotografo[0]->ID;

    $ids_aplicantes = array();

    $aplicantes = get_field('fotografos_aplicaron', $id_presupuesto);

    if (!$aplicantes) {
        return FALSE;
    }

    foreach ($aplicantes as $aplicante) {
        $ids_aplicantes[] = $aplicante->ID;
    }

    if (in_array($id_post_fotografo, $ids_aplicantes)) {
        return TRUE;
    } else {
        return FALSE;
    }
}

// remove personal options block
if (is_admin()) {
    remove_action('admin_color_scheme_picker', 'admin_color_scheme_picker');
    add_action('personal_options', 'prefix_hide_personal_options');
}

function user_nickname_is_login( $meta, $user, $update ){
	$meta['nickname'] = $user->user_login;
	return $meta;
}
add_filter( 'insert_user_meta', 'user_nickname_is_login', 10, 3 );

function prefix_hide_personal_options() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
         $("#your-profile .form-table:first, #your-profile h3:first").remove();
            //$('input#nickname, #display_name').closest('tr').remove();
        });
    </script>
    <?php

}

include_once get_template_directory() . '/php/ajax.php';
include_once get_template_directory() . '/php/contest-image-upload.php';
include_once get_template_directory() . '/php/custom-post-types.php';
