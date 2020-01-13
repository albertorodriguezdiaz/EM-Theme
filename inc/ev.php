<?php

add_filter( 'show_admin_bar', '__return_false' );



// Slider Inicio - Banner Inicial
function slider_posttype()
{
    register_taxonomy_for_object_type('category', ''); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', '');
    register_post_type('slider', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Slider', ''), // Rename these to suit
            'singular_name' => __('Slider', ''),
            'add_new' => __('Crear Nuevo', ''),
            'add_new_item' => __('Crear Nuevo Slider', ''),
            'edit' => __('Editar', ''),
            'edit_item' => __('Editar Slider', ''),
            'new_item' => __('Nuevo Slider', ''),
            'view' => __('Ver Slider', ''),
            'view_item' => __('Ver Slider', ''),
            'search_items' => __('Search Slider', ''),
            'not_found' => __('No Slider found', ''),
            'not_found_in_trash' => __('No Slider found in Trash', '')
        ),
        'public' => true,
        'menu_icon' => 'dashicons-desktop',
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => false,
        'menu_position' => 6,
        'supports' => array(
            'title',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(

        ) // Crear Category and Post Tags support
    ));
}

add_action('init','slider_posttype'); // Slide inicio




// Productos
function emotion_productos()
{
    register_taxonomy_for_object_type('category', ''); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', '');
    register_post_type('productos', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('EM Productos', ''), // Rename these to suit
            'singular_name' => __('EM Productos', ''),
            'add_new' => __('Nuevo Producto', ''),
            'add_new_item' => __('Crear Nuevo producto EM', ''),
            'edit' => __('Editar', ''),
            'edit_item' => __('Editar producto EM', ''),
            'new_item' => __('Nuevo producto EM', ''),
            'view' => __('Ver producto EM', ''),
            'view_item' => __('Ver producto EM', ''),
            'search_items' => __('Search producto EM', ''),
            'not_found' => __('No se encuentro el producto', ''),
            'not_found_in_trash' => __('No se encuentro el producto', '')
        ),
        'public' => true,
        'menu_icon' => 'dashicons-feedback',
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => false,
        'menu_position' => 6,
        'show_in_admin_bar' => true,
        'supports' => array(
            'title',
            'thumbnail',
            //'editor', 
            //'author', 
            'thumbnail', 
            'revisions', 
            'custom-fields'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true // Allows export in Tools > Export
        //'taxonomies' => array(
           // 'category'
        //) // Crear Category and Post Tags support
    ));
}

add_action('init','emotion_productos'); // Productos


function taxonomia_producto_categoria(){
    $labels = array(
        'name'                  => _x('Categorías EM', 'taxonomy general name'),
        'singular_name'         => _x('Categorías EM', 'taxonomy singular name'),
        'search_items'          => __('Buscar Categorías EM'),
        'all_items'             => __('Todas las Categorías'),
        'parent_item'           => __('Categorías EM Padre'),
        'parent_item_colon'     => __('Categorías EM Padre:'),
        'edit_item'             => __('Editar Categoría'),
        'update_item'           => __('Actualizar Categoría'),
        'add_new_item'          => __('Agregar Nueva Categoría'),
        'new_item_name'         => __('Nueva Categoría'),
        'menu_name'             => __('Categorías EM'),
    );

    $args =array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'producto-categoria')
    );
    register_taxonomy('producto-categoria', array('productos'), $args);
}


add_action('init', 'taxonomia_producto_categoria');




// Fabricantes
function emotion_fabricantes()
{
    register_taxonomy_for_object_type('category', ''); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', '');
    register_post_type('fabricantes', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('EM Fabricantes', ''), // Rename these to suit
            'singular_name' => __('EM Fabricantes', ''),
            'add_new' => __('Nuevo fabricante', ''),
            'add_new_item' => __('Crear Nuevo fabricante EM', ''),
            'edit' => __('Editar', ''),
            'edit_item' => __('Editar fabricante EM', ''),
            'new_item' => __('Nuevo fabricante EM', ''),
            'view' => __('Ver fabricante EM', ''),
            'view_item' => __('Ver fabricante EM', ''),
            'search_items' => __('Search fabricante EM', ''),
            'not_found' => __('No se encuentro el fabricante', ''),
            'not_found_in_trash' => __('No se encuentro el fabricante', '')
        ),
        'public' => true,
        'menu_icon' => 'dashicons-share-alt',
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => false,
        'menu_position' => 6,
        'show_in_admin_bar' => true,
        'supports' => array(
            'title',
            'thumbnail',
            //'editor', 
            //'author', 
            'thumbnail', 
            'revisions', 
            'custom-fields'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true // Allows export in Tools > Export
        //'taxonomies' => array(
           // 'category'
        //) // Crear Category and Post Tags support
    ));
}

