<?php

function menus () {
    register_nav_menus(
        array(
            'menu_header' => __('Menu Header', 'theme'),
            'menu_footer' => __('Menu Footer', 'theme'),
            'menu_topfooter' => __('Menu TopFooter', 'theme'),
            'menu_subfooter' => __('Menu SubFooter', 'theme'),
        )
    );
}

add_action('init', "menus");

function custom_logo() {
    // Suporte ao upload de logo
    add_theme_support( 'custom-logo', array(
        'height'      => 74,     // Altura recomendada do logo
        'width'       => 267,    // Largura recomendada do logo
        'flex-height' => true,   // Permitir altura flexível
        'flex-width'  => true,   // Permitir largura flexível
    ) );
}

add_action( 'after_setup_theme', "custom_logo" );

// Função para carregar estilos e scripts
function meu_tema_enqueue_assets() {
    // Enqueue do estilo principal
    wp_enqueue_style('meu-tema-style', get_template_directory_uri() . '/assets/style.css', array(), '1.0', 'all');

    // Enqueue do script principal
    wp_enqueue_script('meu-tema-script', get_template_directory_uri() . '/assets/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'meu_tema_enqueue_assets');
