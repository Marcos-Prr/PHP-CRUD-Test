<?php 
require_once './Model/Connection.php';
    class Produtos{
        public static function ListaTodosProdutos(){
            $con = Connection::getConn();
            $sqlProdutos = "SELECT * FROM produtos ORDER BY ID DESC";
            $sqlProdutos = $con->prepare($sqlProdutos);
            $sqlProdutos->execute();
            $Produtos = array();

            while($coluna = $sqlProdutos->fetchObject('Produtos')){
                $Produtos[] = $coluna;
            }

            return $Produtos;
        }

        public static function criar($postDados){
            $con = Connection::getConn();

            $sqlInsert = $con->prepare('INSERT INTO produtos (Nome,Valor,Descricao,Nome_imagem) VALUES (:Nome,:Valor,:Descricao,:Nome_imagem)');
            $sqlInsert->bindValue(':Nome', $postDados['Nome']);
            $sqlInsert->bindValue(':Valor', $postDados['Preco']);
            $sqlInsert->bindValue(':Descricao', $postDados['Descricao']);
            $sqlInsert->bindValue(':Nome_imagem', $postDados['imagem']);
            $resultado = $sqlInsert->execute();

            if($resultado == false){
                throw new Exception("Falha ao inserir produto");
            }
        }
    
        public static function editar($postDados,$idProduto){
            $con = Connection::getConn();

            $Produto = Produtos::selecionaPorId($idProduto);
            $caminhoDiretorio = "./imagens/". $Produto->Nome_imagem;
            unlink($caminhoDiretorio);

            $sqlEditar = $con->prepare("UPDATE produtos SET Nome = :Nome, Valor = :Valor , Descricao = :Descricao , Nome_imagem = :Nome_imagem WHERE id = :id ");
            $sqlEditar->bindValue(':Nome', $postDados['Nome']);
            $sqlEditar->bindValue(':Valor', $postDados['Preco']);
            $sqlEditar->bindValue(':Descricao', $postDados['Descricao']);
            $sqlEditar->bindValue(':Nome_imagem', $postDados['imagem']);
            $sqlEditar->bindValue(':id', $idProduto);
            $resultado = $sqlEditar->execute();

            if($resultado == false){
                throw new Exception("Falha ao alterar dados do Produto");
            }
        }
    
        public static function excluir($idProduto){
            $con = Connection::getConn();

            $Produto = Produtos::selecionaPorId($idProduto);
            $caminhoDiretorio = "./imagens/". $Produto->Nome_imagem;
            unlink($caminhoDiretorio);
            
            $sqlDelete = $con->prepare("DELETE FROM produtos WHERE id = :id");
            $sqlDelete->bindValue(':id', $idProduto);
            $resultado = $sqlDelete->execute();

            if($resultado == false){
                throw new Exception("Falha ao excluir produto");
            }
        }

        public static function selecionaPorId($idProduto){

            $con = Connection::getConn();
            $convertIdProduto = intval($idProduto);
            $sqlSeleciona = $con->prepare("SELECT * FROM produtos WHERE id = :id");
            $sqlSeleciona->bindValue(':id', $convertIdProduto);
            $sqlSeleciona->execute();
            $Produto =  $sqlSeleciona->fetchObject('Produtos');

            return $Produto;
        }
    }