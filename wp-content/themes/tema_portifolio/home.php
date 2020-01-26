
<?php
/*
Template Name: Trabalhos
*/
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<div class="pagina-de-posts">
    <h1><?php the_title() ?></h1>
    <h2 class="conteudo-post"><?php the_content(); ?></h2>
</div>
<hr>

<?php
endwhile;
endif;
?>
