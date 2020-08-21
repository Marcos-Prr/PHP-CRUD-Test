<?php
            $url = (isset($_GET['url'])) ? $_GET['url']:'Inicio';
            $url = array_filter(explode('/',$url));
            $file = 'View/'.$url[0].'.php';
            if(is_file($file)){
                include($file);
            }else{
                include('View/404.php');
            }

        ?>
