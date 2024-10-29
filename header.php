<!DOCTYPE html>
<html lang="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <title>
            <?php 
            if (is_front_page() || is_home()) {
                // Exibe apenas o nome do site na página inicial
                $title = get_bloginfo('name');
            } else {
                // Exibe o título da página/post e o nome do site em outras páginas
                $title = wp_get_document_title() . ' | ' . get_bloginfo('name');
            }
            echo $title;
            ?>
        </title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
            <header>
                <?php if( has_custom_logo() ): ?>
                    <?php the_custom_logo(); ?>
                <?php endif; ?>
                <?php if ( has_nav_menu( 'menu_header' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'menu_header' 
                    ) );
                }
                ?>
            </header>
            <hr>