<?php /*
Template Name: Arquivo
*/ ?>

<?php get_header(); ?>

<main>

<!-- Título da Página -->
<h1>Arquivo</h1>

<!-- Lista de Categorias -->
<section class="categorias">
    <h2>Categorias</h2>
    <ul>
        <?php 
        // Lista de categorias
        $categorias = get_categories();
        foreach ($categorias as $categoria) :
        ?>
            <li>
                <a href="<?php echo get_category_link($categoria->term_id); ?>">
                    <?php echo $categoria->name; ?>
                </a>
            </li>
        <?php 
        endforeach;
        ?>
    </ul>
</section>


<!-- Lista de Posts -->
<section class="posts">
    <h2>Últimos Posts</h2>
    <?php 
    // Argumentos para a consulta
    $args = array(
        'posts_per_page' => -1, // Todos os posts
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