add_action('init','emotion_fabricantes'); // Productos


function taxonomia_marcas(){
    $labels = array(
        'name'                  => _x('Marcas', 'taxonomy general name'),
        'singular_name'         => _x('Marcas', 'taxonomy singular name'),
        'search_items'          => __('Buscar Marcas'),
        'all_items'             => __('Todas las marcas'),
        'parent_item'           => __('Marcas Padre'),
        'parent_item_colon'     => __('Marcas Padre:'),
        'edit_item'             => __('Editar Marca'),
        'update_item'           => __('Actualizar Marca'),
        'add_new_item'          => __('Agregar Nueva Marca'),
        'new_item_name'         => __('Nueva Marca'),
        'menu_name'             => __('Marcas'),
    );

    $args =array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'marcas-fabricantes')
    );
    register_taxonomy('marcas-fabricantes', array('fabricantes'), $args);
}


add_action('init', 'taxonomia_marcas');






// Producto Químicos
function emotion_quimicos()
{
    register_taxonomy_for_object_type('category', ''); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', '');
    register_post_type('quimicos', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('EM Químico', ''), // Rename these to suit
            'singular_name' => __('EM Químicos', ''),
            'add_new' => __('Nuevo Químico', ''),
            'add_new_item' => __('Crear Nuevo Químico EM', ''),
            'edit' => __('Editar', ''),
            'edit_item' => __('Editar Químico EM', ''),
            'new_item' => __('Nuevo Químico EM', ''),
            'view' => __('Ver Químico EM', ''),
            'view_item' => __('Ver Químico EM', ''),
            'search_items' => __('Search Químico EM', ''),
            'not_found' => __('No se encuentro el Químico', ''),
            'not_found_in_trash' => __('No se encuentro el Químico', '')
        ),
        'public' => true,
        'menu_icon' => 'dashicons-image-filter',
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => false,
        'menu_position' => 6,
        'show_in_admin_bar' => true,
        'supports' => array(
            'title',
            'thumbnail',
            //'editor', 
            //'author', 
            'thumbnail', 
            'revisions', 
            'custom-fields'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true // Allows export in Tools > Export
        //'taxonomies' => array(
           // 'category'
        //) // Crear Category and Post Tags support
    ));
}

add_action('init','emotion_quimicos'); // Productos


function taxonomia_glosarioquimicos(){
    $labels = array(
        'name'                  => _x('Glosario', 'taxonomy general name'),
        'singular_name'         => _x('Glosario', 'taxonomy singular name'),
        'search_items'          => __('Buscar Glosario'),
        'all_items'             => __('Todas las Glosario'),
        'parent_item'           => __('Glosario Padre'),
        'parent_item_colon'     => __('Glosario Padre:'),
        'edit_item'             => __('Editar Glosario'),
        'update_item'           => __('Actualizar Glosario'),
        'add_new_item'          => __('Agregar Nueva Glosario'),
        'new_item_name'         => __('Nueva Glosario'),
        'menu_name'             => __('Glosario'),
    );

    $args =array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'productos-quimicos')
    );
    register_taxonomy('productos-quimicos', array('quimicos'), $args);
}


add_action('init', 'taxonomia_glosarioquimicos');




function my_acf_google_map_api( $api ){

    $api['key'] = 'AIzaSyAotgXiiIPK1kGYcLrm0FBiB-dyW6EuAvc';

    return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


// Menu Principal
register_nav_menus( array(
    'menu-header' => esc_html__( 'Menu', '' ),
) );


// Menu Footer A
register_nav_menus( array(
    'menu-footer-a' => esc_html__( 'Footer A', '' ),
) );

// Menu Footer B
register_nav_menus( array(
    'menu-footer-b' => esc_html__( 'Footer B', '' ),
) );


// Menu Footer C
register_nav_menus( array(
    'menu-footer-c' => esc_html__( 'Footer C', '' ),
) );


// Categorias
add_filter('single_template', create_function('$the_template','foreach( (array) get_the_category() as $cat ) { if ( file_exists(TEMPLATEPATH ."/single-{$cat->slug}.php") ) return TEMPLATEPATH ."/single-{$cat->slug}.php"; } return $the_template;' ));


// Logo Admin
function mi_logo_inicio() {
    echo '<style type="text/css">
        .login h1 a{ background-image:url('.get_bloginfo('template_directory').'/img/logo-login.png) !important; height: 125px !important; width: 325px; !important background-size: cover; background-size: cover; margin: 0 auto;}
    </style>';
}add_action('login_head', 'mi_logo_inicio');

function my_login_logo_url() {
  return home_url();
}add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
  return 'EfectoVirtual';
}add_filter( 'login_headertitle', 'my_login_logo_url_title' );