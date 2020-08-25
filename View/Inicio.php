<!DOCTYPE html>

<html>
<?php require_once './Model/Produtos.php' ?>
<style>
    .btn{
        background-color: #57c60f;
    }
</style>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


</head>

<body>
    <nav>
        <div class="nav-wrapper fixed" style="background-color: #6D00AB;">
            <a href="index" class="brand-logo center col s12">Cadastro de Produtos</a>
        </div>
    </nav>

    <?php
    $arrayProdutos =  Produtos::ListaTodosProdutos();
    ?>
    <div class="container">
        <div class="rows col s12">
            <div class="col s6">
                <h3 class="center"><a >Lista de Produtos</a></h3>
            </div>
            <div class="col s6">
                <a href="Cadastro" class="btn btn-medium right waves-effect waves-light red">Adicionar Produto</a>
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
                        <td><?php echo "<img class='responsive-img'  style='max-height: 100px; max-width:100px' src=./imagens/$Produto->Nome_imagem>" ?></td>
                        <td>
                            <a href="editar/<?php echo $Produto->id; ?>" class="waves-effect waves-light btn-small " style="margin-right: 10px "><i class="material-icons">edit</i></a>
                            <a href="excluir/<?php echo $Produto->id; ?>"class="waves-effect waves-light btn-small red"><i class="material-icons">delete</i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</body>