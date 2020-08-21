<?php require_once './Model/Produtos.php' ?>
<!DOCTYPE html>

<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="./PHP-CRUD-Test/materialize/css/materialize.min.css" media="screen,projection" />

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


</head>

<body>
    <nav>
        <div class="nav-wrapper" style="background-color: #6D00AB;">
            <a href="#!" class="brand-logo center col s12">Cadastro de Produtos</a>
            <ul class="right hide-on-med-and-down">
                <li><a href=""><i class="material-icons">add</i></a></li>
                <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
                <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
                <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
    </nav>

    <?php
    $arrayProdutos =  Produtos::ListaTodosProdutos();
    // var_dump($arrayProdutos);
    ?>
    <div class="container">
        <div class="rows col s12">
            <div class="col s6">
                <h3><a>Lista de Produtos</a></h3>
            </div>
            <div class="col s6">
                <a href="Cadastro" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
        </div>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Imagem do produto</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($arrayProdutos as $Produto) { ?>
                    <tr>
                        <td><?php echo $Produto->Nome; ?></td>
                        <td><?php echo $Produto->Descricao; ?></td>
                        <td><?php echo $Produto->Valor; ?></td>
                        <td><?php echo "<img class='responsive-img' src=./imagens/$Produto->Nome_imagem>" ?></td>
                        <td>
                            <a href="Cadastro/<?php echo $Produto->id; ?>" class="waves-effect waves-light btn-small" style="margin-right: 10px;">Editar</a>
                            <a class="waves-effect waves-light btn-small red">Remover</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</body>