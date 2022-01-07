<?php

session_start();

$autoload = function($class){
    if($class == 'Email'){
        require_once('classes/vendor/phpmailer/phpmailer/src/PHPMailer.php');
    }
    include ('classes/'.$class.'.php');
};

spl_autoload_register($autoload);

define('INCLUDE_PATH', 'http://localhost/aulasphp/');
define('INCLUDE_PATH_PAINEL', 'http://localhost/aulasphp/painel/');

$pdo = new PDO('mysql: host=localhost; dbname=main; port=3306','root','');



function gravarEmailDB($pdo, $nome, $email, $tel, $mensagem)
{
    $sql = "INSERT INTO emails(nome,email,telefone,mensagem) VALUES (?,?,?,?)";
    $insert = $pdo->prepare($sql);
    $insert->execute([$nome, $email, $tel, $mensagem]);
}

?>