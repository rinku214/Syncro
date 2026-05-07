<?php
add_filter('script_loader_tag', function ($tag, $handle) {
    // 管理画面や特定のJSを除外したい場合はここで分岐
    if (is_admin()) return $tag;
    return str_replace(' src', ' defer src', $tag);
}, 10, 2);

function my_theme_scripts()
{
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
