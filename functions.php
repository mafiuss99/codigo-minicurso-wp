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