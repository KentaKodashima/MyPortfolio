<?php

// Define custom post type
add_action( 'init', 'register_cpt_works' );
function register_cpt_works() {
 
    $labels = array(
        'name' => ( 'works' ),
        'singular_name' => ( 'work' ),
        'add_new' => ( 'Add New Work' ),
        'add_new_item' => ( 'Add New Work' ),
        'edit_item' => ( 'Edit Work' ),
        'new_item' => ( 'New Work' ),
        'view_item' => ( 'View work' ),
        'search_items' => ( 'Search Works' ),
        'not_found' => ( 'No work found' ),
        'not_found_in_trash' => ( 'No works found in Trash' ),
        'parent_item_colon' => ( 'Parent work' ),
        'menu_name' => ( 'Works' ),
    );
 
    $args = array(
        'labels' => $labels,
        'description' => 'The details of works',
        'public' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,

        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',

        'hierarchical' => true,
        'supports' => array( 'title', 'thumbnail', 'custom-fields' ),
        
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
        'can_export' => true,
    );
 
    register_post_type( 'work', $args );
}

add_action( 'init', 'register_cpt_resources' );
function register_cpt_resources() {
 
    $labels = array(
        'name' => ( 'resources' ),
        'singular_name' => ( 'resource' ),
        'add_new' => ( 'Add New Resource' ),
        'add_new_item' => ( 'Add New Resource' ),
        'edit_item' => ( 'Edit Resource' ),
        'new_item' => ( 'New Resource' ),
        'view_item' => ( 'View Resource' ),
        'search_items' => ( 'Search Resource' ),
        'not_found' => ( 'No Resources found' ),
        'not_found_in_trash' => ( 'No Resources found in Trash' ),
        'parent_item_colon' => ( 'Parent Resource' ),
        'menu_name' => ( 'Resources' ),
    );
 
    $args = array(
        'labels' => $labels,
        'description' => 'The details of resources',
        'public' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,

        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',

        'hierarchical' => true,
        'supports' => array( 'title', 'thumbnail', 'custom-fields' ),
        
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
        'can_export' => true,
    );
 
    register_post_type( 'resource', $args );
}
 
// Add thumbnail functionality
add_theme_support( 'post-thumbnails', array( 'work' ) );
add_theme_support( 'post-thumbnails', array( 'resource' ) );
set_post_thumbnail_size( 150, 150, true );
?>