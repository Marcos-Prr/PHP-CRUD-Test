<?php
    require_once './routes.php';
    require_once './Controller/ProdutosCadastroController.php';
    $routes = new routes;
    $routes->start($_GET);
        ?>
