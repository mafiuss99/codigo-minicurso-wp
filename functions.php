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