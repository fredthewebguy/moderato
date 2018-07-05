<?php

// enque scripts and styles
function my_assets() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'fontello', get_template_directory_uri() . '/fontello.css',false,'1.1','all');

    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery.js', array( 'jquery' ) );
    wp_enqueue_script( 'pace.min', get_stylesheet_directory_uri() . '/js/pace.min.js', array( 'pace.min', 'jquery' ), '1.0', true );
    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ) );
}

add_action( 'wp_enqueue_scripts', 'my_assets' );

// filter pages from site searches
add_filter( 'pre_get_posts', 'page_hate_search_filter' );
function page_hate_search_filter($query) {
     if ($query->is_search) {
          $query->set( 'post_type', 'post' );
     }
     return $query;
}

// enable featured images
add_theme_support( 'post-thumbnails' );

// increase file upload limit
@ini_set( 'upload_max_size' , '1024M' );
@ini_set( 'post_max_size', '1024M');
@ini_set( 'max_execution_time', '1000' );

// remove p tags from images
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

// removes auto-generated P tags on posts
add_filter('the_content', 'filter_ptags_on_images');

// limit post excerpts by niumber of characters
function custom_excerpt_length( $length ) {
        return 45;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// register CPT - songbook
add_action( 'init', 'register_cpt_songbook' );

function register_cpt_songbook() {

    $labels = array( 
        'name' => _x( 'Songbook', 'songbook' ),
        'singular_name' => _x( 'Podcast', 'songbook' ),
        'add_new' => _x( 'Add New', 'songbook' ),
        'add_new_item' => _x( 'Add New Song', 'songbook' ),
        'edit_item' => _x( 'Edit Song', 'songbook' ),
        'new_item' => _x( 'New Song', 'songbook' ),
        'view_item' => _x( 'View Song', 'songbook' ),
        'search_items' => _x( 'Search Songbook', 'songbook' ),
        'not_found' => _x( 'No Song found', 'songbook' ),
        'not_found_in_trash' => _x( 'No Song found in Trash', 'songbook' ),
        'parent_item_colon' => _x( 'Parent Songbook:', 'songbook' ),
        'menu_name' => _x( 'Songbook', 'songbook' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Songbook Resources',
        'supports' => array( 'title', 'editor', 'thumbnail', 'author', 'custom-fields', 'revisions', 'page-attributes' ),
        
        'taxonomies' => array('category'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'songbook', $args );
}

// register CPT - podcast
add_action( 'init', 'register_cpt_podcast' );

function register_cpt_podcast() {

    $labels = array( 
        'name' => _x( 'Podcast', 'podcast' ),
        'singular_name' => _x( 'Podcast', 'podcast' ),
        'add_new' => _x( 'Add New', 'podcast' ),
        'add_new_item' => _x( 'Add New Podcast', 'podcast' ),
        'edit_item' => _x( 'Edit Podcast', 'podcast' ),
        'new_item' => _x( 'New Podcast', 'podcast' ),
        'view_item' => _x( 'View Podcast', 'podcast' ),
        'search_items' => _x( 'Search Podcast', 'podcast' ),
        'not_found' => _x( 'No Podcast found', 'podcast' ),
        'not_found_in_trash' => _x( 'No Podcast found in Trash', 'podcast' ),
        'parent_item_colon' => _x( 'Parent Podcast:', 'podcast' ),
        'menu_name' => _x( 'Podcast', 'podcast' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Podcast Resources',
        'supports' => array( 'title', 'editor', 'thumbnail', 'author', 'custom-fields', 'revisions', 'page-attributes' ),

        'taxonomies' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'podcast', $args );
}

// end functions
?>