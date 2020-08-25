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
        try {

            $this->salvaImagem($_FILES);
            Produtos::criar($_POST);
            header('Refresh:0 , url=index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function editar($idProduto)
    {
        if (empty($_POST)) {

            echo  $this->render('Cadastro.php');
        } else {
            try {
                if (!empty($_FILES)) {
                    $this->salvaImagem($_FILES);
                }

                Produtos::editar($_POST, $idProduto);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            header('Refresh:0 , url = ../index ');
        }
    }

    public function excluir($idProduto)
    {
        try {

            Produtos::excluir($idProduto);
            header('Refresh:0 , url=../index');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
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

    public function salvaImagem($arquivo)
    {
        $targetDir = "./imagens/";
        $target_file = $targetDir . basename($arquivo["imagemArquivo"]["name"]);
        $uploadOk = 1;

        if (file_exists($target_file)) {
            $uploadOk = 0;
            throw new Exception("Arquivo já existe");
        }
        if ($arquivo["imagemArquivo"]["size"] > 1500000) {
            $uploadOk = 0;
            throw new Exception("Arquivo de imagem muito grande");
        }
        if ($uploadOk == 1) {
            move_uploaded_file($arquivo["imagemArquivo"]["tmp_name"], $target_file);
        }
    }
}
