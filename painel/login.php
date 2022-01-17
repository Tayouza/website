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
            <a href="../home">X</a>
            <h2>TayouzaDev</h2>
            <?php

            if (isset($_POST['usuario'])) {
                $user = $_POST['usuario'];
                $password = $_POST['senha'];
                $pdo = Database::conectar();
                $sql = $pdo->prepare("SELECT * FROM `main`.`logins` WHERE email = ?");
                $sql->execute(array($user));
                $result = $sql->fetchAll();

                if (!empty($result)) {
                    $hash = $result[0]['senha'];

                    if (password_verify($password, $hash)) {
                        $_SESSION['login'] = true;
                        $_SESSION['user'] = $user;
                        header('Location: ' . INCLUDE_PATH_PAINEL);
                    } else {
                        echo '<p class="notify error">Senha incorreta!</span>';
                    }

                } else {
                    echo '<p class="notify error">Usuário não encontrado!</span>';
                }
            }

            ?>
            <div class="formLogin">
                <form action="" method="POST">
                    <input type="text" name="usuario" id="usuario" placeholder="Usuário" autocomplete="off" autofocus>
                    <input type="password" name="senha" id="senha" placeholder="Senha">
                    <div>
                        <input type="button" value="Registrar-se" id="alterRegistrar">
                        <input type="submit" value="Login" id="subLogin">
                    </div>
                </form>
            </div>

            <?php

            if (isset($_POST['regUsuario'])) {
                $regUser = $_POST['regUsuario'];
                $regPass = $_POST['regSenha'];

                $pdo = Database::conectar();
                $sql = $pdo->prepare("SELECT * FROM `main`.`logins` WHERE email = ?");
                $sql->execute(array($regUser));
                if ($sql->rowCount() == 0) {
                    $sql = $pdo->prepare("INSERT INTO `main`.`logins`(email, senha) VALUES (?,?)");
                    $sql->execute(array($regUser, password_hash($regPass, PASSWORD_DEFAULT)));
                    echo '<span class="notify success">Cadastrado com sucesso!</span>';
                } else {
                    echo '<span class="notify error">Usuário já existe!</span>';
                }
            }

            ?>

            <div class="formRegistro">
                <form action="" method="post">
                    <input type="text" name="regUsuario" id="regUsuario" placeholder="Usuário" require autocomplete="off">
                    <input type="password" name="regSenha" id="regSenha" placeholder="Senha" require>
                    <input type="password" name="confRegSenha" id="confRegSenha" placeholder="Confirmar senha" require>
                    <div>
                        <input type="button" value="Voltar" id="voltar">
                        <input type="submit" value="Registrar-se" id="registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo INCLUDE_PATH_PAINEL ?>script/painel.js"></script>
</body>

</html>