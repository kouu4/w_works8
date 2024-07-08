<?php
function my_enqueue_styles()
{
    wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), null, 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), null, 'all');
}

function my_enqueue_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('fadeInAndUp-js', get_template_directory_uri() . '/src/js/fadeInAndUp.js', array('jquery'), null, true);
    wp_enqueue_script('humberger-js', get_template_directory_uri() . '/src/js/humberger.js', array('jquery'), null, true);
    wp_enqueue_script('pagetop-js', get_template_directory_uri() . '/src/js/pagetop.js', array('jquery'), null, true);
}

add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
add_action('wp_enqueue_scripts', 'my_enqueue_styles');


