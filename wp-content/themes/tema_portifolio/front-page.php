<?php
/*
Template Name: Home
*/
get_header();
?>

<div class="container">

    <div class="home-perfil">
        <img id="foto-perfil" src="https://educar.gt/wp-content/uploads/2018/05/foto-de-perfil-adecuada.jpg">

        <div class="logo-instagram">
            <a href="https://www.instagram.com/"><img id="logo-instagram" src="https://i.pinimg.com/originals/a7/2b/b5/a72bb5bf31303bd5f2fcf20c95603150.png"></a>
        </div>
                          
        <div id="lista-perfil">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <?php the_content(); ?>
            <?php
            endwhile;
            endif;
            ?>
        </div>

    </div>
    
    
</div>

<div id="citacao">
    <blockquote class="texto-citacao">"Um tradutor é um leitor, um intérprete e um criador, tudo em um"</blockquote>
    <a id="autor-citacao" href="https://www.biblio.com/das-bijay-kumar/author/120034" rel="author" target="blank">Bijay Kumar</a>
</div>



