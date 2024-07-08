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


// パンくずリスト
function simple_breadcrumb()
{
    if (!is_front_page()) {
        echo '<a href="' . home_url() . '" class="text__breadcrumbs">Home</a>';
        
        if (is_page('news')) {
            echo '<span class="text__breadcrumbs"> / お知らせ</span>';
        } elseif (is_singular('custom_type_news')) {
            echo '<span class="text__breadcrumbs"> / <a href="' . get_permalink(get_page_by_path('news')) . '">お知らせ</a> / ' . get_the_title() . '</span>';
        } elseif (is_category() || is_single()) {
            the_category(' &bull; ');
            if (is_single()) {
                echo '<span class="text__breadcrumbs"> / ' . get_the_title() . '</span>';
            }
        } elseif (is_page()) {
            if (is_page('aboutus')) {
                echo '<span class="text__breadcrumbs"> / 会社概要</span>';
            } else if (is_page('businessintroduction')) {
                echo '<span class="text__breadcrumbs"> / 事業紹介</span>';
            } else if (is_page('contact')) {
                echo '<span class="text__breadcrumbs"> / お問合せ</span>';
            } else if (is_page('privacypolicy')) {
                echo '<span class="text__breadcrumbs"> / 個人情報保護方針</span>';
            } else {
                echo '<span class="text__breadcrumbs"> / ' . get_the_title() . '</span>';
            }
        }
    }
}
