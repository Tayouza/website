<?php

    include('../config.php');

    $url = $_GET['url'] ?? 'index';

    if($url === 'index'){    
        if(!Painel::logado()){
            include('login.php');
        }else{
            include('main.php');
        }
    }else if($url === 'logout'){
        Painel::logout();
    }else{
        header('Location: '.INCLUDE_PATH.'pages/404');
    }

?>
