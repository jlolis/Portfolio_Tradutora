<?php
/* Define a página atual pela URL */
$pagina = 'home.php';
 
if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
 
/* Carrega o header.php */
include 'header.php';
 
/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
    case 'equipe':
        include 'equipe.php';
        break;
 
    default:
        include 'app/views/home.php';
        break;
}
 
/* Carrega o footer.php */
include 'footer.php';
?>