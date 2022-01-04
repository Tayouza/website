<?php

$autoload = function($class){
    if($class == 'Email'){
        require_once('classes/vendor/phpmailer/phpmailer/src/PHPMailer.php');
    }
    include ('classes/'.$class.'.php');
};

spl_autoload_register($autoload);

define('INCLUDE_PATH', 'http://localhost/aulasphp/');

$pdo = new PDO('mysql: host=localhost; dbname=emails; port=3306','root','');



function gravarEmailDB($pdo, $nome, $email, $tel, $mensagem)
{
    $sql = "INSERT INTO duvidas(nome,email,telefone,mensagem) VALUES (?,?,?,?)";
    $insert = $pdo->prepare($sql);
    $insert->execute([$nome, $email, $tel, $mensagem]);
}

?>