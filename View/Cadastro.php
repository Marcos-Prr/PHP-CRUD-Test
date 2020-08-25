<?php require_once './Model/Produtos.php';
$urlGet = $_GET['url'];
$urlGet = array_filter(explode('/', $urlGet));
if ($urlGet[0] == 'editar' && (empty($_POST))) {
    $Produto = Produtos::selecionaPorId($urlGet[1]);
}
$action = ($urlGet[0] == 'editar') ? $urlGet[1] : 'criar';
$tipoForm = ($urlGet[0] == 'editar') ? 'Editar Produto' : 'Cadastro de novo produto';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="/favicon.png" />
    <link rel="icon" type="image/png" href="https://w7.pngwing.com/pngs/173/720/png-transparent-online-shopping-shopping-cart-computer-icons-favicon-angle-text-rectangle.png" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="./PHP-CRUD-Test/materialize/css/materialize.min.css" media="screen,projection" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


</head>

<body>
    <?php include('./View/NavBar.php'); ?>

    <h5 class="center brand-logo grey-text"><?= $tipoForm ?></h5>


    <div class="container" style="margin-top: 10px;">
        <hr />
        <div class="row">
            <form action="<?php echo $action ?>" method="POST" class="col s12" enctype="multipart/form-data">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="Nome" value="<?php echo $Produto->Nome; ?>" type="text" class="validate" required>
                        <label for="Nome">Nome *</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="Preco" value="<?php echo $Produto->Valor; ?>" type="number" style="-moz-appearance: textfield;" class="validate" required>
                        <label for="Preco">Valor *</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="Descricao" value="<?php echo $Produto->Descricao; ?>" type="text" class="validate" required>
                        <label for="Descricao">Descricao *</label>
                    </div>
                </div>
                <div class="row">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Imagem</span>
                            <input name="imagemArquivo" type="file" required>
                        </div>
                        <div class="file-path-wrapper">
                            <input name="imagem" value="<?php echo $Produto->Nome_imagem; ?>" class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                <hr />
                <a href="index" class="btn waves-effect waves-light red right" style="margin-right:10px;" type="button" name="action">
                    Cancelar
                </a>
                <button class="btn waves-effect waves-light right" style="margin-right:10px;" type="submit" name="action">Enviar
                    <i class="material-icons right">send</i>
                </button>

            </form>
        </div>
    </div>
    <script type="text/javascript" src="./PHP-CRUD-Test/materialize/js/materialize.min.js"></script>
</body>

</html>