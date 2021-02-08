<?php 


// Loading CSS into the Website: 

function load_css()
{


    // Keep your stylesheet at the bottom! 


    wp_register_style('fonts', get_template_directory_uri() . '/assets/fonts/fonts.css', 
    array(), false, 'all' ); 

    wp_enqueue_style('fonts'); 

    wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', 
    array(), false, 'all' ); 

    wp_enqueue_style('main'); 

}

add_action('wp_enqueue_scripts', 'load_css'); 

// Loading JS into the Website: 

function load_js() 
{

    wp_enqueue_script('jquery'); 

    wp_register_script('animejs', get_template_directory_uri() . '/assets/js/animejs/anime.min.js',
        'jquery', false, //true: footer or false: header
        true,
    ); 

    wp_enqueue_script('animejs'); 

    wp_register_script('mainjs', get_template_directory_uri() . '/assets/js/main.js',
        'jquery', false, //true: footer or false: header
         true,
); 

    wp_enqueue_script('mainjs'); 

}

add_action('wp_enqueue_scripts', 'load_js'); 


// Theme Options

add_theme_support('menus'); 
add_theme_support('post-thumbnails'); 


// Menus

register_nav_menus(

    array(

        'top-menu' => 'Top Menu Location', 
        'mobile-menu' => 'Mobile Menu Location', 
        'footer-menu' => 'Footer Menu Location'

    ) 
); 

// Custom Image Sizes
add_image_size('blog-large', 800, 400, false); 
add_image_size('blog-small', 300, 200, true); 
