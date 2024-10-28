<?php

/**
 * Template Name: Home
 *
 */

?>
<?php 
    get_header();
?>
<main>
    <?php
    // Iniciar o loop
    if (have_posts()) :
        while (have_posts()) :
            the_post();

            // Exibir informações do post
            the_title(); // Título do post
            the_content(); // Conteúdo do post
            the_excerpt(); // Resumo do post
            the_permalink(); // Link permanente do post
            the_category(); // Categoria do post
            the_tags(); // Tags do post
            the_author(); // Autor do post
            the_date(); // Data do post

        endwhile;

        // Exibir navegação entre páginas
        the_posts_pagination();

    else :
        // Mensagem quando não há posts
        echo "Nenhum post encontrado.";
    endif;
    ?>

</main>
<?php 
    get_footer(); 
?>