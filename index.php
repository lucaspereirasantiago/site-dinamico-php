<?php
    /* Difinir página atual pela URL */
    $pagina = 'home';

    if(isset($_GET['id'])){
        $pagina = addslashes($_GET['id']);
    }
    
    /* Para carregar o header.php */
    include_once("app/views/header.php");

    /* Para carregar a página escolhida pelo usuário */
    switch ($pagina){
        case 'home':
            include_once("app/views/home.php");
        break;
        case 'page1':
            include_once("app/pages/page1.php");
        break;
        case 'page2':
            include_once("app/pages/page2.php");
        break;
        case 'page3':
            include_once("app/pages/page3.php");
        break;
        default:
            include_once("app/views/home.php");
        break;
    }

    /* Para carregar o footer.php */
    include_once("app/views/footer.php");
?>