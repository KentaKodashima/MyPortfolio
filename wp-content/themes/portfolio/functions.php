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

add_action( 'init', 'register_cpt_resources_website' );
function register_cpt_resources_website() {
 
    $labels = array(
        'name' => ( 'resources_website' ),
        'singular_name' => ( 'resource_website' ),
        'add_new' => ( 'Add New Resource' ),
        'add_new_item' => ( 'Add New Resource' ),
        'edit_item' => ( 'Edit Resource' ),
        'new_item' => ( 'New Resource' ),
        'view_item' => ( 'View Resource' ),
        'search_items' => ( 'Search Resource' ),
        'not_found' => ( 'No Resources found' ),
        'not_found_in_trash' => ( 'No Resources found in Trash' ),
        'parent_item_colon' => ( 'Parent Resource' ),
        'menu_name' => ( 'Resources - Website' ),
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
 
    register_post_type( 'resources_website', $args );
}

add_action( 'init', 'register_cpt_resources_book' );
function register_cpt_resources_book() {
 
    $labels = array(
        'name' => ( 'resources_book' ),
        'singular_name' => ( 'resource_book' ),
        'add_new' => ( 'Add New Resource' ),
        'add_new_item' => ( 'Add New Resource' ),
        'edit_item' => ( 'Edit Resource' ),
        'new_item' => ( 'New Resource' ),
        'view_item' => ( 'View Resource' ),
        'search_items' => ( 'Search Resource' ),
        'not_found' => ( 'No Resources found' ),
        'not_found_in_trash' => ( 'No Resources found in Trash' ),
        'parent_item_colon' => ( 'Parent Resource' ),
        'menu_name' => ( 'Resources - Book' ),
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
 
    register_post_type( 'resources_book', $args );
}

add_action( 'init', 'register_cpt_blog_article' );
function register_cpt_blog_article() {
 
    $labels = array(
        'name' => ( 'blog_articles' ),
        'singular_name' => ( 'blog_article' ),
        'add_new' => ( 'Add New Blog Article' ),
        'add_new_item' => ( 'Add New Blog Article' ),
        'edit_item' => ( 'Edit Blog Article' ),
        'new_item' => ( 'New Blog Article' ),
        'view_item' => ( 'View Blog Article' ),
        'search_items' => ( 'Search Blog Articles' ),
        'not_found' => ( 'No blog article found' ),
        'not_found_in_trash' => ( 'No blog article found in Trash' ),
        'parent_item_colon' => ( 'Parent blog article' ),
        'menu_name' => ( 'Blog Articles' ),
    );
 
    $args = array(
        'labels' => $labels,
        'description' => 'The links of blog articles',
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
 
    register_post_type( 'blog_article', $args );
}

add_action( 'init', 'register_cpt_skills' );
function register_cpt_skills() {
 
    $labels = array(
        'name' => ( 'skills' ),
        'singular_name' => ( 'skill' ),
        'add_new' => ( 'Add New Skill' ),
        'add_new_item' => ( 'Add New Skill' ),
        'edit_item' => ( 'Edit Skill' ),
        'new_item' => ( 'New Skill' ),
        'view_item' => ( 'View Skill' ),
        'search_items' => ( 'Search Skill' ),
        'not_found' => ( 'No Skills found' ),
        'not_found_in_trash' => ( 'No Skills found in Trash' ),
        'parent_item_colon' => ( 'Parent Skill' ),
        'menu_name' => ( 'Skills' ),
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
 
    register_post_type( 'skill', $args );
}
 
// Add thumbnail functionality
add_theme_support( 'post-thumbnails', array( 'work', 'resource', 'blog_article', 'skill', 'resources_website', 'resources_book' ) );
set_post_thumbnail_size( 150, 150, true );
?>