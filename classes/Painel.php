<?php

class Painel
{
    public static function logado()
    {
        return isset($_SESSION['login']) ? true : false;
    }

    public static function logout()
    {
        session_destroy();
        sleep(1);
        header("Location: " . INCLUDE_PATH);
    }

    public static function getDadosPessoais($id)
    {
        $query = Database::conectar()->query("SELECT * FROM dadospessoais
                                    INNER JOIN logins 
                                    ON logins.id = dadospessoais.id_login
                                    INNER JOIN cargos
                                    ON dadospessoais.cargo = cargos.id
                                    WHERE logins.id = $id");
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public static function alterarDadosPessoais($dados = array(), $where)
    {
        $keys = array_keys($dados);
        $fields = implode("=?,", $keys);
        $values = array_values($dados);

        array_push($values, $where);

        $pdo = Database::conectar()->query("SELECT * FROM dadospessoais WHERE id_login = $where");
        $result = $pdo->fetch(PDO::FETCH_ASSOC);

        if (!empty($result)) {
            try {
                $pdo = Database::conectar()->prepare("UPDATE dadospessoais SET $fields =? WHERE id_login=?");
                $pdo->execute($values);
                return '<p class="notify success">Dados alterados com sucesso!</p>';
            } catch (Exception $e) {
                return '<p class="notify error">Ocorreu um erro!</p>';
            }
        }else{
            try{
                $pdo = Database::conectar()->prepare("INSERT INTO dadospessoais(nome, idade, id_login) VALUES (?,?,?) ");
                $pdo->execute($values);
                return '<p class="notify success">Dados inseridos com sucesso!</p>';
            }catch(Exception $e){
                return '<p class="notify error">Ocorreu um erro!</p>';
            }
        }
    }

    public static function listarUsuariosCadastrados(){
        $pdo = Database::conectar()->query("SELECT * FROM logins as log
                                            INNER JOIN dadospessoais as dados
                                            ON log.id = dados.id_login
                                            INNER JOIN cargos
                                            ON dados.cargo = cargos.id");
        $result = $pdo->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}
