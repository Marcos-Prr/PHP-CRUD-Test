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
        $caminhoDiretorio = "./imagens/";
        $caminhoArquivo = $caminhoDiretorio . basename($arquivo["imagemArquivo"]["name"]);
        $uploadOk = 1;
        $extensao = pathinfo($_FILES["imagemArquivo"]["name"], PATHINFO_EXTENSION);

        $extensoesPermitidas = array(
            "png",
            "jpg",
            "jpeg"
        );

        if (!in_array($extensao, $extensoesPermitidas)) {
            throw new Exception("extensão de arquivo nao permitida. Extensoes permitidas são : png ,jpg e jpeg.");
        }
        if (file_exists($caminhoArquivo)) {
            $uploadOk = 0;
            throw new Exception("Arquivo já existe ou nao é compativel");
        }
        if ($arquivo["imagemArquivo"]["size"] > 1500000) {
            $uploadOk = 0;
            throw new Exception("Arquivo de imagem muito grande");
        }
        if ($uploadOk == 1) {
            move_uploaded_file($arquivo["imagemArquivo"]["tmp_name"], $caminhoArquivo);
        }
    }
}
