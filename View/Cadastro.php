<?php require_once './Model/Produtos.php'; 
    $urlGet = $_GET['url'];
    $urlGet = array_filter(explode('/',$urlGet));
    if($urlGet[0] == 'editar' && (empty($_POST)) ){
        $Produto = Produtos::selecionaPorId($urlGet[1]);    
    }
    $action = ($urlGet[0]=='editar') ? $urlGet[1] : 'criar' ;
?>

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


</head>

<body>
    <nav>
        <div class="nav-wrapper" style="background-color: #6D00AB;">
            <a href="#!" class="brand-logo center col s12">Cadastro de Produtos</a>
        </div>
    </nav>

    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <form action="<?php echo $action ?>" method="POST" class="col s12" enctype="multipart/form-data">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="Nome" value="<?php echo $Produto->Nome; ?>" type="text" class="validate" required>
                        <label for="Nome">Nome</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="Preco" value="<?php echo $Produto->Valor; ?>" type="text" class="validate" required>
                        <label for="Preco">Valor</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name ="Descricao" value="<?php echo $Produto->Descricao; ?>" type="text" class="validate" required>
                        <label for="Descricao">Descricao</label>
                    </div>
                </div>
                <div class="row">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Imagem</span>
                            <input name="imagemArquivo"type="file" >
                        </div>
                        <div class="file-path-wrapper">
                            <input name ="imagem" value="<?php echo $Produto->Nome_imagem; ?>" class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                <button class="btn waves-effect waves-light red right" style="margin-right:10px;" type="button" name="action">
                    Cancelar
                </button>
                <button class="btn waves-effect waves-light right" style="margin-right:10px;" type="submit" name="action">Enviar
                    <i class="material-icons right">send</i>
                </button>

            </form>
        </div>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="./PHP-CRUD-Test/materialize/js/materialize.min.js"></script>
</body>

</html>