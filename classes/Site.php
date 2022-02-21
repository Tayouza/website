<?php

class Site
{

    public static function updateUsuarioOnline()
    {
        $horaAtual = date('Y-m-d H:i:s');
        $ip = $_SERVER['REMOTE_ADDR'];
        $navegador = get_browser(null, true);

        if (isset($_SESSION['online'])) {
            $token = $_SESSION['online'];

            $pdo = Database::conectar()->prepare("SELECT ultima_acao FROM usuariosonline WHERE token = ?");
            $pdo->execute(array($token));
            $horaRegistrada = $pdo->fetch(PDO::FETCH_ASSOC);

            if (!empty($horaRegistrada)) {
                $horaAtual = date('Y-m-d H:i:s');
                $pdo = Database::conectar()->prepare("UPDATE usuariosonline SET ultima_acao = ? WHERE token = ?");
                $pdo->execute(array($horaAtual, $token));
            } else {
                $pdo = Database::conectar()->prepare("INSERT INTO usuariosonline(ip,ultima_acao,token,navegador) VALUES (?,?,?,?)");
                $pdo->execute(array($ip, $horaAtual, $token, $navegador['browser']));
            }

        } else {

            $_SESSION['online'] = uniqid();
            $token = $_SESSION['online'];

            $pdo = Database::conectar()->prepare("INSERT INTO usuariosonline(ip,ultima_acao,token,navegador) VALUES (?,?,?,?)");
            $pdo->execute(array($ip, $horaAtual, $token, $navegador['browser']));
        }
    }

    public static function listarUsuariosOnline()
    {
        try {
            self::limparUsuariosOnline("30 SECOND");

            $pdo = Database::conectar()->query("SELECT * FROM usuariosonline");
            $result = $pdo->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (Exception $e) {
        }
    }


    public static function limparUsuariosOnline($tempoIntervalo)
    {
        $date = date('Y-m-d H:i:s');
        Database::conectar()->exec("DELETE FROM usuariosonline WHERE ultima_acao < '$date' - INTERVAL $tempoIntervalo");
    }
}
