<?php /* 
Template Name: Página Inicial do Blog 
*/ ?>

<?php get_header(); ?>

<main>

    <!-- Seção de Introdução -->
    <section class="introducao">
        <h1>Bem-vindo ao nosso blog!</h1>
        <p>Aqui você encontrará artigos sobre [tema do blog], com o objetivo de [objetivo do blog].</p>
    </section>

    <!-- Seção de Últimos Posts -->
    <section class="ultimos-posts">
        <h2>Últimos Posts</h2>
        
        <?php 
        // Argumentos para a consulta
        $args = array(
            'posts_per_page' => 4, // Número de posts por página
            'orderby' => 'date', // Ordenar por data
            'order' => 'DESC' // Ordenar em ordem decrescente
        );
        
        // Consulta aos posts
        $query = new WP_Query($args);
        
        // Verificar se há posts
        if ($query->have_posts()) :
        ?>
        
            <ul>
                <?php 
                // Loop para exibir posts
                while ($query->have_posts()) : $query->the_post();
                ?>
                    <li>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_excerpt(); ?></p>
                        <p>Data: <?php the_date(); ?></p>
                    </li>
                <?php 
                endwhile;
                ?>
            </ul>
        
        <?php 
        else :
            // Mensagem quando não há posts
            echo "Nenhum post encontrado.";
        endif;
        
        // Limpar consulta
        wp_reset_postdata();
        ?>
    </section>

</main>

<?php get_footer(); ?>