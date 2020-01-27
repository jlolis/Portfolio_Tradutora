<?php
/*
Template Name: Página de Post
*/
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
    <div class="post-unico">
        <h1 class="post-unico-titulo"><?php the_title(); ?></h1>
        <div class="post-unico-conteudo">
            <?php the_content(); ?>
        </div>
    </div>
    <?php
    endwhile;
    endif;
?>