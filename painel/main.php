<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>style/painel.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>styles/placeholder.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>styles/contato.css">
    <title>Painel</title>
</head>

<?php

if (isset($_GET['logout'])) {
    Painel::logout();
}

if (!Painel::logado()) {
    echo '
        <div class="aviso">
            <h2>Você <span>não</span> pode acessar esta página, primeiro faça login!</h2>
            <p> Já está sendo redirecionado!</p>
        </div>

    
    ';
    header("refresh:3;url=login");
    die();
}

if (Painel::logado()) {
    $cargo = Painel::getDadosPessoais($_SESSION['id']);
    extract($cargo);
}

?>

<body class="main-page">
    <main>
        <header>
            <a href="logout" class="btn tomato"><span>Logout</span></a>
        </header>
        <div class="conteudo">

            <?php

            $rota = $_GET['route'] ?? 'painel-home';

            if (file_exists('pagesPainel/' . $rota . '.php')) {
                include 'pagesPainel/' . $rota . '.php';
            } else {
                include 'pagesPainel/error-rota.php';
            }

            ?>

        </div>
    </main>
    <aside>
        <span id="openClose"></span>
        <div class="dados-login">
            <h2>TayouzaDev</h2>
            <div class="img-perfil">
                <img src="<?= INCLUDE_PATH ?>assets/tayouza.jpg" title="<?= $_SESSION['nome'] ?>" alt="<?= $_SESSION['nome'] ?>">
            </div>
            <p>Bem vindo(a)</p>
            <h3><?= ucfirst($_SESSION['nome']); ?></h3>
            <p><em><?= ucfirst($nome_cargo); ?></em></p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH . 'home' ?>">Página Inicial<i class="bi-house"></a></i></li>
                <li><a href="?route=painel-home">Painel de controle<i class="bi-clipboard-data"></i></a></li>
                <li><a href="?route=dados-pessoais">Dados Pessoais<i class="bi-person-lines-fill"></i></a></li>
            </ul>
        </div>
    </aside>
</body>
<script src="<?= INCLUDE_PATH_PAINEL ?>script/jquery.js"></script>
<script src="<?= INCLUDE_PATH_PAINEL ?>script/jquery-ui.min.js"></script>
<script src="<?= INCLUDE_PATH_PAINEL ?>script/painel.js"></script>

</html>