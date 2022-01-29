<?php

if (isset($_GET['logout'])) {
    Painel::logout();
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>style/painel.css">
    <title>Painel</title>
</head>

<?php

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

?>

<body>
    <main>
        <header>
            <a href="logout" class="btn tomato"><span>Logout</span></a>
        </header>
        <div class="conteudo">
            <?php

            $url = explode('?', $_GET['url']);
            if(count($url) < 2){
                $url[1] = 'home';
            }

            var_dump($url);

            switch($url[1]) {
                case 'home': include 'pagesPainel/painel-home.php'; break;
                case 'dados-pessoais': include 'pagesPainel/dados-pessoais.php'; break;

            };

            ?>
        </div>
    </main>
    <aside>
        <h2>TayouzaDev</h2>
        <h3>Bem vindo, <?php echo ucfirst($_SESSION['user']); ?></h3>
        <div class="menu">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH . 'home' ?>">Home</a></li>
                <li><a href="?dados-pessoais">Dados Pessoais</a></li>
            </ul>
        </div>
    </aside>
</body>

</html>