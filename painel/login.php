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
    <title>Login</title>
</head>

<body>
    <div class="container">

        <div class="login drag">
            <a href="../home">X</a>
            <h2>TayouzaDev</h2>
            <?php

            if (isset($_POST['usuario'])) {
                $user = $_POST['usuario'];
                $password = $_POST['senha'];

                echo(Login::logarConta($user, $password));
            }

            ?>
            <div class="formLogin">
                <form action="" method="POST">
                    <div class="field-wrap">
                        <div class="field">
                            <input type="text" name="usuario" id="usuario" autocomplete="off" autofocus required>
                            <label for="usuario" title="Usuário" data-title="Usuário"></label>
                        </div>
                        <div class="field">
                            <input type="password" name="senha" id="senha" required>
                            <label for="senha" title="Senha" data-title="Será que é essa senha?"></label>
                        </div>
                    </div>
                    <div class="btns">
                        <input type="button" value="Registrar-se" id="alterRegistrar">
                        <input type="submit" value="Login" id="subLogin">
                    </div>
                    <div class="revelarsenha">
                        <i class="bi-eye pass-login pass-login-visivel"></i>
                        <i class="bi-eye-slash pass-login pass-login-invisivel"></i>
                    </div>
                </form>
            </div>

            <?php

            if (isset($_POST['regUsuario'])) {
                $regUser = $_POST['regUsuario'];
                $regPass = $_POST['regSenha'];
                
                Login::RegistrarConta($regUser, $regPass);
            }

            ?>

            <div class="formRegistro">
                <form action="" method="post">
                    <div class="field-wrap">
                        <div class="field">
                            <input type="text" name="regUsuario" id="regUsuario" required autocomplete="off">
                            <label for="regUsuario" title="Usuário" data-title="Usuário"></label>
                        </div>
                        <div class="field">
                            <input type="password" name="regSenha" id="regSenha" required>
                            <label for="regSenha" title="Senha" data-title="Senha"></label>
                        </div>
                        <div class="field">
                            <input type="password" name="confRegSenha" id="confRegSenha" required>
                            <label for="confRegSenha" title="Confirmar Senha" data-title="Confirmar Senha"></label>
                        </div>
                        <div class="revelarsenha">
                            <i class="bi-eye pass-registro pass-registro-visivel"></i>
                            <i class="bi-eye-slash pass-registro pass-registro-invisivel"></i>
                        </div>
                    </div>
                    <div class="btns">
                        <input type="button" value="Voltar" id="voltar">
                        <input type="submit" value="Registrar-se" id="registrar">
                    </div>
                    <div class="revelarsenha">
                        <i class="bi-eye pass-confRegistro pass-confRegistro-visivel"></i>
                        <i class="bi-eye-slash pass-confRegistro pass-confRegistro-invisivel"></i>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo INCLUDE_PATH_PAINEL ?>script/jquery.js "></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>script/jquery-ui.min.js "></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>script/painel.js"></script>
</body>

</html>