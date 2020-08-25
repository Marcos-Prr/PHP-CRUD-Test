<!DOCTYPE html>

<html>
<?php require_once './Model/Produtos.php' ?>
<style>
    .btn {
        background-color: #57c60f;
    }
</style>

<head>
    <link rel="icon" type="image/png" href="/favicon.png" />
    <link rel="icon" type="image/png" href="https://w7.pngwing.com/pngs/173/720/png-transparent-online-shopping-shopping-cart-computer-icons-favicon-angle-text-rectangle.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


</head>

<body style=" display:flex ; min-height: 100vh; flex-direction:column;">
    <header>
        <?php
        include('./View/NavBar.php');
        $arrayProdutos =  Produtos::ListaTodosProdutos();
        ?>
    </header>
    <main style="flex: 1 0 auto;">
        <div class="container">
            <div class="rows col s12">
                <div class="col s6">
                    <h4 class="center brand-logo grey-text">Lista de Produtos</h4>
                    <hr />
                </div>
                <div class="col s6">
                    <a href="Cadastro" class="btn btn-small right waves-effect waves-light ">Novo Produto</a>
                </div>
            </div>
            <table class="striped lighten-5">
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
                            <td><?php echo $Produto->Valor; ?> R$</td>
                            <td><?php echo "<img class='responsive-img'  style='max-height: 150px; max-width:150px' src=./imagens/$Produto->Nome_imagem>" ?></td>
                            <td>
                                <a href="editar/<?php echo $Produto->id; ?>" class="waves-effect waves-light btn-small green " style="margin-right: 10px "><i class="material-icons">edit</i></a>
                                <a href="excluir/<?php echo $Produto->id; ?>" class="waves-effect waves-light btn-small red"><i class="material-icons">delete</i></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <hr />
        </div>
    </main>
    
    <?php include('./View/footer.php'); ?>
</body>