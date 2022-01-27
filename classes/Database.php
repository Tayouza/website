<?php

    class Database{

        private static $pdo;

        public static function conectar(){
            if(!isset(self::$pdo)){
                try{
                    self::$pdo = new PDO(TYPEDB.':host='.HOST.';dbname='.DATABASE.';port='.PORT,USER,PASSWORD);
                    self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }catch(Exception $e){
                    echo '<span style="color: red; font-size: 12px; text-align: center;">Erro ao Conectar ao servidor<span>';
                }
            }
            return self::$pdo;
        }

        
        public static function gravarEmailDB($nome, $email, $tel, $mensagem)
        {
            $conect = self::conectar();
            $sql = "INSERT INTO `main`.`emails`(nome,email,telefone,mensagem) VALUES (?,?,?,?)";
            $insert = $conect->prepare($sql);
            $insert->execute([$nome, $email, $tel, $mensagem]);
        }
    }


?>