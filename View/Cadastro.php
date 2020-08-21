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
            <ul class="right hide-on-med-and-down">
                <li><a href=""><i class="material-icons">search</i></a></li>
                <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
                <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
                <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="Nome" type="text" class="validate" required>
                        <label for="Nome">Nome</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="Preco" type="text" class="validate">
                        <label for="Preco">Valor</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="Descricao" type="text" class="validate">
                        <label for="Descricao">Descricao</label>
                    </div>
                </div>
                <div class="row">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Imagem</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
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