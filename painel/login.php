<?php



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>style/painel.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="login">
            <a href="../index.php">X</a>
            <h2>TayouzaDev</h2>
            <form action="" method="post">
                <input type="text" name="usuario" id="usuario" placeholder="Usuário" autocomplete="off">
                <input type="password" name="senha" id="senha" placeholder="Senha">
                <div>
                    <input type="button" value="Registrar">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>

</html>