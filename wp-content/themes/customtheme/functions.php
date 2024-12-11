<?php

function load_scripts()
{
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css', array(), '4.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_scripts');

// main configuration function
function custom_theme_config()
{

    // Registering our menu
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'footer_menu' => 'Footer Menu'
        )
    );

    // custom header
    $args = array(
        'height' =>  225,
        'width' => 1920
    );
    add_theme_support('custom-header', $args);

    // Post Thumbnails
    add_theme_support('post-thumbnails');

    // Post formats
    add_theme_support('post-formats', array('video', 'image'));
};

//register theme confiig 
add_action('after_setup_theme', 'custom_theme_config', 0);

// register sidebar 
function custom_theme_sidebar()
{
    register_sidebar(array(
        'name' => 'Home Page Sidebar',
        'id' => 'sidebar-1',
        'description' => 'This is homepage sidebar. You can add your widgets here',
        'before_widget' => '<div class=widget-wrapper>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class=widget-title>',
        'after_title=></h2>,'
    ));
    register_sidebar(array(
        'name' => 'Blog Page Sidebar',
        'id' => 'sidebar-2',
        'description' => 'This is blogpage sidebar. You can add your widgets here',
        'before_widget' => '<div class=widget-wrapper>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class=widget-title>',
        'after_title=></h2>,'
    ));
};

add_action('widgets_init', 'custom_theme_sidebar');
