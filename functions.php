<?php
function my_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}
add_action("after_setup_theme", "my_setup");

function my_theme_scripts()
{
    // Google Fonts の読み込み
    // wp_enqueue_style('google-fonts-tinos', 'https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap', array(), null);

    // style.css の読み込み
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/public/assets/css/style.css',
        array(),
        filemtime(get_theme_file_path('/public/assets/css/style.css'))
    );
 
    // script.js の読み込み
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/src/js/script.js',
        array('jquery'),
        filemtime(get_theme_file_path('/src/js/script.js')),
        true
    );
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');
