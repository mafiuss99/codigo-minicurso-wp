<!DOCTYPE html>
<html lang="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
            <?php if( has_custom_logo() ): ?>
                <?php the_custom_logo(); ?>
            <?php endif; ?>
            <?php if ( has_nav_menu( 'menu_header' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'menu_header' 
                ) );
            }
            ?>