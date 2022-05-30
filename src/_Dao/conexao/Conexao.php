<?php

class Conexao {

    private static object $conect;

    public function _construct(){
        //
    }

    public static function getConect() {
        try {

            if (!isset(self::$conect)) {

                self::$conect = new PDO("mysql:host=localhost;dbname=id18889760_bdmanualphp", "id18889760_hoot", "tF/JJDC%xklL2JU+");
                    self::$conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }            
        } catch (PDOException $erro) {
            print_r($erro);
        }

        return self::$conect;
    }
    
}

?>