<?php 
    class Produtos{
        public static function ListaTodosProdutos(){
            $con = new PDO('mysql: host=localhost; dbname=crud_produtos;','root','');
            $sqlProdutos = "SELECT * FROM produtos ORDER BY ID DESC";
            $sqlProdutos = $con->prepare($sqlProdutos);
            $sqlProdutos->execute();
            $Produtos = array();

            while($coluna = $sqlProdutos->fetchObject('Produtos')){
                $Produtos[] = $coluna;
            }

            return $Produtos;
        }
    }