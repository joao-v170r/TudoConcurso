<?php
namespace TudoConcurso\Service;

class BancaInteressa
{

    use AcesssoAtributos;

    private int $idUsuario;
    private int $idBanca;

    public function __construct() {
        //
    }

    public function __destruct() {
        //
    }

    public function setIdUsuarios(int $idUsuario): void {
        if(empty($idUsuario)){
            echo "Error in " . __METHOD__ ;
            return;
        }

        $this->idUsuarios = $idUsuario;
    }    

    public function setIdBanca(int $idBanca): void {
        if (empty($idBanca)) {
            echo "Error in " . __METHOD__ ;
            return;
        }

        $this->idBanca = $idBanca;
    }
}