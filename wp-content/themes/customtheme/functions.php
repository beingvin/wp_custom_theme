<?php

// require theme customizer
require get_template_directory() . '/inc/customizer.php';

// require TGM Plugin activation 
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';

//load stylesheet 
function load_scripts()
{
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css', array(), '4.0.0', 'all');
    wp_enqueue_script('fitvids', get_template_directory_uri() . '/js/fitvids.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'load_scripts');

// import google fonts
function cutomtheme_gutenberg_fonts()
{
    wp_enqueue_style('lato-font', "https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Permanent+Marker&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    wp_enqueue_style('oswald-font', "https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Oswald:wght@200..700&family=Permanent+Marker&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
}
add_action('enqueue_block_editor_assets', 'cutomtheme_gutenberg_fonts');


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

    //title
    add_theme_support('title-tag');

    //logo
    add_theme_support('custom-logo', array(
        'height' => 80,
        'width' => 200
    ));

    // load languages translations
    $textdomain = 'customtheme';
    load_theme_textdomain($textdomain, get_stylesheet_directory() . '/languages/');
    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

    //Support for Gutenberg features
    add_theme_support('align-wide');
    add_theme_support('editor-color-palette', array(
        array(
            'name' => __('Blood Red', 'customtheme'),
            'slug' => 'blood-red',
            'color' => '#b9121b'
        ),
        array(
            'name' => __('White color', 'customtheme'),
            'slug' => 'white',
            'color' => '#ffffff'
        ),
    ));
    // add_theme_support('editor-color-palette'); // Provide no custom palette
    add_theme_support('disable-custom-colors'); // Disable custom color picker
    add_theme_support('editor-styles');
    add_editor_style('/css/style-editor.css');
    add_theme_support('wp-block-styles');
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

    register_sidebar(array(
        'name' => 'Services 1',
        'id' => 'services-1',
        'description' => 'First services area.',
        'before_widget' => '<div class=widget-wrapper>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class=widget-title>',
        'after_title=></h2>,'
    ));
    register_sidebar(array(
        'name' => 'Services 2',
        'id' => 'services-2',
        'description' => 'Secound services area.',
        'before_widget' => '<div class=widget-wrapper>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class=widget-title>',
        'after_title=></h2>,'
    ));
    register_sidebar(array(
        'name' => 'Services 3',
        'id' => 'services-3',
        'description' => 'Third services area.',
        'before_widget' => '<div class=widget-wrapper>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class=widget-title>',
        'after_title=></h2>,'
    ));
    register_sidebar(array(
        'name' => 'Social Icons',
        'id' => 'social-icons',
        'description' => 'Third services area.',
        'before_widget' => '<div class=widget-wrapper>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class=widget-title>',
        'after_title=></h2>,'
    ));
    $textdomain = 'customtheme';
    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');
    load_theme_textdomain($textdomain, get_stylesheet_directory() . '/languages/');
};

add_action('widgets_init', 'custom_theme_sidebar');
