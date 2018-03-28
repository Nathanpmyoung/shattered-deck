<?php
add_action( 'init', 'pizzaria_register_styles');

// register the sytles used in this theme. In the case of child theme this function will not take place
if(! function_exists('pizzaria_register_styles')){
    function pizzaria_register_styles(){
        wp_register_style( 'normalize', get_template_directory_uri()."/css/normalize.css", array(), 8.0);
        wp_register_style( 'style', get_template_directory_uri()."/style.css", array(), 1.0);
    }
}

add_action( 'wp_enqueue_scripts', 'pizzaria_styles');

function pizzaria_styles(){
    // add the style sheets
    wp_enqueue_style('normalize');
    wp_enqueue_style( 'style');
}

add_action( 'init', 'pizzaria_menus');

function pizzaria_menus(){
    register_nav_menus( array(
        'header_menu' => __('Header Menu', 'pizzaria'),
    ) );
}

?>
