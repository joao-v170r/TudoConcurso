<?php
namespace TudoConcurso\Service;

class ConcursoUsuario {

    use TraitGetSet;

    private int $idUsuario;
    private int $idConcurso;
    private int $usuarioIncrito;
    private int $statusConcurso;

    public function __construct() {
        //
    }

    public function __destruct() {
     //
    }

    public function setIdUsuarios(int $idUsuario): void{
        if(empty($idUsuario)){
            echo "Error in " . __METHOD__ ;
            return;
        }

        $this->idUsuario = $idUsuario;
    }

    public function setIdConcurso(int $idConcurso):void{
        if(empty($idConcurso)){
            echo "Error in " . __METHOD__ ;
            return;
        }

        $this->idConcurso = $idConcurso;
    }

    public function setUsuarioIncrito(int $usuarioIncrito):void {
        if($usuarioIncrito <= 0 && $usuarioIncrito >= 1){
            echo "Error in " . __METHOD__ ;
            return;
        }

        $this->usuarioIncrito = $usuarioIncrito;
    }

    public function setStatusConcurso(int $statusConcurso): void{
        if($statusConcurso <= 0 && $statusConcurso >= 1){
            echo "Error in " . __METHOD__ ;
            return;
        }

        $this->statusConcurso = $statusConcurso;
    }   
    
}
