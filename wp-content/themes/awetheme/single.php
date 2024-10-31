<?php /* 
Template Name: Single Post 
*/ ?>

<?php get_header(); ?>

<main>

    <?php 
    // Verificar se há post
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>

        <article>
            <h1><?php the_title(); ?></h1>
            <p>Autor: <?php the_author(); ?></p>
            <p>Data: <?php the_date(); ?></p>
            <p><?php the_content(); ?></p>
            <p>Categoria: <?php the_category(); ?></p>
            <p>Tags: <?php the_tags(); ?></p>
            
        </article>

        <div>
        <?php 
        // Comentários
        comments_template();
        ?>
        </div>

    <?php 
    endwhile;
    endif;
    ?>

</main>

<?php get_footer(); ?>
