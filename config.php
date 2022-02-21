<?php

session_start();
date_default_timezone_set('America/sao_paulo');

$autoload = function($class){
    if($class == 'Email'){
        require_once('classes/vendor/phpmailer/phpmailer/src/PHPMailer.php');
    }
    include ('classes/'.$class.'.php');
};

spl_autoload_register($autoload);

define('INCLUDE_PATH', 'http://localhost/aulasphp/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/');

//conectar DB
define('TYPEDB', 'mysql');
define('HOST', 'localhost');
define('DATABASE', 'main');
define('USER', 'root');
define('PASSWORD', '');
define('PORT','3306');


?>