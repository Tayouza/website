<?php

require('config.php'); //obter configs gerais

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>styles/style.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>styles/contato.css">
    <title>Landing Page</title>
</head>

<body>

    <header id="topo">
        <div class="logo">
            <a href="<?php echo INCLUDE_PATH ?>home">
                <h1>TayouzaDev</h1>
            </a>
        </div>
        <div class="menus">
            <nav class="desk">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH ?>home">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>#sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>#servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>contato">Contato</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>painel">Entrar</a></li>
                </ul>
            </nav>
            <div id="menu-hamburguer">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="mobile">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH ?>home">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>#sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>#servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>contato">Contato</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>painel">Entrar</a></li>
                </ul>
            </nav>
        </div>
    </header>

    

    <?php

    $url = isset($_GET['url']) ? $_GET['url'] : 'home';

    if (file_exists('pages/' . $url . '.php')) {
        include('pages/' . $url . '.php');
        include('footer.php');
    } else {
        include('pages/404.php');
    }


    ?>

    <div class="overlay-loading">
        <img src="<?php echo INCLUDE_PATH ?>assets/load.gif" alt="">
    </div>

    <script src="<?php echo INCLUDE_PATH; ?>scripts/jquery-3.6.0.min.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>scripts/slide.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>scripts/jquery.mask.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>scripts/script.js"></script>
    <script>
        $('#menu-hamburguer').click(function() {
            $('.mobile').slideToggle();
            $('#menu-hamburguer').toggleClass('openMenu');
        });
    </script>
    <script src="<?php echo INCLUDE_PATH ?>scripts/formulario.js"></script>


</body>

</html>