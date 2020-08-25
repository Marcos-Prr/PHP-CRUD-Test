<?php
require_once './Model/Produtos.php';

class ProdutosCadastroController
{
    public function index()
    {
        echo $this->render('Inicio.php');
    }

    public function criar()
    {
        Produtos::criar($_POST);

        $arquivoDiretorio = './imagens/';

        $targetDir = "./imagens/";
        $target_file = $targetDir . basename($_FILES["imagemArquivo"]["name"]);
        $uploadOk = 1;

        if (file_exists($target_file)) {
            echo "Arquivo já existe";
            $uploadOk = 0;
        }

        if ($_FILES["imagemArquivo"]["size"] > 500000) {
            echo "Arquivo de imagem muito grande";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Upload da imagem falhou";
            header('Refresh:2 , url=index');
        } else {
            move_uploaded_file($_FILES["imagemArquivo"]["tmp_name"], $target_file);
            header('Refresh:2 , url=index');
        }
    }

    public function editar($idProduto)
    {

        if (empty($_POST)) {
            echo  $this->render('Cadastro.php');
        } else {
            Produtos::editar($_POST, $idProduto);
            header('Refresh:0 , url = ../index ');
        }
    }

    public function excluir($idProduto)
    {
        Produtos::excluir($idProduto);
        header('Refresh:2 , url=../index');
    }

    public function Cadastro()
    {
        echo $this->render('Cadastro.php');
    }

    public function render($arquivo)
    {

        ob_start();
        include('./View/' . $arquivo);
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}
