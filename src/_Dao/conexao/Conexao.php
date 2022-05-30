<?php
require 'dadosBanco.php';
require '../functionsDao.php';

class Conexao {

    private static object $conect;

    public function _construct(){
        //
    }

    public static function getConect() {
        try {

            if (!isset(self::$instance)) {

                self::$conect = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                    self::$conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }            
        } catch (PDOException $erro) {
            mostraErroLog($erro, __METHOD__);
        }

        return self::$conect;
    }
    
}

