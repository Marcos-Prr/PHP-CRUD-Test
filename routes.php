<?php 
    class routes{
        public function start($urlGet){
            $controller ='ProdutosCadastroController';
            $acao =  (isset($urlGet['url'])) ? $urlGet['url']: 'index';
            $acao = array_filter(explode('/',$acao));

            if(!class_exists($controller)){
                $controller = 'erro';
                $acao[0]  = 'index';
            }
            if($acao[0] =='editar' || $acao[0] == 'excluir' ){
                if(!empty($_POST)){
                    call_user_func_array(array(new $controller, $acao[0]), array($acao[1]));
                }
                else{
                    call_user_func_array(array(new $controller, $acao[0]), array($acao[1]));
                }
                
            }
            else{
                call_user_func_array(array(new $controller, $acao[0]), array());
            }

        }
    }