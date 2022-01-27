<?php

class Painel{
    public static function logado(){
        return isset($_SESSION['login']) ? true : false;
    }

    public static function logout(){
        session_destroy();
        sleep(1);
        header("Location: ".INCLUDE_PATH);
    }
}