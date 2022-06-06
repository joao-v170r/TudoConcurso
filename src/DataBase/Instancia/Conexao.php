<?php
namespace TudoConcurso\DataBase\Instancia;

use PDO;
use PDOException;

abstract class Conexao {

    protected object $conect;

    public function __construct() {
        //
    }

    public function __destruct() {
        $this->desconect();
    }

    protected function setConect(): void{
        try {

            if (!isset($this->conect)) {

                $this->conect = new PDO("mysql:host=localhost;dbname=id18889760_bdmanualphp", "id18889760_hoot", "tF/JJDC%xklL2JU+");
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }            
        } catch (PDOException $erro) {
            print_r($erro);
        }

    }

    protected function desconect(): void{
        try {

            if (isset($this->conect)) {
                unset($this->conect);
            }

        }   catch (PDOException $erro) {
            print_r($erro);
        }

    }
    
}

?>