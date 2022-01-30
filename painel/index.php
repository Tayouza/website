<?php

include('../config.php');

$url = $_GET['url'] ?? 'index';

switch ($url) {
    case 'index':
        if (!Painel::logado()) {
            header('Location: login');
            break;
        } else {
            header('Location: main');
            break;
        };
    case 'login':
        include 'pagesPainel/login.php';
        break;
    case 'main':
        include 'pagesPainel/main.php';
        break;
    case 'logout':
        Painel::logout();
        break;
    default:
        header('Location: ' . INCLUDE_PATH . 'pages/404');
        break;
}