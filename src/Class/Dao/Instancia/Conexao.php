<?php
namespace TudoConcurso\Class\Dao\Instancia;

use PDO;

class Conexao {

    private static object $conect;

    public function __construct() {
       //
    }

    public function __destruct() {
        self::desconect();
    }

    public static function getConect() {
        try {

            if (!isset(self::$conect)) {

                self::$conect = new PDO("mysql:host=localhost;dbname=tudo_concurso_base", "root", "");
                    self::$conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }            
        } catch (PDOException $erro) {
            print_r($erro);
        }

        return self::$conect;
    }

    public static function desconect() {
        try {

            if (isset(self::$conect)) {
                self::$conect = null;
            }

        }   catch (PDOException $erro) {
            print_r($erro);
        }

    }
    
}

?>