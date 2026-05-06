<?php
function my_theme_scripts()
{
    // Google Fonts を1つずつ正しく読み込む
    wp_enqueue_style('google-fonts-noto', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap', array(), null);
    wp_enqueue_style('google-fonts-caudex', 'https://fonts.googleapis.com/css2?family=Caudex:ital,wght@0,400;0,700;1,400;1,700&display=swap', array(), null);
    wp_enqueue_style('google-fonts-lato', 'https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap', array(), null);

    // style.css の読み込み（ここは変更なし）
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/public/assets/css/style.css',
        array(),
        filemtime(get_theme_file_path('/public/assets/css/style.css'))
    );

    // script.js の読み込み（ここは変更なし）
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/src/js/script.js',
        array('jquery'),
        filemtime(get_theme_file_path('/src/js/script.js')),
        true
    );
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');
