<?php

class Login
{


    public static function logarConta($user, $password)
    {
        $pdo = Database::conectar();
        $sql = $pdo->prepare("SELECT * FROM `main`.`logins` WHERE user = ?");
        $sql->execute(array($user));
        $result = $sql->fetch();

        if (!empty($result)) {
            $hash = $result['pass'];

            if (password_verify($password, $hash)) {
                $pdo = Database::conectar()->query("SELECT * FROM dadospessoais WHERE dadospessoais.id_login = " . $result['id']);
                $infos = $pdo->fetch(PDO::FETCH_ASSOC);
                $_SESSION['login'] = true;
                $_SESSION['id'] = $result['id'];
                $_SESSION['user'] = $user;
                $_SESSION['nome'] = $infos['nome'];
                $_SESSION['cargo'] = $infos['cargo'];
                header('Location: ' . INCLUDE_PATH_PAINEL);
                die();
            } else {
                echo '<p class="notify error">Senha incorreta!</span>';
            }
        } else {
            echo '<p class="notify error">Usuário não encontrado!</span>';
        }
    }

    public static function RegistrarConta($regUser, $regPass)
    {
        $pdo = Database::conectar();
        $sql = $pdo->prepare("SELECT * FROM `main`.`logins` WHERE user = ?");
        $sql->execute(array($regUser));
        if ($sql->rowCount() === 0) {
            $sql = $pdo->prepare("INSERT INTO `main`.`logins`(user, pass) VALUES (?,?)");
            $sql->execute(array($regUser, password_hash($regPass, PASSWORD_DEFAULT)));

            $sql = $pdo->query("SELECT id FROM `main`.`logins` WHERE `user` = '$regUser'");
            $result = $sql->fetch(PDO::FETCH_ASSOC);

            $sql = $pdo->prepare("INSERT INTO `main`.`dadospessoais`(id_login, cargo) VALUES (?,?)");
            $sql->execute(array($result['id'], 3));

            echo '<span class="notify success">Cadastrado com sucesso!</span>';
        } else {
            echo '<span class="notify error">Usuário já existe!</span>';
        }
    }
}
