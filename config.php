<?php

$config = [
    'id' => 'manhphucpro',
    'basePath' => WP_CONTENT_DIR,
    'components' => [
        'wp_theme' => [
            'class' => 'ManhPhucPro\\WpTheme',
            'version' => '0.01',
            'text_domain' => 'manhphucpro',
            'base_path' => get_template_directory(),
            'base_url' => get_template_directory_uri(),

            // only set when child theme using
            'child_base_path' => get_template_directory() === get_stylesheet_directory() ? null : get_stylesheet_directory(),
            'child_base_url' => get_template_directory_uri() === get_stylesheet_directory_uri() ? null : get_stylesheet_directory_uri(),
        ],
        'html_helper' => [

        ],
    ],
];
return $config;
