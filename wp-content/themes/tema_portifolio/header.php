<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Portfolio de Tradutoção</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            <?php include 'style.css';?>
        </style>

    </head>

    <header>
        <div id="cabecalho" class="cabecalho">

            <div class="menu-mobile"><?php include 'img/menu-mobile.svg';?></div>

            <ul class="lista-menu" id="lista-menu" style="width: 100%;">
            <?php wp_nav_menu( array(

                'menu' => 'meu_menu',

                'theme_location' => 'meu_menu',

                'container' => 'div',

                'container_class' => 'classe_do_container',

                'container_id' => 'id_do_container',

                'menu_class' => 'classe_do_menu',

                'echo' => true,

                'menu_id' => 'id_do_menu',

                'before' => "",

                'after' => "",

                'link_before' => "",

                'link_after' => "",

                'depth' => 0,

                'walker' => "",

                ) );
            ?>
            </ul>
             
        </div>

    <body>
    
