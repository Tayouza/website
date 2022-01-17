<?php

    include('../config.php');

    $data = [];
    $assunto = "Novo Email no site";
    $corpo = '';
    foreach ($_POST as $key => $value) {
        $corpo .= ucfirst($key) . ": " . $value;
        $corpo .= "<hr>";
    }
    
    $nome = isset($_POST['nome']) ? $_POST['nome'] : 'Não informado';
    $email = $_POST['email'];
    $tel = isset($_POST['tel']) ? $_POST['tel'] : 'Não informado';
    $mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : 'Não informado';

    $novoEmail = new Email();
    $novoEmail->addEndereco('duvidas@tayouza.com', $nome);
    try {
    $novoEmail->formatarEmail(['assunto' => $assunto, 'corpo' => $corpo]);
        if ($novoEmail->enviarEmail()) {
            $data["sucesso"] = true;
            Database::gravarEmailDB($nome, $email, $tel, $mensagem);
        } else {
            $data["erro"] = true;
        }
    } catch (ErrorException $e) {
        $data["erro"] = true;
    }

    $data = json_encode($data);

    die($data);

?>